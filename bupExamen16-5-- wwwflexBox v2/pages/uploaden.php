<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="nl">

    <?php require_once '../pageParts/head.php'; ?>
        <title>Hogeschool Utrecht</title>
        <meta name="author" content="Andrade Leroy">
        <link rel="stylesheet" type="text/css" href="../opmaak/header.css">
        <link rel="stylesheet" type="text/css" href="../opmaak/pagePartUploaden.css">
    </head>


    <body lang="nl">
        <?php require_once '../pageParts/header.php'; ?>
        <!-- end header.php w3 valide-->

        <main>
            <div class="titelText">
                <div></div>
                <div class="headerMainTekst">Uploaden</div>
                <div></div>
            </div>
        </main>


<!--start pageParts-->
        <br>
        <?php require_once '../pageParts/uploaden.php'; ?>



        <script src="../js/javaScript.js"></script>


    </body>
</html>