
<?php
session_start();
 var_dump($_FILES['uploadedFileValue']);
//


$ROOT = "D:/Mega/NPC/AMC/2019-2020/Lessen/L3/proef/wwwflexBox/uploads";
//$ROOT = "https://firesofdestruction.nl/bewijzenmap/l3/hu-techwp/wp-content/tempUploads";

foreach($_FILES as $file => $details)
{   // Move each file from its temp directory to $ROOT
 $temp = $details['tmp_name'];
 $target = $details['name'];
 move_uploaded_file($temp, $ROOT.'/'.$target);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>



    <body>
    <img src="<?php echo '../uploads/'.$target; ?>" alt="">
    </body>
</html>