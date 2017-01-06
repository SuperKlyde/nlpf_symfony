<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 11:11
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Conterpart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Project;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;

class ProjectController extends Controller
{

  /**
   * @Rest\Get("/projects")
   */
  public function getProjectsAction(Request $request)
  {
    $projects = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->findAll();
    /* @var $projects Project[] */

    $formatted = [];
    foreach ($projects as $project) {
      $formatted[] = [
        'id' => $project->getId(),
        'name' => $project->getName(),
        'owner' => $project->getOwner(),
        'created' => $project->getCreated(),
        'conterparts' => $project->getConterparts(),
      ];
    }

    return new JsonResponse($formatted);
  }


  /**
   * @Rest\Get("/projects/{id}")
   */
  public function getProjectAction(Request $request)
  {
    $project = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->find($request->get('id'));
    /* @var $project Project */

    if (empty($project)) {
      return new JsonResponse(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
    }

    $formatted = [
      'id' => $project->getId(),
      'name' => $project->getName(),
      'owner' => $project->getOwner(),
      'created' => $project->getCreated(),
      'conterparts' => $project->getConterparts(),
    ];


    return new JsonResponse($formatted);
  }

  /**
   * @Rest\Get("/project/{name}")
   */
  public function getProjectName(Request $request)
  {
    $projects = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->findByName($request->get('name'));
    /* @var $projects Project */

    if (empty($projects)) {
      return new JsonResponse(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
    }

    $formatted = [];
    foreach ($projects as $project) {
      $formatted[] = [
        'id' => $project->getId(),
        'name' => $project->getName(),
        'owner' => $project->getOwner(),
        'created' => $project->getCreated(),
        'conterparts' => $project->getConterparts(),
      ];
    }

    return new JsonResponse($formatted);
  }

  /**
   * @Rest\Post("/project/create")
   */
  public function createProject(Request $request) {
    $name = $request->get('name');
    $description = $request->get('description');
    $user = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:User')
      ->find($request->get('userid'));

    $project = new Project($user, $name, $description);

    $em = $this->get('doctrine.orm.entity_manager');
    $em->persist($project);
    $em->flush();

    $formatted = [
      'id' => $project->getId(),
      'name' => $project->getName(),
      'owner' => $project->getOwner(),
      'created' => $project->getCreated(),
      'conterparts' => $project->getConterparts(),
    ];

    return new JsonResponse($formatted);
  }

  /**
   * @Rest\View()
   * @Rest\Post("/project/addconterpart")
   */
  public function AddConterpartToProject(Request $request) {
    $project = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->find($request->get('projectId'));
    /* @var $project Project */

    if (empty($project)) {
      return new JsonResponse(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
    }

    $conterpart = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Conterpart')
      ->find($request->get('conterpartId'));
    /* @var $conterpart Conterpart */

    if (empty($conterpart)) {
      return new JsonResponse(['message' => 'Conterpart not found'], Response::HTTP_NOT_FOUND);
    }

    $project->addConterpart($conterpart);

    $em = $this->get('doctrine.orm.entity_manager');
    $em->persist($project);
    $em->flush();

    return new JsonResponse("true", Response::HTTP_ACCEPTED);
  }
}