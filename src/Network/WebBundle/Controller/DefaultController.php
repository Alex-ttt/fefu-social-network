<?php

namespace Network\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NetworkWebBundle:LoginAndRegistration:index.html.twig');
    }
}
