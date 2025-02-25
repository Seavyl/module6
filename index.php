<?php
require 'bdd.php';

$db = BDD::getInstance();
$students = $db->query("SELECT * FROM etudiants");
print_r($students);