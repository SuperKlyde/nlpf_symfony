<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 17:02
 */

namespace AppBundle\Controller;

namespace AppBundle\Controller;

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

class UserController extends Controller
{
  /**
   * @Rest\Get("/users")
   */
  public function getUsersAction(Request $request)
  {
    $users = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:User')
      ->findAll();
    /* @var $users User[] */

    $formatted = [];
    foreach ($users as $user) {
      $formatted[] = [
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname(),
        'email' => $user->getEmail(),
        'projects' => $user->getProjects(),

      ];
    }

    return new JsonResponse($formatted);
  }

  public function getUserByIdentifier($userId) {
    $user = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:User')
      ->find($userId);

    return $user;
  }
  /**
   * @Rest\Get("/users/{user_id}")
   */
  public function getUserById(Request $request)
  {
    $user = $this->getUserByIdentifier($request->get('user_id'));
    /* @var $user User */

    if (empty($user)) {
      return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
    }

    $formatted = [
      'id' => $user->getId(),
      'firstname' => $user->getFirstname(),
      'lastname' => $user->getLastname(),
      'email' => $user->getEmail(),
    ];

    return new JsonResponse($formatted);
  }

  /**
   * @Rest\View()
   * @Rest\Post("api/users/createaccount")
   */
  public function createAccount(Request $request) {
    $firstname = str_replace("\"", "", $request->get('firstname'));
    $lastname = str_replace("\"", "", $request->get('lastname'));
    $email = str_replace("\"", "", $request->get('email'));
    $password = str_replace("\"", "", $request->get('password'));

    $user = new User($firstname, $lastname, $password, $email);

    $em = $this->get('doctrine.orm.entity_manager');
    $em->persist($user);
    $em->flush();

    $formatted = [
      'id' => $user->getId(),
      'firstname' => $user->getFirstname(),
      'lastname' => $user->getLastname(),
      'email' => $user->getEmail(),
    ];
    return new JsonResponse(['message' => $formatted]);
  }

  /**
   * @Rest\Post("api/user/login")
   */
  public function login(Request $request) {
    $email = str_replace("\"", "", $request->get('email'));
    $pwd = str_replace("\"", "", $request->get('password'));

    $user = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:User')
      ->findOneByEmail($email);
    /* @var $user User */

    if (empty($user)) {
      return new JsonResponse(null);
    }
    if ($user->getPassword() != $pwd)
      return new JsonResponse(null);

    $formatted = [
      'id' => $user->getId(),
      'firstname' => $user->getFirstname(),
      'lastname' => $user->getLastname(),
      'email' => $user->getEmail(),
      'password' => $user->getPassword(),
    ];
    return new JsonResponse(['message' => $formatted]);
  }
}