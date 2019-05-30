<?php

namespace CandidatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use CandidatBundle\Entity\Candidat;

class CandidatController extends Controller
{
    /**
     * @Route("/candidats",name="candidatsSearchResult")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $postes = $em->getRepository('PosteBundle:Poste')->findAll();
        
        /*$candidats = $em->getRepository('CandidatBundle:Candidat')->findBy(array(
            'position' => $request->request->get('filterValue')
        ));*/

      
        if($request->request->get('filterValue') != null){
            $repository = $em->getRepository('CandidatBundle:Candidat');
            $query = $repository->createQueryBuilder('p')
                    ->where('p.position LIKE :word')
                    ->setParameter('word',$request->request->get('filterValue').'%')
                    ->getQuery();
             $candidats = $query->getResult();
             $request->request->remove('filterValue');   
             return $this->render('CandidatBundle:Candidats:index.html.twig',array(
                'postes' => $postes,
                'candidats' => $candidats
            ));
        }else{
            $candidats = array();
            return $this->render('CandidatBundle:Candidats:index.html.twig',array(
                'postes' => $postes,
                'candidats' => array()
            ));    
        }
        
    }

    /**
     * @Route("/candidats/details/{id}",name="candidatdetailspage")
     */
    public function detailsAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $candidat = $em->getRepository('CandidatBundle:Candidat')->find($id);
        $postes = $em->getRepository('PosteBundle:Poste')->findAll();
        $tab = (explode(" ",$candidat->getPosition()));
        $score = 0;
        foreach ($postes as $poste) { 
            foreach ($tab as $key => $value) {
                if (strpos($poste->getPoste(),$value) !== false) {
                    $score++;             
                    }
                }
            }
        return $this->render('CandidatBundle:Candidats:candidat_details.html.twig',array(
            'candidat' => $candidat,
            'score' => $score
        ));
        
    }

     /**
     * @Route("/sendEmail/{id}",name="candidatsendemailpage")
     */
    public function sendEmailAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $candidat = $em->getRepository('CandidatBundle:Candidat')->find($id);
        
        if($request->request->get('subject') != null && $request->request->get('message') != null ){
            $message = \Swift_Message::newInstance()
            ->setSubject($request->request->get('subject'))
            ->setFrom('hatembenhamzacrk09@gmail.com')
            ->setTo($candidat->getEmail())
            ->setBody($request->request->get('message'));
            $this->get('mailer')
                ->send($message);
        }
        
        return $this->render('CandidatBundle:Candidats:contact.html.twig',array(
            'candidat' => $candidat
        ));
        
    }
}
