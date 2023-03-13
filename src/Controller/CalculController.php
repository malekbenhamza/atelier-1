<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul/somme/{a<\d+>}/{b}', name: 'app_somme')]
    public function somme($a,$b): Response
    {
        $s=$a+$b;
        return $this->render('calcul/somme.html.twig', [
            'a' =>$a,'b'=>$b,'s'=>$s 
        ]);
    }
    #[Route('/calcul/soustraction/{a}/{b}', name: 'app_soustraction')]
    public function soustraction($a,$b): Response
    {
        $s=$a-$b;
        return $this->render('calcul/soustraction.html.twig', [
            'a' =>$a,'b'=>$b,'s'=>$s 
        ]);
    }
    #[Route('/calcul/acceuil', name: 'app_acceuil')]
    public function acceuil(): Response
    {
        return $this->render('calcul/acceuil.html.twig', [
            
        ]);
}
}
