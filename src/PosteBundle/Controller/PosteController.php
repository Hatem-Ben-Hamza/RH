<?php

namespace PosteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use PosteBundle\Entity\Poste;
use PosteBundle\Form\PosteType;

class PosteController extends Controller
{
    /**
     * @Route("/postes",name="posteshomepage")
     */
    public function postesAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $postes = $em->getRepository('PosteBundle:Poste')->findAll();
        return $this->render('PosteBundle:Postes:index.html.twig',array(
            'postes' => $postes
        ));
    }

    /**
     * @Route("/postes/new",name="postecreatepage")
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
             $this->get('session')->getFlashBag()->set('success', 'Post successfuly created');

             return $this->redirect($this->generateUrl('posteshomepage'));
         }

         return $this->render('PosteBundle:Postes:create.html.twig',array(
             'form' => $form->createView()
         ));
     }

     /**
     * @Route("/postes/edit/{id}",name="posteeditpage")
     */
    public function editAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $poste = $em->getRepository('PosteBundle:Poste')->find($id);
        $form = $this->createForm(PosteType::class,$poste);

        $form->handleRequest($request);
        
        if($form->isSubmitted()){
            $em->persist($poste);
            $em->flush();
            $this->get('session')->getFlashBag()->set('success', 'Post successfuly updated');

            return $this->redirect($this->generateUrl('posteshomepage'));
        }

        return $this->render('PosteBundle:Postes:edit.html.twig',array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/postes/delete/{id}",name="postedeletepage")
     */
    public function deleteAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $poste = $em->getRepository('PosteBundle:Poste')->find($id);

        $em->remove($poste);
        $em->flush();
        $this->get('session')->getFlashBag()->set('success', 'Post successfuly removed');

        return $this->redirect($this->generateUrl('posteshomepage'));
    }

    /**
     * @Route("/postes/details/{id}",name="postedetailspage")
     */
    public function detailsAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $poste = $em->getRepository('PosteBundle:Poste')->find($id);
        return $this->render('PosteBundle:Postes:poste_details.html.twig',array(
            'poste' => $poste
        ));
        
    }
    
}
