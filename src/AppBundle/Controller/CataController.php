<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 22/03/2016
 * Time: 20:53
 */

// src/AppBundle/Controller/CataController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class CataController
{
    /**
     * @Route("/cata/monstre")
     */
    public function monstreAction()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}