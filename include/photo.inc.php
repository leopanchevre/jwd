
<article class="col-4">

    <a href="photos.php?id=<?php echo $photo["id"]; ?>" title="<?php echo $photo["title"]; ?>">
        <img src="images/<?php echo $photo["img"]; ?>" alt="<?php echo $photo["title"]; ?>" title="<?php echo $photo["title"]; ?>">
        <p><?php echo $photo["nb_like"]; ?></p>

    </a>

    <div class="infos">

        <h3><?php echo $photo["title"]; ?> #<?php echo $photo["categorie"]; ?></h3>
        <p>
            <?php foreach ($photo["tags"] as $tag) : ?>
                #<?php echo $tag; ?>
            <?php endforeach; ?>
        </p>
        <p><?php echo $photo["date_creation_format"]; ?></p>
    </div>

</article>
