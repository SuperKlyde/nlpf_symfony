<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 17:01
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */
class User
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
    protected $firstname;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="owner", cascade={"ALL"})
     */
    protected $projects;

    /**
     * @ORM\OneToMany(targetEntity="Invest", mappedBy="investor", cascade={"ALL"})
     */
    protected $investments;

  /**
   * User constructor.
   * @param $firstname
   * @param $lastname
   * @param $password
   * @param $email
   */
  public function __construct($firstname, $lastname, $password, $email)
  {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->password = $password;
    $this->email = $email;
    $this->investments = new ArrayCollection();
    $this->projects = new ArrayCollection();
  }

  public function getId()
    {
      return $this->id;
    }

    public function setId($id)
    {
      $this->id = $id;
    }

    public function getFirstname()
    {
      return $this->firstname;
    }

    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
    }

    public function getLastname()
    {
      return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
      $this->password = $password;
    }

    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function setEmail($email)
    {
      $this->email = $email;
    }

    public function addAttribute($name, $description)
    {
      $this->projects[$name] = new Project($this, $name, $description);
    }

  /**
   * @return mixed
   */
  public function getProjects()
  {
    return $this->projects;
  }

  /**
   * @param mixed $projects
   */
  public function setProjects($projects)
  {
    $this->projects = $projects;
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