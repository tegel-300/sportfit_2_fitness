<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 *
 * @Route("/api", name="app_api"
 */

class ApiController extends AbstractController
{
    /**
     * @Route("/liste", name="list", methods={"GET"})
     */
    public function liste(EvenementRepository $evenementRepository)
    {
        //on recupère la liste des évenement

        $evenement = $evenementRepository->findAll();

        $encoders= [new jsonEncoder()];
        $normalizer= [new ObjectNormalizer()];
        $seriallizer= new Serializer($normalizer, $encoders);
        //on convertit en json
        $jsonContent = $seriallizer->serialize($evenement, 'json',[
            'circuler_refence_handler' => function($object){
            return$object->getId();
            }
        ]);
        dd($evenement);

//                return $this->render('api/index.html.twig', [
//            'controller_name' => 'ApiController',
//        ]);
    }
}
