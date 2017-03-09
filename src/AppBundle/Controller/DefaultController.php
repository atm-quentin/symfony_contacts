<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', ['noms'=>["NONIME","URGOT","Maitre Yi","Twitch"]]);
    }
    
    /**
     * @Route("/bonjour/{nom}", name="bonjour")
     */
    public function bonjourAction($nom = "Joyeux contribuable")
    {
        // replace this example code with whatever you need
        return $this->render('default/bonjour.html.twig', [ 'nom' => "$nom"]);
    }
    /**
    * @Route("/login", name="login")
    */
        public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('operateur/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
}
