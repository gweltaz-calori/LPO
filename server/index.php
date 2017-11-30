<?php
/**
 * Lpo Rest
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);


$entityManager = require_once __DIR__ . '/bootstrap.php';

/**
 * GET getAdherent
 * Summary: Retrieves a Adherent resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/adherents/{id}', function ($request, $response, $args) use ($entityManager) {

    $userRepo = $entityManager->getRepository('Models\Adherent');
    $adherent = $userRepo->find($args['id']);
    return $response->withJson($adherent);
});


/**
 * POST postEtape
 * Summary: Creates a etape resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/etapes', function ($request, $response, $args) use ($entityManager){


    $body = $request->getParsedBody();
    $etape = new \Models\Etape();
    $etape->setCommentaire($body['commentaire']);
    $etape->setDate($body['date']);
    $etape->setHeure($body['heure']);
    $etape->setNichoir($body['nichoir']);
    $etape->setPhoto($body['photo']);

    $entityManager->persist($etape);
    $entityManager->flush();

    return $response->withJson($etape);
});


/**
 * DELETE deleteNichoir
 * Summary: delete a nichoir resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->DELETE('/nichoirs/{id}', function ($request, $response, $args) use ($entityManager){


    $nichoirRepo = $entityManager->getRepository('Models\Nichoir');
    $nichoir = $nichoirRepo->find($args['id']);

    $entityManager->remove($nichoir);
    $entityManager->flush();

    return $response->write('removed');
});


/**
 * GET getAllNichoir
 * Summary: Retrieves the collection of Nichoir resources.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/nichoirs', function ($request, $response, $args) use ($entityManager){


    $nichoirRepo = $entityManager->getRepository('Models\Nichoir');
    $nichoirs = $nichoirRepo->findAll();
    return $response->withJson($nichoirs);
});


/**
 * POST postNichoir
 * Summary: Creates a nichoir resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/nichoirs', function ($request, $response, $args) use ($entityManager){

    $body = $request->getParsedBody();
    $nichoir = new \Models\Nichoir();
    $nichoir->setNom($body['nom']);
    $nichoir->setAdherent($body['adherent']);
    $nichoir->setDateInstallation($body['dateInstallation']);
    $nichoir->setGeolocalisation($body['geoLocalisation']);

    $entityManager->persist($nichoir);
    $entityManager->flush();


    $response->withJson($nichoir);
    return $response;
});


/**
 * POST postOiseauPhoto
 * Summary: Creates a oiseauPhoto resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/oiseauPhoto', function ($request, $response, $args) use ($entityManager){

    $body = $request->getParsedBody();
    $oiseauPhoto = new \Models\OiseauPhoto();
    $oiseauPhoto->setOiseau($body['oiseau']);
    $oiseauPhoto->setUrl($body['url']);

    $entityManager->persist($oiseauPhoto);
    $entityManager->flush();


    $response->withJson($oiseauPhoto);
    return $response;
});


/**
 * DELETE deleteOiseau
 * Summary: delete a oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->DELETE('/oiseaux/{id}', function ($request, $response, $args) use ($entityManager){


    $oiseauRepo = $entityManager->getRepository('Models\Oiseau');
    $oiseau = $oiseauRepo->find($args['id']);

    $entityManager->remove($oiseau);
    $entityManager->flush();

    return $response->write('removed');

});


/**
 * GET getOiseau
 * Summary: Retrieves a Oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/oiseaux/{id}', function ($request, $response, $args) use ($entityManager){


    $oiseauRepo = $entityManager->getRepository('Models\Oiseau');
    $oiseau = $oiseauRepo->find($args['id']);
    return $response->withJson($oiseau);

});


/**
 * POST postOiseau
 * Summary: Creates a oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/oiseaux', function ($request, $response, $args) use ($entityManager) {


    $body = $request->getParsedBody();
    $oiseau = new \Models\Oiseau();
    $oiseau->setNichoir($body['nichoir']);
    $oiseau->setNom($body['nom']);
    $oiseau->setDescription($body['description']);
    $oiseau->setFamille($body['famille']);

    $entityManager->persist($oiseau);
    $entityManager->flush();


    $response->withJson($oiseau);
    return $response;
});


/**
 * PUT putOiseau
 * Summary: Replaces the Oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->PUT('/oiseaux/{id}', function ($request, $response, $args) use ($entityManager){

    $oiseauRepo = $entityManager->getRepository('Models\Oiseau');
    $oiseau = $oiseauRepo->find($args['id']);

    $body = $request->getParsedBody();
    $oiseau->setNichoir($body['nichoir']);
    $oiseau->setNom($body['nom']);
    $oiseau->setDescription($body['description']);
    $oiseau->setFamille($body['famille']);

    $entityManager->persist($oiseau);
    $entityManager->flush();


    $response->withJson($oiseau);
    return $response;
}); //TODO


$app->run();
