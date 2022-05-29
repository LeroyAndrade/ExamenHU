<?php
// template name: page-registreren
session_start();
?>

<!DOCTYPE html>
<html lang="nl">

    <?php require_once '../pageParts/head.php'; ?>
        <title>Hogeschool Utrecht</title>
        <meta name="author" content="Andrade Leroy">
        <link rel="stylesheet" type="text/css" href="../opmaak/headerTemplate.css">
         <link rel="stylesheet" type="text/css" href="../opmaak/globalButtons.css">
        <link rel="stylesheet" type="text/css" href="../opmaak/pagePartRegistreren.css">

    </head>

    <body lang="nl">
        <?php require_once '../pageParts/headerTemplate.php'; ?>
        <!-- end header.php w3 valide-->

        <main>
            <div class="titelText">
                <div> </div>

                <div class="headerMainTekst">Registreren</div>
                <div></div>
            </div>
        </main>

<!--start pageParts-->
        <?php require_once '../pageParts/registreren.php'; ?>
        <?php require_once '../pageParts/footer.php'; ?>


        <script src="../js/javaScript.js"></script>
    </body>
</html>