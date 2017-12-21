<?php
/**
 * Created by PhpStorm.
 * User: Clerbout Hervé
 * Date: 24/10/2017
 * Time: 15:22
 */

namespace Swagger\App\Controller;

use Swagger\Client\Model\Geolocalisation;
use Swagger\Client\Model\Nichoir;

class NichoirController extends Controller
{

    public function indexAction()
    {
        $api_instance = new \Swagger\Client\Api\AdherentsApi();
        try {
            $result = $api_instance->getAdherent($_SESSION['user']->getId());
            echo $this->twig->render('/nichoirs/index.html.twig',array('user'=> $_SESSION['user'],'nichoirs' => $result->getNichoirs()));
        } catch (Exception $e) {
            echo 'Exception when calling NichoirsApi->getAllNichoir: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function createAction() {
        echo $this->twig->render('/nichoirs/create.html.twig',['user' => $_SESSION['user']]);
    }

    public function createActionForm($request,$response) {

        $nom = $request->getParam('nom');
        $photo = $request->getParam('photo');
        $latitude = $request->getParam('latitude');
        $longitude = $request->getParam('longitude');

        $geo = new Geolocalisation();
        $geo->setLatitude($latitude);
        $geo->setLongitude($longitude);

        $nichoir = new Nichoir();
        $nichoir->setNom($nom);
        $nichoir->setPhoto($photo);
        $nichoir->setGeolocalisation($geo);
        $nichoir->setAdherent($_SESSION['user']);


        $api_instance = new \Swagger\Client\Api\NichoirsApi();
        try {
            $result = $api_instance->postNichoir($nichoir);
            return $response->withRedirect('/');

        } catch (Exception $e) {
            echo 'Exception when calling NichoirsApi->postNichoir: ', $e->getMessage(), PHP_EOL;
        }

    }


    public function deleteAction($response,$id) {

        $api_instance = new \Swagger\Client\Api\NichoirsApi();
        try {
            $result = $api_instance->deleteNichoir($id);
            return $response->withRedirect('/');
        } catch (Exception $e) {
            echo 'Exception when calling NichoirsApi->deleteNichoir: ', $e->getMessage(), PHP_EOL;
        }
    }
}