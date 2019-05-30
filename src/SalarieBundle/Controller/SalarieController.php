<?php

namespace SalarieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use SalarieBundle\Entity\Salarie;

class SalarieController extends Controller
{
    /**
     * @Route("/salaries")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $salaries = $em->getRepository('SalarieBundle:Salarie')->findAll();
        return $this->render('SalarieBundle:Default:index.html.twig',array(
            'salaries' => $salaries
        ));
    }

     /**
     * @Route("/salaries/details/{id}",name="salariedetailspage")
     */
    public function detailsAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $salarie = $em->getRepository('SalarieBundle:Salarie')->find($id);
        return $this->render('SalarieBundle:Default:salarie_details.html.twig',array(
            'salarie' => (array)$salarie
        ));
        
    }

    /**
     * @Route("/salaries/upload")
     */
    public function uloadAction(Request $request)
    {
        $params = array();
        $content = $request->getContent();
        if (!empty($content))
        {
            $params = json_decode($content, true);
        }
        
        $params = array();
        $content = $request->getContent();
        if (!empty($content))
        {
            $params = json_decode($content, true);
        }
        
        $em = $this->getDoctrine()->getEntityManager();

        foreach($params as $param){
            $salarie = new Salarie();

           $salarie->setName($param['name']);
           $salarie->setType($param['type']);
           $salarie->setStatus($param['status']);
           $salarie->setHref($param['href']);
           $salarie->setJobTitle($param['job_title']);
           $salarie->setManager($param['manager']);
           $salarie->setFirstname($param['firstname']);
           $salarie->setLastname($param['lastname']);
           $salarie->setGender($param['gender']);
           $salarie->setBusinessemail($param['businessmail']);
           $salarie->setPersoemail($param['persomail']);
           $salarie->setPhone($param['phone']);
           $salarie->setAdress($param['address']);
           $salarie->setZipcode((int)$param['zipcode']);
           $salarie->setCity($param['city']);
           $salarie->setCountry($param['country']);
           if(!empty($param['birthdate']))
           $salarie->setBirthdate(new \DateTime(str_replace("/","-",$param['birthdate'])));
           $salarie->setMatricule((int)$param['matricule']);
           $salarie->setBirthplace($param['birthplace']);
           $salarie->setCNss($param['cnss']);
           $salarie->setComments($param['comments']);
           $salarie->setCitizenship($param['citizenship']);
           $salarie->setrelationshipStatus($param['relationship_status']);
           $salarie->setContractType($param['contract_type']);
           if(!empty($param['contract_start_date']))
           $salarie->setContractStartDate(new \DateTime(str_replace("/","-",$param['contract_start_date'])));
           if(!empty($param['contract_end_date']))
           $salarie->setContractEndDate(new \DateTime(str_replace("/","-",$param['contract_end_date'])));
           if(!empty($param['contract_end_test1']))
           $salarie->setContractEndTest1(new \DateTime(str_replace("/","-",$param['contract_end_test1'])));
           if(!empty($param['contract_end_test2']))
           $salarie->setContractEndTest12(new \DateTime(str_replace("/","-",$param['contract_end_test2'])));
           $salarie->setSalary((float)$param['salary']);

           $em->persist($salarie);
           $em->flush();

        }

        return $this->render('SalarieBundle:Default:index.html.twig');
    }
}
