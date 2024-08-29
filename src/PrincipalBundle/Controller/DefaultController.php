<?php

namespace PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tramites = $em->getRepository('GeneralBundle:Tramites')->findAll();
        $autoridades = $em->getRepository('GeneralBundle:Autoridades')->findAll();
        return $this->render('PrincipalBundle:Default:index.html.twig',['tramites'=>$tramites, 'autoridades'=>$autoridades]);
    }
    /**
     * @Route("/ifme")
     */
    public function indexfmeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tramites = $em->getRepository('GeneralBundle:Tramites')->findAll();
        return $this->render('PrincipalBundle:Default:indexfme.html.twig',['tramites'=>$tramites]);
    }
}
