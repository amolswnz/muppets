<?php
  require_once 'connect.php';
  try {
    $sql = "SELECT * FROM muppet ORDER BY RAND() LIMIT 1 ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $muppet = $stmt->fetch();
  } catch (PDOException $e) {
    echo json_encode( array('error' => "ERROR in " . $_SERVER['PHP_SELF'] . " : <br />" . strip_tags($e->getMessage())) );
    die();
  }

  echo json_encode($muppet);
