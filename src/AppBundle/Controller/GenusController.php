<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GenusController extends Controller
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        die("It Work !");
    }
}