<?php

class Person {
  public $idPerson;
  public $person_name;
  public $person_age;
  public $person_address;
  public $person_birthday;
  public $person_job;

  function __construct($person_name = null, $person_age = null, $person_address = null, $person_birthday = null, $person_job = null)
  {
    $this->person_name = $person_name;
    $this->person_age = $person_age;
    $this->person_address = $person_address;
    $this->person_birthday = $person_birthday;
    $this->person_job = $person_job;
  }
  
}