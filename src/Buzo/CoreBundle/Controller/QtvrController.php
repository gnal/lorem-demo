<?php

namespace Buzo\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QtvrController extends Controller
{
    public function showAction()
    {
        $parameters['object'] = $this->get('buzo_core.qtvr_manager')->find(['a.secret' => $this->getRequest()->attributes->get('secret')]);

        return $this->render('BuzoCoreBundle:Qtvr:show.html.twig', $parameters);
    }
}
