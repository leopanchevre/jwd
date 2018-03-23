
<?php

require_once 'functions.php';
require_once 'model/database.php';

// Déclaration des variables
$liste_photo = getAllPhotos();

getHeader("Acceuil", "Jean Webdesign");
?>

<header class="header_home">
    <div id="header_content" class="row col_center">

        <?php getMenu(); ?>

        <h2>Hello ! Je suis Jean Wedesign</h2>
        <h3>J'aime bidouiller photoshop</h3>

    </div>

</header>


<main>

    <section id="gallery">

        <div id="gallery_content" class="row col_center flex_wrapper">

            <h2>Dernières photos</h2>

            <?php foreach ($liste_photo as $photo) : ?>

            <?php include 'include/photo.inc.php'; ?>
            
            <?php endforeach; ?>

        </div>

    </section>

    <section id="contact" class="row col_center">

        <h2>Prenons contact</h2>
        <h3>Lorem ipsum dolor sit amet, consecuteur aipising elit. Sit facilitis beatea eum minima ipsum.</h3>

        <a href="contact.php" title="me contacter">Me contacter</a>

    </section>
</main>

<?php getFooter(); ?>