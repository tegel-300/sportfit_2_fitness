<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommentaireRepository;
use App\Entity\Evenement;
use App\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
class EvenementMobileController extends AbstractController
{
    /**
     * @Route("/Evenement/mobile", name="app_Evenement_mobile")
     */
   /* public function index(): Response
    {
        return $this->render('Evenement_mobile/index.html.twig', [
            'controller_name' => 'EvenementMobileController',
        ]);
    }
*/
    /**
     * @Route("/listeEvenement", name="listeEvenement")
     */
    public function AllEvenement(NormalizerInterface $Normalizer){
        $repo = $this->getDoctrine()->getRepository(Evenement::class);
        $evenement = $repo->findAll();
        $jsonContent = $Normalizer->normalize($evenement, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/showEvenement/{id}", name="showEvenement")
     */
    public function ShowEvenement(NormalizerInterface $Normalizer, $id){
        $repo = $this->getDoctrine()->getRepository(Evenement::class);
        $evenement = $repo->find($id);
        $jsonContent = $Normalizer->normalize($evenement, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/addEvenementJSON",name="addEvenementJSON")
     */
    public function ajouterEvenementJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();

        $event->setNom($request->get('nom'));
        $event->setDescription($request->get('description'));
        $event->setDate(new \DateTime());
        $event->setCategorie($request->get('categorie'));

       // $event->setImage($request->get('image'));
        $event->setNbrPersonnes($request->get('nbrPersonnes'));
//        $event->setLikes($request->get('likes'));
//        $event->setUnlike($request->get('unlike'));
          $em->persist($event);
        $em->flush();
        $jsonContent = $Normalizer->normalize($event, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;
    }

    /**
     * @Route("/deleteEvenementJSON", name="deleteEvenementJSON")
     */
    public function deleteEvenementJSON(Request $request)

    {$id=$request->get("id");
        $em=$this->getDoctrine()->getManager();
        $evenement=$em->getRepository(Evenement::class)->find($id);
        if($evenement!=null)
        {$em->remove($evenement);
            $em->flush();

            $serialize=new Serializer([new ObjectNormalizer()]);
            $formatted=$serialize->normalize("Evenement supprimee avec succes");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id invalide");
    }

    /**
     *@Route("/updateEvenementJSON", name="updateEvenementJSON")
     */
    public function updateEvenementJSON(Request $request)
    {
        $idsoc=$request->get("id");
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository(Evenement::class)->find($idsoc);
        $event->setNom($request->get('nom'));
        $event->setDate(new \DateTime());
        $event->setNbrPersonnes($request->get('nbrPersonnes'));
        //$event->setImage($request->get('image'));
        $event->setCategorie($request->get('categorie'));
        $event->setDescription($request->get('description'));
//        $event->setLikes($request->get('likeEvenement'));
//        $event->setunlike($request->get('dislikeEvenement'));
        $em->persist($event);
        $em->flush();
        $serialize=new Serializer([new ObjectNormalizer()]);
        $formatted=$serialize->normalize("Evenement modifiee avec succes");
        return new JsonResponse($formatted);

    }

}