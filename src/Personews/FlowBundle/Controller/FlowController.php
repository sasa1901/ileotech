<?php

namespace Personews\FlowBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Personews\FlowBundle\Entity\Product;
use Personews\FlowBundle\Form\ProductType;

class FlowController extends Controller
{
    /**
     * @param $string
     * @param $count
     * @return mixed
     */
    public function nbrCara($string, $count)
    {
        $tab = array();

        $i = 0;
        $y = 0;
        $str = "";
        if (strlen($string) > $count) {
            while ($i < $count) {
                $tab[++$i] = $string[$y++];
                $str .= $tab[$i];
            }
            return ($str.'...');
        } else {
            return ($string.'...');
        }
    }

    public function indexAction()
    {

        // query for a single product matching the given name and price
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('FlowBundle:Product')->findAll();

        $small_description = array();
        $i = 0;

        foreach ($product as $row) {
            $description = $row->getDescription();
            $small_description[$i++] = $this->nbrCara($description, 40);
        }
        //  var_dump($tabProduct);
//        die("aze");

        return $this->render('FlowBundle:flow:Flow.html.twig',
            array(
//                'form' => $form->createView(),
                'product' => $product,
                'small_description' => $small_description
            ));
    }
}