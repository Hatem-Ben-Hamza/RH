<?php

namespace TimesheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TimesheetBundle\Entity\Timesheet;

class TimesheetController extends Controller
{
    /**
     * @Route("/timesheets")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $timesheet = $em->getRepository('TimesheetBundle:Timesheet')->findAll();
        return $this->render('TimesheetBundle:Default:index.html.twig',array(
            'timesheet' => $timesheet
        ));
    }

    /**
     * @Route("/timesheetsExport",name="timesheetsExport")
     */
    public function timesheetsExportAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $salaries = $em->getRepository('SalarieBundle:Salarie')->findAll();
        
        if($request->request->get('filterByName') != null){
            $repository = $em->getRepository('TimesheetBundle:Timesheet');
            $query = $repository->createQueryBuilder('p')
                    ->where('p.name LIKE :word')
                    ->setParameter('word',$request->request->get('filterByName'))
                    ->getQuery();
             $timesheet = $query->getResult();
             $request->request->remove('filterByName');   
             return $this->render('TimesheetBundle:Default:timesheets.html.twig',array(
                'salaries' => $salaries,
                'timesheet' => $timesheet
            ));
        }
        elseif ($request->request->get('filterByMonth') != null) {
            $repository = $em->getRepository('TimesheetBundle:Timesheet');
            $query = $repository->createQueryBuilder('p')
                    ->where('p.month = :word')
                    ->setParameter('word',$request->request->get('filterByMonth'))
                    ->getQuery();
             $timesheet = $query->getResult();
             $request->request->remove('filterByMonth');   
             return $this->render('TimesheetBundle:Default:timesheets.html.twig',array(
                'salaries' => $salaries,
                'timesheet' => $timesheet
            ));
        }else{
            $candidats = array();
            return $this->render('TimesheetBundle:Default:timesheets.html.twig',array(
                'salaries' => $salaries,
                'timesheet' => array()
            ));    
        }
    }


    /**
     * @Route("/timesheets/upload")
     */
    public function uloadAction(Request $request)
    {
        $params = array();
        $content = $request->getContent();
        if (!empty($content))
        {
            $params = json_decode($content, true);
        }
        
        //var_dump($params);die();
        
        $em = $this->getDoctrine()->getEntityManager();

        foreach($params as $param){
           $timesheet = new Timesheet();

           $timesheet->setName($param['name']);
           $timesheet->setMonth((int)$param['month']);
           $timesheet->setYear((int)$param['year']);

           $timesheet->setJoursOuvres((int)$param['timesheet']['jours_ouvres']);
           $timesheet->setJoursProd((int)$param['timesheet']['jours_prod']);
           $timesheet->setJoursCp((int)$param['timesheet']['jours_cp']);
           $timesheet->setJoursInterne((int)$param['timesheet']['jours_interne']);

           $em->persist($timesheet);
           $em->flush();
        }

        return $this->render('TimesheetBundle:Default:index.html.twig');
    }
}

