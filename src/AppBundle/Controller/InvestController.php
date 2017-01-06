<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 17:02
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Invest;

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

class InvestController extends Controller
{
  /**
   * @Rest\Get("/invest")
   */
  public function getInvestAction(Request $request)
  {
    $invests = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Invest')
      ->findAll();
    /* @var $invest Invest[] */

    $formatted = [];
    foreach ($invests as $invest) {
      $formatted[] = [
        'id' => $invest->getId(),
        'investor' => $invest->getInvestor(),
        'project' => $invest->getProject(),
        'conterpart' => $invest->getConterpart(),
      ];
    }

    return new JsonResponse($formatted);
  }

  /**
   * @Rest\View()
   * @Rest\Post("/investonproject")
   */
  public function investInProject(Request $request) {
    $project = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Project')
      ->find($request->get('projectId'));
    $conterpart = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:Conterpart')
      ->find($request->get('conterpartId'));
    $investor = $this->get('doctrine.orm.entity_manager')
      ->getRepository('AppBundle:User')
      ->find($request->get('investorId'));

    $invest = new Invest($investor, $project, $conterpart);

    $em = $this->get('doctrine.orm.entity_manager');
    $em->persist($invest);
    $em->flush();

    return new JsonResponse("true", Response::HTTP_ACCEPTED);
  }
}