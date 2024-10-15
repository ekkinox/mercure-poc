<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Attribute\Route;

class PublishController extends AbstractController
{
    public function __construct(private readonly HubInterface $hub) {}

    #[Route('/publish', name: 'publish')]
    public function publish(): Response
    {
        $time = hrtime(true);

        $message = sprintf('test message id %s', $time);

        $update = new Update(
            'notifications/example',
            json_encode(['message' => $message]),
            false,
            $time
        );

        $resp = $this->hub->publish($update);

        return new Response(
            sprintf("Notification published with success.<br/>Message: %s<br/>Event ID: %s", $message, $resp)
        );
    }
}