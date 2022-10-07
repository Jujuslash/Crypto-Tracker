<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("lucky", name="app_lucky_number")
     */
    public function number(): Response
    {
        $number = random_int(0,100);

        return new Response(
            "<html>
            <h1>Le Nombre Lucky est $number</h1>
            </html>");
    }
    #[Route("random")]
    public function random(): Response
    {
        $number = random_int(0,100);

        return new Response(
            "<html>
            <h1>Le nombre Random est $number</h1>
            </html>");
    }
}