<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 11:11
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Place;
use FOS\RestBundle\Controller\Annotations as Rest;

class PlaceController extends Controller
{

  /**
   * @Get("/places")
   */
  public function getPlacesAction(Request $request)
  {
    $places = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Place')
      ->findAll();
    /* @var $places Place[] */

    $formatted = [];
    foreach ($places as $place) {
      $formatted[] = [
        'id' => $place->getId(),
        'name' => $place->getName(),
        'address' => $place->getAddress(),
      ];
    }

    return new JsonResponse($formatted);
  }


  /**
   * @Get("/places/{id}")
   */
  public function getPlaceAction(Request $request)
  {
    $place = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Place')
      ->find($request->get('id'));
    /* @var $place Place */

    if (empty($place)) {
      return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
    }


    $formatted = [
      'id' => $place->getId(),
      'name' => $place->getName(),
      'address' => $place->getAddress(),
    ];

    return new JsonResponse($formatted);
  }
}