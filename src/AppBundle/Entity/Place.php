<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 05/01/2017
 * Time: 11:10
 */

namespace AppBundle\Entity;


class Place
{
  public $name;

  public $address;

  public function __construct($name, $address)
  {
    $this->name = $name;
    $this->address = $address;
  }
}