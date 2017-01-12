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
  public function getConterpartAction(Request $request)
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

  /**
   * @Rest\Get("/api/conterpart/{id}", name="_projects")
   */
  public function getProjectAction(Request $request)
  {
    $conterpart = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Conterpart')
      ->find($request->get('id'));
    /* @var $project Project */

    if (empty($conterpart)) {
      return new JsonResponse(null, Response::HTTP_NOT_MODIFIED);
    }

    $formatted = [
        'id' => $conterpart->getId(),
        'name' => $conterpart->getName(),
        'description' => $conterpart->getDescription(),
        'value' => $conterpart->getValue(),
    ];

    return new JsonResponse(['message' => $formatted]);
  }

  /**
   * @Rest\View()
   * @Rest\Post("/api/conterpart/create")
   */
  public function createConterpart(Request $request) {
    $name = str_replace("\"", "", $request->get('name'));
    $description = str_replace("\"", "", $request->get('description'));
    $value = str_replace("\"", "", $request->get('value'));
    $projectId = str_replace("\"", "", $request->get('projectId'));

    $project = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->find($projectId);

    $conterpart = new Conterpart($name, $description, $value, $project);

    $em = $this->get('doctrine.orm.entity_manager');
    $em->persist($conterpart);
    $em->flush();
    $formatted = [
      'id' => $conterpart->getId(),
      'name' => $conterpart->getName(),
      'description' => $conterpart->getDescription(),
      'value' => $conterpart->getValue(),
    ];
    return new JsonResponse(['message' => $formatted], Response::HTTP_ACCEPTED);
  }
}