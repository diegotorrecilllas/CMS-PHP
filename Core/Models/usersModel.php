<?php
namespace Models;
use Models\firstModel;

class usersModel extends firstModel
{
  public function selectAll()
  {
    $statement = $this->pdo->prepare("select * from users");
    $statement->execute();
    $results=$statement->fetchAll(\PDO::FETCH_OBJ);
    var_dump($results);
  }
}
