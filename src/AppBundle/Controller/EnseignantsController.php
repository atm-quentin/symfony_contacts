<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Formation;
use AppBundle\Entity\Tirage;
use AppBundle\Form\demandetirageForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
* @Route("/enseignants")
*/
class EnseignantsController extends Controller{
    
    
     /**
     * @Route("/", name="enseignantsaccueil")
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
     $lestirages = $em->getRepository('AppBundle:Tirage')->findBy(
             array('logindemandeur'=>$user->getusername())
             );  
        return $this->render('enseignants/index.html.twig',array('lestirages'=>$lestirages));
//GEA 1ère année;175
//GEA 2ème année;135
//GEA Année spéciale;17
//TC 1ère année;150
//TC 2ème année;115
//TC Année spéciale;17
//Info 1ère année;84
//Info 2ème année;64
//RT 1ère année;84
//RT 2ème année;64
//LPro CASIR;20
//LPro ASUR;37
//LPro PME/PMI;23
//LPro Management;36
//           //Saisie des données de type de numero     
//        $formation = new Formation();
//        $formation->setLibelleClasse('GEA 1ère année');
//        $formation->setNbexemplaire(175);
//        $formation1 = new Formation();
//        $formation1->setLibelleClasse('GEA 2ème année');
//        $formation1->setNbexemplaire(135);
//        $formation2 = new Formation();
//        $formation2->setLibelleClasse('GEA Année spéciale');
//        $formation2->setNbexemplaire(17);
//        $formation3 = new Formation();
//        $formation3->setLibelleClasse('TC 1ère année');
//        $formation3->setNbexemplaire(150);
//        $formation4 = new Formation();
//        $formation4->setLibelleClasse('TC 2ème année');
//        $formation4->setNbexemplaire(115);
//        $formation5 = new Formation();
//        $formation5->setLibelleClasse('TC Année spéciale');
//        $formation5->setNbexemplaire(17);
//        $formation6 = new Formation();
//        $formation6->setLibelleClasse('Info 1ère année');
//        $formation6->setNbexemplaire(84);
//        $formation7 = new Formation();
//        $formation7->setLibelleClasse('Info 2ème année');
//        $formation7->setNbexemplaire(64);
//        $formation8 = new Formation();
//        $formation8->setLibelleClasse('LPro CASIR');
//        $formation8->setNbexemplaire(20);
//        $formation9 = new Formation();
//        $formation9->setLibelleClasse('LPro ASUR');
//        $formation9->setNbexemplaire(37);
//        $formation10 = new Formation();
//        $formation10->setLibelleClasse('LPro PME/PMI');
//        $formation10->setNbexemplaire(23);
//        $formation11 = new Formation();
//        $formation11->setLibelleClasse('LPro Management');
//        $formation11->setNbexemplaire(36);
//    
//            $em = $this->getDoctrine()->getManager();
//
//    // Étape 1 : On « persiste » l'entité
//    $em->persist($formation);
//    $em->persist($formation1);
//    $em->persist($formation2);
//    $em->persist($formation3);
//    $em->persist($formation4);
//    $em->persist($formation5);
//    $em->persist($formation6);
//    $em->persist($formation7);
//    $em->persist($formation8);
//    $em->persist($formation9);
//    $em->persist($formation10);
//    $em->persist($formation11);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
        return $this->render('enseignants/index.html.twig');
    }
        /**
     * @Route("/demandetirage/", name="demandetirage")
     */
    public function demandetirageAction(Request $request)
    {
          // saisie de role avec lieu en param
        $tirage = new Tirage();
        $form = $this->createForm(demandetirageForm::class, $tirage);
        $form->handleRequest($request);
        /* données envoyer */
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
        $tirage->setDaterealisation(new \DateTime(date('H:i:s d/m/Y')));
        $maformation= $tirage->getFormation();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $tirage->setLogindemandeur($user->getusername());
        $tirage->setNbexemplaires($maformation->getNbexemplaire());
        $em->persist($tirage);
        $em->flush();// save 

        return $this->redirect($this->generateUrl(
            'homepage'));
        }
        
    
    
    return $this->render('enseignants/form.html.twig', array(
    'form' => $form->createView())
            );
    
    }
    
}
