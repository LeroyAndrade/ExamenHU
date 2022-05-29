
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>


    <body>
      <form action="./delform.php" method="POST" enctype="multipart/form-data">
          <input id="uploadBtn" class="buttonGold center sysUploadBtn" type="file" name="uploadedFileValue">
          <input id="buttonSubmit" class="buttonGold buttonSubmit center" type="submit" value="Opslaan">

      </form>


    </body>
</html>