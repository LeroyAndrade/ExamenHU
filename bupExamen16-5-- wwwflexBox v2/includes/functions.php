<?php

session_start();

function dbConnect(){

// $config = require __DIR__ .'/config.php';
 $config = '/config.php';

 try {
  $connection = new PDO('mysql:host='.$config['hostname'] . ';dbname=' . $config['database'], $config['username'], $config['password'] );
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Verbinding is gemaakt!";

  return $connection;

 } catch(PDOException $e) {
  echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
 }

 return false;
}

function loginIfNeeded() {
 if ( ! isLoggedIn() ) {
  header('Location: ./login.php');
 }
}

function isLoggedIn() {
 if ( isset( $_SESSION['user_id'])) {
  return true;
 }

 return false;
}






function getTrack( $id, $connection ) {

 try {
  $sql = 'SELECT * FROM `afspeellijst` WHERE `id` = :id';
  $statement = $connection->prepare( $sql );
  $parameters = [
   'id' => $id
  ];
  $statement->execute( $parameters );
  $track = $statement->fetch();

  return $track;

 } catch ( PDOException $e ) {
  echo 'Fout bij database verbinding:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
  exit;
 }
}

function deleteTrack( $id, $connection) {
 try {
  $sql = 'DELETE FROM `afspeellijst` WHERE id = :id';
  $statement = $connection->prepare($sql);
  $parameters = ['id' => $id,];

  $statement->execute($parameters);
  header('Location: index.php');

 } catch (PDOException $e) {
  echo 'Fout bij databse verbinding:<br>' . $e->getMessage() . 'op regel' . $e->getLine() . 'in' . $e->getFile();
  exit;
 }

 if(empty($id)){
  echo 'Geen id!';
  exit;
 }
}

?>
