<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class MainController extends AbstractController
{

/**
* @Route("/", name="ToDoList")
*/
    public function ToDoList(): Response
    {
        //dd("ToDoList");
        
        return $this->render('default/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
        
    }

/**
* @Route("/contact", name="contact")
*/
public function contact(): Response
{
    
    
    return $this->render('default/contact.html.twig', [
        'controller_name' => 'MainController',
    ]);
    
}

/**
* @Route("/about-us", name="about_us")
*/
public function aboutUs(): Response
{
    
    
    return $this->render('default/a_propos.html.twig', [
        'controller_name' => 'MainController',
    ]);
    
}
    
}
