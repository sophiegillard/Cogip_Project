<?php

namespace App\Core;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


class Render
{
    public function __construct($page, $data = [])
    {
     $templateFile = $page. '.html.twig';

     $loader = new FilesystemLoader(__ROOT__.'/Templates');

     $twig = new Environment($loader);

     echo $twig->Render($templateFile, $data);
    }

}