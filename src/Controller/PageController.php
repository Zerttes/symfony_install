<?php

namespace App\Contoller;

use Symfony\Component\Routing\Annotation\Route;

class PageController

{

    /**
     * @Route ("/", name="home")
     */
    public function home () {
        var_dump ( 'Acceuil'); die;
    }

    /**
     * @Route ("/contact", name="contact")
     */
    public function contact ()
    {
        var_dump('conatct'); die;

    }


}


?>