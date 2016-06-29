<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 04/05/2016
 * Time: 05:26
 */

namespace Personews\FlowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Personews\FlowBundle\Entity\Flow;
use Personews\FlowBundle\Entity\Flowcontent;
use Symfony\Component\Validator\Constraints\DateTime;

class CreateObjectController extends Controller
{
    public function addFlowAction()
    {
        $flow = new Flow();
        $flow->setDateOfCreation = new DateTime();

        //$flowContent = new Flowcontent();

        $em = $this->getDoctrine()->getManager();
        $em->persist($flow);
        $em->flush();
        die("hello");
        return $this->render('FlowBundle:flow:Flow.html.twig',
            array(
//                'form' => $form->createView(),
                'product' => $product,
                'small_description' => $small_description
            ));
    }
}