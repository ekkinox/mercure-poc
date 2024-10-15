<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

class SubscribeController extends AbstractController
{
    public function __construct(private readonly Environment $twig) {}

    #[Route('/subscribe', name: 'subscribe')]
    public function subscribe(Request $request): Response
    {
        return new Response(
            $this->twig->render(
                'subscribe.html.twig',
                [
                    'lastEventId' => $request->get('lastEventId')
                ]
            ));
    }
}