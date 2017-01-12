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
use Symfony\Component\Config\Definition\Exception\Exception;


/**
 * @ORM\Entity()
 * @ORM\Table(name="project")
 */
class Project
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string")
   */
  protected $name;

  /**
   * @ORM\Column(type="string")
   */
  protected $description;

  /**
   * @ORM\Column(type="integer")
   */
  protected $current;

  /**
   * @ORM\Column(type="datetime")
   */
  protected $created;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="projects")
   * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
   */
  protected $owner;

  /**
   * @var ArrayCollection Conterpart $conterparts
   *
   * @ORM\OneToMany(targetEntity="Conterpart", mappedBy="projects", cascade={"persist", "merge"})
   */
  private $conterparts;

  /**
   * @ORM\OneToMany(targetEntity="Invest", mappedBy="project", cascade={"ALL"})
   */
  protected $investments;

  /**
   * Add Conterpart
   *
   * @param Conterpart $conterpart
   */
  public function addConterpart(Conterpart $conterpart)
  {
    // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
    if (!$this->conterparts->contains($conterpart)) {
      $this->conterparts->add($conterpart);
    }
  }

  public function setConterparts($items)
  {
    if ($items instanceof ArrayCollection || is_array($items)) {
      foreach ($items as $item) {
        $this->addConterpart($item);
      }
    } elseif ($items instanceof Conterpart) {
      $this->addConterpart($items);
    } else {
      throw new Exception("$items must be an instance of Produit or ArrayCollection");
    }
  }

  public function __construct(User $user, $name, $description)
  {
    $this->owner = $user;
    $this->name = $name;
    $this->description = $description;
    $this->current = 0;
    $this->created = new \DateTime("now");
    $this->conterparts = new ArrayCollection();
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
  public function getCurrent()
  {
    return $this->current;
  }

  /**
   * @param mixed $current
   */
  public function setCurrent($current)
  {
    $this->current = $current;
  }

  /**
   * @return mixed
   */
  public function getCreated()
  {
    return $this->created;
  }

  /**
   * @param mixed $created
   */
  public function setCreated($created)
  {
    $this->created = $created;
  }

  /**
   * @return mixed
   */
  public function getOwner()
  {
    return $this->owner;
  }

  /**
   * @param mixed $owner
   */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }

  /**
   * Get ArrayCollection
   *
   * @return ArrayCollection $produits
   */
  public function getConterparts()
  {
    return $this->conterparts;
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