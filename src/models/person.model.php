<?php

declare(strict_types=1);
require_once("utils/index.php");
require_once("entity/person.entity.php");

class PersonModel
{

  static function getAllPerson()
  {
    $statement = Connection::getInstance()->prepare("Select * from person");
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Person");
    $objs = $statement->fetchAll();
    return $objs;
  }

  static function getPerson(int $idPerson)
  {
    $statement = Connection::getInstance()->prepare("Select * from person where idPerson = $idPerson");
    $statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Person");
    $statement->execute();
    $obj = $statement->fetch();
    return $obj;
  }

  static function addNewPerson(Person $person)
  {
    $dataSet = convertToArray($person, ["idPerson"]);
    $statement = Connection::getInstance()->prepare("Insert into person (person_name, person_age, person_address, person_birthday, person_job) values ( :person_name, :person_age, :person_address, :person_birthday, :person_job )");
    $statement->execute($dataSet);
  }

  static function updatePerson(int $idPerson, Person $person)
  {
    $dataSet = (array) $person;
    $arrFiltered = filterNullValue($dataSet);
    $query = "Update person set ";
    foreach ($arrFiltered as $key => $value) {
      $query .= "$key = '$value',";
    }
    $query = rtrim($query, ",");
    $query .= " where idPerson = $idPerson";
    $statement = Connection::getInstance()->prepare($query);
    $statement->execute();
  }

  static function detelePerson(int $idPerson)
  {
    Connection::getInstance()->exec("Delete from person where idPerson = $idPerson");
  }
}
