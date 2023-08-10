<?php
if(isset($_GET["action"])) {
  switch($_GET["action"]) {
    case "add":
      require ("../controllers/add.controller.php");
      break;

    case "update":

      break;

    case "delete":

      break;
    
    default: 
      echo("Error! Don't have this action");
  }
} else {
  require("./views/home.view.php");
}