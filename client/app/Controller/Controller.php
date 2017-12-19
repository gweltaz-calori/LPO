<?php
/**
 * Created by PhpStorm.
 * User: Clerbout Hervé
 * Date: 24/10/2017
 * Time: 10:48
 */

namespace Swagger\App\Controller;


class Controller
{
    protected $twig;

    /**
     * controleur constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('./app/templates');
        $this->twig = new \Twig_Environment($loader, array( 'debug' => true,  ));
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }

}