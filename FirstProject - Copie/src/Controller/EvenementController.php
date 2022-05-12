<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Entity\Evenement;
use App\Form\CommentsType;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/evenement")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/back", name="app_evenement_back", methods={"GET"})
     */
    public function index_back(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/back.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
    /**
     * @Route("/", name="app_evenement_index", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
    /**
     * @Route("/stat", name="statistique")
     */
    public function sta(EvenementRepository $evenementRepository)
    {
        $evenement = $evenementRepository->findAll();
        $nom = [];
        $likes = [];
        $unlike = [];

        foreach($evenement as $evenement){
            $nom[] = $evenement->getNom();
            $likes[] = $evenement->getLikes();
            $unlike[] = $evenement->getUnlike();
        }
        return $this->render('evenement/users_stats.html.twig',[
            'nom' => json_encode($nom), 'likes' => json_encode($likes),
            'unlike' => json_encode($unlike)
        ]);

    }


    /**
     * @Route("/new", name="app_evenement_new")
     */
    public function new(Request $request, EvenementRepository $evenementRepository): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get("image")->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('images_directory'),$fileName
            );
            $evenement->setImage($fileName);
//            $evenement->setDate(new \DateTime());

            $evenementRepository->add($evenement);
            return $this->redirectToRoute('app_evenement_back', [], Response::HTTP_SEE_OTHER);

        }


        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/show", name="app_evenement_show")
     */
    public function show(Evenement $evenement, Request $request,$id): Response
    {
        //partie commentaires
        //on crée le commentaire vierge
        $comment = new Comments();

        //on génère le formulaire
        $commentForm = $this->createForm(CommentsType::class, $comment);

        $commentForm->handleRequest($request);
        //traitement du formulaire
        if($commentForm->isSubmitted()&&$commentForm->isValid()){
            $comment->setAnnonces($evenement);
            $comment->setCreatedAt(new \DateTimeImmutable());
//on recupère le contenu du champ parent
         //   $parentid = $commentForm->get("parentid")->getData();
//chercher le commentaire correspondant

         $em = $this->getDoctrine()->getManager();

        //  $parent =$em->getRepository(Comments::class)->find($parentid);

            //def parent
          //  $comment->setparent($parent);

             $em->persist($comment);
            $em->flush();

            $this->addFlash('message', 'Votre commentaire a bien été envoyé');
            return $this->redirectToRoute('app_evenement_show',['id'=>
                $evenement->getId()]);
        }
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'commentForm'=>$commentForm->createView()
        ]);
    }
    /**
     * @Route("/{id}", name="app_evenement_back_show", methods={"GET"})
     */
    public function show_back(Evenement $evenement): Response
    {
        return $this->render('evenement/show_back.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_evenement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->add($evenement);
            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/back_edit", name="app_evenement_back_edit", methods={"GET", "POST"})
     */
    public function edit_back(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->add($evenement);
            return $this->redirectToRoute('app_evenement_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/back-edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement);
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/del", name="app_evenement_delete_back", methods={"POST"})
     */
    public function delete_back(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement);
        }

        return $this->redirectToRoute('app_evenement_back', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/likes/{id}", name="addLike")
     */
    public function addLikes($id){

        $repository= $this->getDoctrine()->getRepository(Evenement::class);
        $evenement = $repository->find($id);

        $evenement->setlikes($evenement->getLikes() + 1);

        $manager = $this->getDoctrine()->getManager();
        $manager ->persist($evenement);
        $manager->flush();

        return $this->redirectToRoute('app_evenement_index', [
            'id' => $evenement->getId()
        ]);
    }

    /**
     * @Route("/dislike/{id}", name="adddisLike")
     */
    public function adddisLike($id){

        $repository= $this->getDoctrine()->getRepository(Evenement::class);
        $evenement = $repository->find($id);

        $evenement->setunlike($evenement->getunlike() + 1);

        $manager = $this->getDoctrine()->getManager();
        $manager ->persist($evenement);
        $manager->flush();

        return $this->redirectToRoute('app_evenement_index', [
            'id' => $evenement->getId()
        ]);
    }

//    /**
//     * @Route("TrierParDateDESC", name="Trierr")
//     */
//    public function TrierParNom(EvenementRepository $repository ): Response
//    {
//        $am = $repository->trier();
//
//        return $this->render('evenement/index.html.twig', [
//            'evenement' => $am,
//        ]);
   // }


}
