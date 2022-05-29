<?php
// template name: template
?>

<!DOCTYPE html>
<html lang="nl">

    <?php require_once '../pageParts/head.php'; ?>
        <title>Hogeschool Utrecht</title>
        <meta name="author" content="Andrade Leroy">
        <link rel="stylesheet" type="text/css" href="../opmaak/headerTemplate.css">
        <link rel="stylesheet" type="text/css" href="../opmaak/globalButtons.css">
        <link rel="stylesheet" type="text/css" href="../opmaak/pagePartProfiel.css">
    </head>

    <body lang="nl">
        <?php require_once '../pageParts/headerTemplate.php'; ?>
        <!-- end header.php w3 valide-->

        <main>
            <div class="titelText">
                <div> </div>

                <div class="headerMainTekst">Profiel</div>
                <div></div>
            </div>
        </main>

<!--start pageParts-->
        <?php require_once '../pageParts/profiel.php'; ?>
        <?php require_once '../pageParts/footer.php'; ?>


        <script src="../js/javaScript.js"></script>
    </body>
</html>