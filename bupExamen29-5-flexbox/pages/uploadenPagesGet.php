<?php
require '../includes/functions.php';
$connection = dbConnect();

if ( $_SERVER['REQUEST_METHOD'] === 'POST') {

}

try {
 $sql = 'INSERT INTO `huwp_posts` (`post_title`,`post_content`)
    VALUES (:titel, :dtextt)';

 // $safe_password = password_hash( $_POST['wachtwoord'], PASSWORD_DEFAULT );

 $data = [
  'titel'  => $_POST['titel'],
//    'achternaam' => $_POST['achternaam'],
  'dtextt' => $_POST['dtextt'],

//    'wachtwoord' => $safe_password,
 ];

 $statementwo = $connection->prepare( $sql );
 $statementwo->execute( $data );

// laatst ingevoerde id in SQL tabel
 $id = $connection->lastInsertId();
// Koppel nieuw bericht aan de categorie
 $sqlTwo = 'INSERT INTO `huwp_term_relationships` (`object_id`,`term_taxonomy_id`)
    VALUES (:objectData, :selectedOnderwerp)';

 $dataTwo = [
  'objectData' => $id,
  'selectedOnderwerp' => $_POST['selectedOnderwerp'],
 ];

 $statementwo = $connection->prepare( $sqlTwo );
 $statementwo->execute( $dataTwo );

 // header( 'location: index.php');

 var_dump($id);
 var_dump($_POST['selectedOnderwerp']);
 exit;

} catch ( PDOException $e ) {
 echo 'Fout:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
 exit;
}

?>
