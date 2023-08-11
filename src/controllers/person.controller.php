<?php
require_once("models/person.model.php");

class PersonController {
  function getAllPerson() {
    $persons = PersonModel::getAllPerson();
    return $persons;
  }

  function getPerson() {

  }

  function addNewPerson() {
    $person_name = $_POST["person_name"];
    $person_age = $_POST["person_age"];
    $person_address = $_POST["person_address"];
    $person_birthday = $_POST["person_birthday"];
    $person_job = $_POST["person_job"];
    $person = new Person($person_name, $person_age, $person_address, $person_birthday, $person_job);
    PersonModel::addNewPerson($person);
    header("Location: http://localhost:8000");
  }

  function updatePerson() {
    $id = $_GET["id"];
    $person_name = $_POST["person_name"];
    $person_age = $_POST["person_age"];
    $person_address = $_POST["person_address"];
    $person_birthday = $_POST["person_birthday"];
    $person_job = $_POST["person_job"];
    $person = new Person($person_name, $person_age, $person_address, $person_birthday, $person_job);
    PersonModel::updatePerson($id, $person);
    header("Location: http://localhost:8000");
  }

  function deletePerson() {
    $id = $_GET["id"];
    PersonModel::detelePerson($id);
    header("Location: http://localhost:8000");
  }
}