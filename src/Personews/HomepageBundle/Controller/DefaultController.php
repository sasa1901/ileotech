<?php

namespace Personews\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $str = 'Salem';
        $numbersList = 5;
        $message = "test";
        return $this->render("HomepageBundle:homepage:Homepage.html.twig", array(
            "message" => $message)
        );
/*        return $this->render('HomepageBundle:Default:index.html.twig');*/
    }
}
