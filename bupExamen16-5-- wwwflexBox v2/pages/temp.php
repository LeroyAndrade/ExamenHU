<form action="register_user.php" method="POST">

 <p>
  <label class="label-login" for="voornaam">Titel</label> <br>
  <input class="input-login" type="text" name="titel"/>
 </p>

 <!--      <p>-->
 <!--       <label class="label-login" for="achternaam">Achternaam</label> <br>-->
 <!--       <input class="input-login" type="text"name="achternaam"/>-->
 <!--      </p>-->

 <p>
  <label class="label-login" for="email">E-Mail</label> <br>
  <input class="input-login" type="text" name="dtextt"/>
 </p>

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



 <button class="button-registreer" type="submit">Registreer</button>
</form>
<?php
