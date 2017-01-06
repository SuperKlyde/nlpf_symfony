<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 17:02
 */

namespace AppBundle\Controller;

namespace AppBundle\Controller;

use AppBundle\Entity\Conterpart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;

class ConterpartController extends Controller
{
  /**
   * @Rest\Get("/conterpart")
   */
  public function getUsersAction(Request $request)
  {
    $conterparts = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Conterpart')
      ->findAll();
    /* @var $conterparts Conterpart[] */

    $formatted = [];
    foreach ($conterparts as $conterpart) {
      $formatted[] = [
        'id' => $conterpart->getId(),
        'name' => $conterpart->getName(),
        'description' => $conterpart->getDescription(),
        'value' => $conterpart->getValue(),
      ];
    }

    return new JsonResponse($formatted);
  }
}