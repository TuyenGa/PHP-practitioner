<?php
$query = require 'bootstrap.php';



$task = $query->selectAll('todos');


require 'index.view.php';
 ?>
