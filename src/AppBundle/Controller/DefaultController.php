<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /*$projects = $this->get('doctrine.orm.entity_manager')
          ->getRepository('AppBundle:Project')
          ->findAll();*/
        /* @var $projects Project[] */

        /*$formatted = [];
        foreach ($projects as $project) {
            $formatted[] = [
              'id' => $project->getId(),
              'name' => $project->getName(),
              'owner' => $project->getOwner(),
              'created' => $project->getCreated(),
              'conterparts' => $project->getConterparts(),
              'description' => $project->getDescription(),
            ];
        }

        // Exécution de la requête
        // replace this example code with whatever you need
*/
        /*return $this->render('default/index.html.twig', array(
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
          'projectlist' => $formatted,
        ));*/

       return $this->render('ngapp/views/accueil.html');
    }

    /**
     * @Route("/createaccount", name="createaccount")
     */
    public function createAccountAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/createaccount.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/best", name="best")
     */
    public function bestAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/best.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/createconterpart", name="createconterpart")
     */
    public function createConterpartAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/createconterpart.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/createproject", name="createproject")
     */
    public function createprojectAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/createproject.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/project", name="project")
     */
    public function projectAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/project.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
