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
   * @ORM\ManyToOne(targetEntity="Project", inversedBy="conterparts")
   * @ORM\JoinColumn(name="project_id", referencedColumnName="id")

   */
  private $project;

  /**
   * @ORM\OneToMany(targetEntity="Invest", mappedBy="conterpart", cascade={"ALL"})
   */
  protected $investments;

  /**
   * Conterpart constructor.
   * @param $name
   * @param $description
   * @param $value
   * @param Project $project
   */
  public function __construct($name, $description, $value, Project $project)
  {
    $this->name = $name;
    $this->description = $description;
    $this->project = $project;
    $this->value = $value;
    $this->investments= new ArrayCollection();
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

  /**
   * @return ArrayCollection
   */
  public function getProject()
  {
    return $this->project;
  }

  /**
   * @param ArrayCollection $project
   */
  public function setProject($project)
  {
    $this->project = $project;
  }


}