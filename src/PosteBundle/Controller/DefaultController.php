<?php

namespace PosteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class PosteController extends Controller
{
    /**
     * @Route("/postes",name="posteshomepage")
     */
    public function postesAction()
    {
        return $this->render('PosteBundle:Postes:index.html.twig');
    }

    /**
     * @Route("/postes/new")
     */
     public function createAction(Request $request)
     {
         $poste = new Poste();
         $form = $this->createForm(PosteType::class,$poste);

         $form->handleRequest($request);
         $em = $this->getDoctrine()->getEntityManager();
         
         if($form->isSubmitted()){
             $em->persist($poste);
             $em->flush();
             
             return $this->redirect($this->generateUrl('posteshomepage'));
         }

         return $this->render('PosteBundle:Postes:create.html.twig',array(
             'form' => $form->createView()
         ));
     }
    
}
