<?php
include_once "templates/header.php";
?>

<main>
    <div id="title-container">
        <h1>Blog Codar</h1>
        <p>O seu Blog de Programação</p>
    </div>

    <div id="posts-container">
        <?php foreach ($posts as $post) : ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['img'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description">
                    <?= $post['description'] ?>
                </p>
                <div class="tags-container">
                    <?php foreach ($post['tags'] as $tags) : ?>
                        <a href="#"><?= $tags ?></a>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</main>

<?php
include_once "templates/footer.php";
?>