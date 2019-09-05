<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return $this->render(
            'index/accueil.html.twig'
        );
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render(
            'index/contact.html.twig',
            ['contactForm' => $form->createView()]
        );
    }
}
