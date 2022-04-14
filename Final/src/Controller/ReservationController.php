<?php

namespace App\Controller;

use App\Entity\ReservationEvent;
use App\Form\ReservationEventType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    /**
     * @Route("/", name="app_reservation_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservationEvents = $entityManager
            ->getRepository(ReservationEvent::class)
            ->findAll();

        return $this->render('reservation/index.html.twig', [
            'reservation_events' => $reservationEvents,
        ]);
    }
    /**
     * @Route("/reservation", name="admin_reservation", methods={"GET"})
     */
    public function liste(EntityManagerInterface $entityManager): Response
    {
        $reservationEvents = $entityManager
            ->getRepository(ReservationEvent::class)
            ->findAll();

        return $this->render('reservation/reservatoin.html.twig', [
            'reservation_events' => $reservationEvents,
        ]);
    }
    /**
     * @Route("/new", name="app_reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationEvent = new ReservationEvent();
        $form = $this->createForm(ReservationEventType::class, $reservationEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationEvent);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation_event' => $reservationEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reservation_show", methods={"GET"})
     */
    public function show(ReservationEvent $reservationEvent): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation_event' => $reservationEvent,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reservation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReservationEvent $reservationEvent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationEventType::class, $reservationEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation_event' => $reservationEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reservation_delete", methods={"POST"})
     */
    public function delete(Request $request, ReservationEvent $reservationEvent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationEvent->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
