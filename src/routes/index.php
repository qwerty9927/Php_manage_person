<?php
require_once ("controllers/person.controller.php");

if(isset($_GET["view"])) {
  switch($_GET["view"]) {
    case "add":
      require_once("./views/add.view.php");
      break;

    case "update":
      require_once("./views/update.view.php");
      break;

    default: 
      require_once("./views/home.view.php");
  }
} else {
  require_once("./views/home.view.php");
}

if(isset($_GET["action"])) {
  $controler = new PersonController();
  switch($_GET["action"]) {
    case "add":
      $controler->addNewPerson();
      break;

    case "update":
      $controler->updatePerson();
      break;

    case "delete":
      $controler->deletePerson();
      break;
    
    default: 
      echo("Error! Don't have this action");
  }
}