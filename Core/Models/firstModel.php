<?php
namespace Models;

class firstModel
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo=$pdo;
  }
}
