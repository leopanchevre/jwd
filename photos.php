<?php
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];

$photo = getPhoto($id);

getHeader($photo["title"], "Description de la page");
?>

<header>    
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<h1><?php echo $photo["title"]; ?></h1>

<?php getFooter(); ?>

<input type="submit" value="" />
