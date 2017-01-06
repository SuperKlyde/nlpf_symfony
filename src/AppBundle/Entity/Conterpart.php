<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 06/01/2017
 * Time: 12:52
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="conterpart")
 */
class Conterpart
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", unique=true)
   */
  protected $name;

  /**
   * @ORM\Column(type="string")
   */
  protected $description;

  /**
   * @ORM\Column(type="integer")
   */
  protected $value;

  /**
   * @var ArrayCollection Project $projects
   *
   * Inverse Side
   *
   * @ORM\ManyToMany(targetEntity="User", mappedBy="conterparts", cascade={"persist", "merge"})
   */
  private $projects;

  /**
   * @ORM\OneToMany(targetEntity="Invest", mappedBy="conterpart", cascade={"ALL"})
   */
  protected $investments;

  /**
   * Conterpart constructor.
   * @param $name
   * @param $description
   * @param $value
   */
  public function __construct($name, $description, $value)
  {
    $this->name = $name;
    $this->description = $description;
    $this->value = $value;
    $this->projects = new ArrayCollection();
  }

  /**
   * Add Client
   *
   * @param Project $project
   */
  public function addProject(Project $project)
  {
    // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
    if (!$this->projects->contains($project)) {
      if (!$project->getConterparts()->contains($this)) {
        $project->addConterpart($this);  // Lie le Client au produit.
      }
      $this->projects->add($project);
    }
  }

  /**
   * Get ArrayCollection
   *
   * @return ArrayCollection $clients
   */
  public function getClients()
  {
    return $this->projects;
  }

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * @param mixed $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @return mixed
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * @param mixed $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }

  /**
   * @return mixed
   */
  public function getInvestments()
  {
    return $this->investments;
  }

  /**
   * @param mixed $investments
   */
  public function setInvestments($investments)
  {
    $this->investments = $investments;
  }
}