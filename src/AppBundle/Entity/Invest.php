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
 * @ORM\Table(name="invest")
 */
class Invest
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="investments")
   */
  protected $investor;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="investments")
   */
  protected $project;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="investments")
   */
  protected $conterpart;

  /**
   * Invest constructor.
   * @param $investor
   * @param $project
   * @param $conterpart
   */
  public function __construct($investor, $project, $conterpart)
  {
    $this->investor = $investor;
    $this->project = $project;
    $this->conterpart = $conterpart;
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
  public function getInvestor()
  {
    return $this->investor;
  }

  /**
   * @param mixed $investor
   */
  public function setInvestor($investor)
  {
    $this->investor = $investor;
  }

  /**
   * @return mixed
   */
  public function getProject()
  {
    return $this->project;
  }

  /**
   * @param mixed $project
   */
  public function setProject($project)
  {
    $this->project = $project;
  }

  /**
   * @return mixed
   */
  public function getConterpart()
  {
    return $this->conterpart;
  }

  /**
   * @param mixed $conterpart
   */
  public function setConterpart($conterpart)
  {
    $this->conterpart = $conterpart;
  }
}