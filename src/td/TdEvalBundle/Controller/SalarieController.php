<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace td\TdEvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use td\TdEvalBundle\Entity\Ordinateur;
use td\TdEvalBundle\Entity\Salarie;


/**
 * Description of SalarieController
 *
 * @author etudiant
 */
class SalarieController extends Controller {
    public function newSalarieAction()
            {
                  
		$sal = new Salarie();
                $ord = new Ordinateur();
                
                $ord->setLibelleOrdi('Ordinateur M');
                $ord->setMarque('MSI');
		$sal->setnomSalarie('JOCET');
		$sal->setprenomSalarie('Kéfan');
		$sal->setfonctionSalarie('Concepteur Jeux video');
                $sal->setOrdinateur($ord);
		$em = $this->getDoctrine()->getManager();

		$em->persist($sal);
		$em->flush();
		return new Response('Le salarié : '.$sal->getId().' Ce nomme : '.$sal->getNomSalarie() );

            }
            
            
            
            public function getPcFromSalarieAction($nom)
                    
                    {
                
                
                          
                $nom = $this->getDoctrine()->getRepository('tdTdEvalBundle:Salarie');

		
		$resultpc = $nom->find($id);


		return new Response('Le salarié '.$resultpc->getNomSalarie().'à un ordinateur'.$resultpc->getLibelleOrdi()
    );   

                    }
}
