<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 02/04/2016
 * Time: 15:00
 */

// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class BlogController extends Controller
{
    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        return new Response('<html><body>Hello !</body></html>');
    }
}