<?php 
try {
  $pdo = new PDO('mysql:dbname=adviser.iitu.kz; host=localhost', 'root', '');
} catch (PDOException $e) {
  die($e->getMessage());
}
 ?>