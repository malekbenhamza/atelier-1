<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Taxes\calculator;

class testController extends AbstractController
{


    #[Route('/testtva', name: 'test')]
    function index(calculator $calcul)
    {
       $res1=$calcul->prixTVA(100);
        $res2=$calcul->prixTTC(100);

        dump("votre MNT tva est: $res1");
        dump("votre MNT TTC est: $res2");die;

    }

    function test()
    {
        return new Response("<h1>test</h1>");
    }


    #[Route('/test2', name: 'test2')]
    function test2()
    {
        dd("ca fonctionne");
    }
    #[Route('/test3', name: 'test3')]
    function test3(): Response
    {
        return $this->render("test/test3.html.twig");
    }

}
