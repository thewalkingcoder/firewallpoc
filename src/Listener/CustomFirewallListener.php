<?php

namespace App\Listener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CustomFirewallListener
{
    public function __invoke(RequestEvent $event)
    {

        $uri = $event->getRequest()->getRequestUri();

            $match = preg_match("/demo/", $uri);
            if($match === 1){
                throw new NotFoundHttpException('page not found [listener]');
            }

    }
}