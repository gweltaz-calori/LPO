<?php
/**
 * Created by PhpStorm.
 * User: Clerbout Hervé
 * Date: 24/10/2017
 * Time: 10:48
 */

namespace Swagger\Client\controler;


class controleur
{
    protected $twig;

    /**
     * controleur constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('./lib/templates');
        $this->twig = new \Twig_Environment($loader, array( 'cache' => './cache', ));
    }

}