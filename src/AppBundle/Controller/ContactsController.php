<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 /**
     * @Route("/contacts")
     */
class ContactsController extends Controller
{
      /**
     * @Route("/contacts", name="contactaccueil")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contacts/index.html.twig', ['noms'=>["NONIME","URGOT","Maitre Yi","Twitch"]]);
    }
    
}
