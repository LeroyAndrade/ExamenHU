<?php
// template name: overzicht
session_start();
?>

<!DOCTYPE html>
<html lang="nl">

    <?php require_once '../pageParts/head.php'; ?>
        <title>Hogeschool Utrecht</title>
        <meta name="author" content="Andrade Leroy">
        <link rel="stylesheet" type="text/css" href="../opmaak/headerTemplate.css">
        <link rel="stylesheet" type="text/css" href="../opmaak/pagePartOverzicht.css">

    </head>

    <body lang="nl">
        <?php require_once '../pageParts/headerTemplate.php'; ?>
        <!-- end header.php w3 valide-->

        <main>
            <div class="titelText">
                <div></div>
                <div class="headerMainTekst">Overzicht</div>
                <div></div>
            </div>
        </main>

        <!--start pageParts-->
        <?php require_once '../pageParts/overzicht.php'; ?>
        <script src="../js/javaScript.js"></script>
    </body>
</html>