<?php
/**
 * Lpo Rest
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * GET getAdherent
 * Summary: Retrieves a Adherent resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/adherents/{id}', function ($request, $response, $args) {


    $response->write("hey");
    return $response;
});


/**
 * POST postEtape
 * Summary: Creates a etape resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/etapes', function ($request, $response, $args) {


    $body = $request->getParsedBody();
    $response->write('How about implementing postEtape as a POST method ?');
    return $response;
});


/**
 * DELETE deleteNichoir
 * Summary: delete a nichoir resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->DELETE('/nichoirs/{id}', function ($request, $response, $args) {


    $response->write('How about implementing deleteNichoir as a DELETE method ?');
    return $response;
});


/**
 * GET getAllNichoir
 * Summary: Retrieves the collection of Nichoir resources.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/nichoirs', function ($request, $response, $args) {


    $response->write('How about implementing getAllNichoir as a GET method ?');
    return $response;
});


/**
 * POST postNichoir
 * Summary: Creates a nichoir resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/nichoirs', function ($request, $response, $args) {


    $body = $request->getParsedBody();
    $response->write('How about implementing postNichoir as a POST method ?');
    return $response;
});


/**
 * POST postOiseauPhoto
 * Summary: Creates a oiseauPhoto resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/oiseauPhoto', function ($request, $response, $args) {


    $body = $request->getParsedBody();
    $response->write('How about implementing postOiseauPhoto as a POST method ?');
    return $response;
});


/**
 * DELETE deleteOiseau
 * Summary: delete a oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->DELETE('/oiseaux/{id}', function ($request, $response, $args) {


    $response->write('How about implementing deleteOiseau as a DELETE method ?');
    return $response;
});


/**
 * GET getOiseau
 * Summary: Retrieves a Oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/oiseaux/{id}', function ($request, $response, $args) {


    $response->write('How about implementing getOiseau as a GET method ?');
    return $response;
});


/**
 * POST postOiseau
 * Summary: Creates a oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/oiseaux', function ($request, $response, $args) {


    $body = $request->getParsedBody();
    $response->write('How about implementing postOiseau as a POST method ?');
    return $response;
});


/**
 * PUT putOiseau
 * Summary: Replaces the Oiseau resource.
 * Notes:
 * Output-Formats: [application/json]
 */
$app->PUT('/oiseaux/{id}', function ($request, $response, $args) {


    $body = $request->getParsedBody();
    $response->write('How about implementing putOiseau as a PUT method ?');
    return $response;
});


$app->run();
