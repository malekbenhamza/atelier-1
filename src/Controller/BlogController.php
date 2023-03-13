<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('blogliste', name: 'blogliste')]
    public function list(): Response
    {
        return new Response("<h1>Liste des articles</h1>");


    }




    #[Route('blog/detail/{id?1}', name: 'blogliste',requirements: ['id'=>'\d+'])]
    public function show($id): Response
    {   $name="Introduction dau symfony" ; 
        return $this->render('Blog/show.html.twig',['a'=>$id,'b'=>$name])  ; 


    }
    #[Route('blog/detail/{id}/{name?vide}', name: 'blogdetail',requirements: ['id'=>'\d+'],priority:1)]
    public function detail($id,$name): Response
    {   
        return $this->render('Blog/detail.html.twig',['a'=>$id,'b'=>$name])  ; 


    }
    #[Route('blog/test', name: 'blog_test')]
 public function someMethod():Response
    {/* -------------METHODE 1-------------- */
   // $url=$this->generateUrl('blogdetail',['id'=>100,'name'=>'BASE DE DONNEES']);
    //dd($url);
   // return $this->redirect($url);
   /*-------------METHODE 2-----------------*/
   return $this->redirectToRoute('blogdetail',['id'=>100,'name'=>'BASE DE DONNEES']);


}

}