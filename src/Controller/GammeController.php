<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function lister(): Response
    {
    $gamme=['ordinateur','video projecteur','imprimente','accesoires'];
    return $this->render('Gamme/Lister.html.twig',['gammes'=>$gamme]);
    }
}
