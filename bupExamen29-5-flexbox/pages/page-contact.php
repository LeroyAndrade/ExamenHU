<?php
// template name: page-contact
session_start();
?>

<!DOCTYPE html>
<html lang="nl">

    <?php require_once '../pageParts/head.php'; ?>
        <title>Hogeschool Utrecht</title>
        <meta name="author" content="Andrade Leroy">
        <link rel="stylesheet" type="text/css" href="../opmaak/headerTemplate.css">
        <link rel="stylesheet" type="text/css" href="../opmaak/globalButtons.css?v1">
        <link rel="stylesheet" type="text/css" href="../opmaak/pagePartContact.css?v1">

    </head>

    <body lang="nl">
        <?php require_once '../pageParts/headerTemplate.php'; ?>
        <!-- end header.php w3 valide-->

        <main>
            <div class="titelText">
                <div> </div>
                <div class="headerMainTekst">Contact</div>
                <div></div>
            </div>
        </main>

<!--start pageParts-->
        <?php require_once '../pageParts/contact.php'; ?>
        <?php require_once '../pageParts/footer.php'; ?>


        <script src="../js/javaScript.js"></script>
    </body>
</html>