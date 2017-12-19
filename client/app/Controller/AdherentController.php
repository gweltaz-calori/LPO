<?php
/**
 * Created by PhpStorm.
 * User: Clerbout Hervé
 * Date: 24/10/2017
 * Time: 15:22
 */

namespace Swagger\App\Controller;

class AdherentController extends Controller
{
    public function indexAction()
    {
        echo $this->twig->render('/adherent/index.html.twig');
    }

    public function loginAction($request,$response)
    {
        $login = $request->getParam('login');
        $password = $request->getParam('password');

        $api_instance = new \Swagger\Client\Api\AdherentsApi();
        try {
            $result = $api_instance->getAdherentByLoginAndPassword($login,$password);
            echo $this->twig->render('/adherent/index.html.twig',["adherent" => $result]);
        } catch (Exception $e) {
            echo 'Exception when calling NichoirsApi->getAllNichoir: ', $e->getMessage(), PHP_EOL;
        }
    }
}