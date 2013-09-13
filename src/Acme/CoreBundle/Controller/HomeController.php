<?php

namespace Acme\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('AcmeCoreBundle:Home:home.html.twig');
    }
}
