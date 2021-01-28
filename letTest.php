<?php
require "Bootstrap.php";
$tasks=$query->selectAll("mytasks");
require "index.view.php";
?>