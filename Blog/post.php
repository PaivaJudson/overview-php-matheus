<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>


<main id="posts-container">

    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, magnam commodi veritatis deleniti fugit porro nisi in ducimus totam placeat quis, sapiente, nostrum eaque cum quasi cumque esse maiores necessitatibus.
            Inventore, a odit. Excepturi expedita perferendis explicabo molestias ipsum quia unde, fugit architecto, cum eum nulla obcaecati voluptates repellat magnam molestiae aut tempora officia sequi? Tempore suscipit totam repudiandae labore?
            Doloremque labore itaque corrupti, neque perspiciatis incidunt debitis ab deleniti temporibus autem omnis quaerat similique aliquam, qui sunt vitae nulla recusandae iusto? Minima ab quibusdam incidunt veritatis consectetur error enim.
            Adipisci dolorum cumque officia optio. Similique ipsum corporis nobis nam, dolor perspiciatis nisi fugit odit dignissimos et inventore a vero ducimus non quod dolorum minima. Corporis dicta cumque laboriosam culpa?
            Rerum alias quo provident nisi, voluptate sint nulla facere, officia, officiis neque veniam a unde nobis ex vitae omnis iste dicta doloribus temporibus dolor corrupti culpa qui. Quas, quis delectus!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, magnam commodi veritatis deleniti fugit porro nisi in ducimus totam placeat quis, sapiente, nostrum eaque cum quasi cumque esse maiores necessitatibus.
            Inventore, a odit. Excepturi expedita perferendis explicabo molestias ipsum quia unde, fugit architecto, cum eum nulla obcaecati voluptates repellat magnam molestiae aut tempora officia sequi? Tempore suscipit totam repudiandae labore?
            Doloremque labore itaque corrupti, neque perspiciatis incidunt debitis ab deleniti temporibus autem omnis quaerat similique aliquam, qui sunt vitae nulla recusandae iusto? Minima ab quibusdam incidunt veritatis consectetur error enim.
            Adipisci dolorum cumque officia optio. Similique ipsum corporis nobis nam, dolor perspiciatis nisi fugit odit dignissimos et inventore a vero ducimus non quod dolorum minima. Corporis dicta cumque laboriosam culpa?
            Rerum alias quo provident nisi, voluptate sint nulla facere, officia, officiis neque veniam a unde nobis ex vitae omnis iste dicta doloribus temporibus dolor corrupti culpa qui. Quas, quis delectus!
        </p>
    </div>
</main>

<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul class="tag-list">
        <?php foreach ($currentPost['tags'] as $tags) : ?>
            <li><a href="#"><?= $tags ?></a></li>
        <?php endforeach ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul class="categories-list">
        <?php foreach ($categories['tags'] as $category) : ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach ?>
    </ul>
</aside>









<?php
include_once "templates/footer.php";
?>