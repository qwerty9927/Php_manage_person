<?php
require_once("../vendor/autoload.php");
require("./db/index.php");
Connection::connect();
require("./routes/index.php")
?>