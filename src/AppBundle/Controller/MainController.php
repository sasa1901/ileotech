<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 02/04/2016
 * Time: 13:17
 */

// src/AppBundle/Controller/MainController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController
{
    /**
     * @Route("/hi/{name}", name="hello")
     */
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}