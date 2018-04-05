<?php
  require_once 'connect.php';
  try {
    $sql = "SELECT id, name, img FROM muppet ORDER BY RAND()";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $muppetsList = $stmt->fetchAll();
  } catch (PDOException $e) {
    echo json_encode( array('error' => "ERROR in " . $_SERVER['PHP_SELF'] . " : <br />" . strip_tags($e->getMessage())) );
    die();
  }

  echo json_encode($muppetsList);
