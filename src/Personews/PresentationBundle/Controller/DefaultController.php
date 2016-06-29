<?php

namespace Personews\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PresentationBundle:presentation:Presentation.html.twig');
    }
}
