
<?php
try{
 require '../includes/config.php';
 $connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Verbinding is gemaakt!";

} catch(PDOException $e){
 echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel '.$e->getLine() . ' in ' . $e->getFile();
}
?>


<div class="mainItems">

 <form action="#" method="POST" enctype="multipart/form-data">
  <div class="">
   <!--   <hr class="blackhr">-->

   <select id = "mainSelect" name = "selectedOnderwerp">
    <option value = "java" name="" selected disabled>Kies een categorie</option>
    <option value = "4">Ontwerpen&#44; ontwikkelen en maken van producten</option>
    <option value = "5">Media vormgeven &#38; Ict</option>
    <option value = "6">Constructies en Bouwwerken</option>
    <option value = "7">Materiaaltechnologie</option>
    <option value = "8">Elektrische systemen &#44; Elektronica en Robotica</option>
    <option value = "9">Traditional &#38; Digital Fabrication</option>
    <option value = "10">Circulair Skills</option>
   </select>

  </div>
 </form>

</div> <br><br>

<div class="itemClusterContainer">
     <div class="itemCluster">
        <div>
            <img src="../img/main/bootmachine.svg" alt="gears">
        </div>
        <span class="itemClusterText">Techniek</span>
        <br>
        <button class="buttonMain"><a href="">Bekijk</a></button>
        <br>
      </div><br>

    <div class="itemCluster">
     <div>
      <img src="../img/main/bootmachine.svg" alt="gears">
     </div>

     <span class="itemClusterText">Techniek</span>
     <br>
     <button class="buttonMain">Bekijk</button>
     <br>
    </div><br>

    <div class="itemCluster">
     <div>
      <img src="../img/main/bootmachine.svg" alt="gears">
     </div>

     <span class="itemClusterText">Techniek</span>
     <br>
     <button class="buttonMain">Bekijk</button>
     <br>
    </div><br>


<?php
$query = 'SELECT * FROM huwp_posts';

$statement = $connection->query($query);

//?>
<!---->
<!---->
 <?php foreach ($statement as $ledenData => $val): ?>
  <?php echo $val['naam'] . '<br/>'; ?>
 <?php endforeach
 ?>


 <div class="itemCluster">
  <div>
   <img src="../img/main/bootmachine.svg" alt="gears">
  </div>
  <span class="itemClusterText">Techniek</span>
  <br>
  <button class="buttonMain"><a href="">Bekijk</a></button>
  <br>
 </div><br>

 <div class="itemCluster">
  <div>
   <img src="../img/main/bootmachine.svg" alt="gears">
  </div>

  <span class="itemClusterText">Techniek</span>
  <br>
  <button class="buttonMain">Bekijk</button>
  <br>
 </div><br>

 <div class="itemCluster">
  <div>
   <img src="../img/main/bootmachine.svg" alt="gears">
  </div>

  <span class="itemClusterText">Techniek</span>
  <br>
  <button class="buttonMain">Bekijk</button>
  <br>
 </div><br>

</div>

