<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 23/03/2016
 * Time: 17:13
 */

// src/AppBundle/Controller/HelloController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
