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
use Doctrine\ORM\EntityManager;

class ProjectController extends Controller
{

  /**
   * @Rest\Get("/api/projects")
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
        'description' => $project->getDescription(),
        'owner' => $project->getOwner(),
        'created' => $project->getCreated(),
        'conterparts' => $project->getConterparts(),
        'current' => $project->getCurrent(),
      ];
    }

    return new JsonResponse($formatted);
  }


  /**
   * @Rest\Get("/api/projects/{id}", name="_projects")
   */
  public function getProjectAction(Request $request)
  {
    $project = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->find($request->get('id'));
    /* @var $project Project */

    if (empty($project)) {
      return new JsonResponse(null, Response::HTTP_NOT_MODIFIED);
    }

    $formatted = [
      'id' => $project->getId(),
      'name' => $project->getName(),
      'description' => $project->getDescription(),
      'owner' => $project->getOwner(),
      'created' => $project->getCreated(),
      'conterparts' => $project->getConterparts(),
      'current' => $project->getCurrent(),
    ];


    return new JsonResponse(['message' => $formatted]);
  }

   /**
   * @Rest\Get("/api/projectowner/{id}")
   */
  public function getProjectOwner(Request $request)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $repository = $em->getRepository('AppBundle:User');
    $query = $repository->createQueryBuilder('u')
      ->innerJoin('u.project', 'g')
      ->where('g.id = :group_id')
      ->setParameter('group_id', $request->get('id'))
      ->getQuery()->getResult();

    $formatted = [];
    foreach ($query as $user) {
      $formatted[] = [
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname(),
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
      ];
    }

    return new JsonResponse($formatted);
  }

  /**
   * @Rest\Get("/api/projectcontributors/{id}")
   */
  public function getProjectContributors(Request $request)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $repository = $em->getRepository('AppBundle:User');
    $query = $repository->createQueryBuilder('u')
      ->innerJoin('u.investments', 'g')
      ->innerJoin('g.project', 'p')
      ->where('p.id = :group_id')
      ->setParameter('group_id', $request->get('id'))
      ->getQuery()->getResult();

    $formatted = [];
    foreach ($query as $user) {
      $formatted[] = [
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname(),
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
      ];
    }

    return new JsonResponse(["message" => $formatted]);
  }

  /**
   * @Rest\Get("/api/projectconterparts/{id}")
   */
  public function getProjectConterparts(Request $request)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $repository = $em->getRepository('AppBundle:Conterpart');
    $query = $repository->createQueryBuilder('u')
      ->innerJoin('u.project', 'g')
      ->where('g.id = :group_id')
      ->setParameter('group_id', $request->get('id'))
      ->getQuery()->getResult();

    $formatted = [];
    foreach ($query as $conterpart) {
      $formatted[] = [
        'id' => $conterpart->getId(),
        'name' => $conterpart->getName(),
        'description' => $conterpart->getDescription(),
        'value' => $conterpart->getValue(),
      ];
    }

    return new JsonResponse(["message" => $formatted]);
  }

  /**
   * @Rest\Post("/api/project/create")
   */
  public function createProject(Request $request) {
    $name = str_replace("\"", "", $request->get('name'));
    $description = str_replace("\"", "", $request->get('description'));
    $userId = str_replace("\"", "", $request->get('userId'));
    $user = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:User')
      ->find($userId);

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

    return new JsonResponse(['message' => $formatted]);
  }

  /**
   * @Rest\View()
   * @Rest\Post("/api/project/addconterpart")
   */
  public function AddConterpartToProject(Request $request) {
    $projectId = str_replace("\"", "", $request->get('projectId'));

    $project = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->find($projectId);
    /* @var $project Project */

    if (empty($project)) {
      return new JsonResponse(null, Response::HTTP_NOT_MODIFIED);
    }

    $conterpartId = str_replace("\"", "", $request->get('conterpartId'));

    $conterpart = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Conterpart')
      ->find($conterpartId);
    /* @var $conterpart Conterpart */

    if (empty($conterpart)) {
      return new JsonResponse(null, Response::HTTP_NOT_MODIFIED);
    }

    $project->addConterpart($conterpart);

    $em = $this->get('doctrine.orm.entity_manager');
    $em->persist($project);
    $em->flush();

    return new JsonResponse(['message' => "true"], Response::HTTP_ACCEPTED);
  }
}