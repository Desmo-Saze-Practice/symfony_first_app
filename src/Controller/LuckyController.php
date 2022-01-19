<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky", name="lucky")
     */
    public function number(): Response
    {
        $number = random_int(1, 100);

        return new Response(
            '<html><body>Lucky number : '.$number.'</html></body>'
        );
        // return $this->render('lucky/index.html.twig', [
        //     'controller_name' => 'LuckyController',
        // ]);
    }
}
