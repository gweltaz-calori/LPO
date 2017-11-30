<?php
/**
 * Created by PhpStorm.
 * User: Clerbout Hervé
 * Date: 24/10/2017
 * Time: 15:22
 */

namespace Swagger\Client\controler;

class controleurNichoir extends controleur
{
    public function indexAction()
    {
        $api_instance = new \Swagger\Client\Api\NichoirsApi();
        try {
            $result = $api_instance->getAllNichoir();
            echo $this->twig->render('/indexFront/index.html.twig',array('Nichoirs' => $result));
        } catch (Exception $e) {
            echo 'Exception when calling NichoirsApi->getAllNichoir: ', $e->getMessage(), PHP_EOL;
        }
    }
}