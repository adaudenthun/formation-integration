<?php include_once './page/html/header.html'; ?>

<?php

require_once './class/catalogue.php';
$bloc = new Catalogue();

// stdClass contenant la liste des catalogues à afficher
$catalogueCollection = $bloc->getCollection();

/**
*
* TODO : Réaliser l'integration de la page catalogue
* Device limit :
*  - @screen__xxs: 320px;
*  - @screen__xs: 480px; +
*  - @screen__s: 640px; +
*  - @screen__m: 768px; +
*  - @screen__l: 1024px; +
*  - @screen__xl: 1440px;
*
* balises PHP autorisées :
*  - <?php ?>
*  - <?= ?>
*
* Utilisation de flex recommandé.
* Aide pour flex : https://css-tricks.com/snippets/css/a-guide-to-flexbox/
*
*/

?>

<div class="container">

    <!-- HTML ici ! :) -->

</div>

<?php include_once './page/html/footer.html'; ?>
