<section class="home-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $posts = getPosts();
                foreach ($posts as $items) {
                    ?>
                    <div class="blog-content_item">
                        <div class="blog-content_img">
                            <img src="<?php echo "../images/" . $items['image'] ?>">
                        </div>
                        <h2><?php echo $items["header"]; ?></h2>
                        <p style="text-align: left;"><?php echo "Дата: " . date("d-m-Y", $items["datetime"]); ?></p>
                        <p><?php echo mb_substr($items["content"], 0, 250, 'UTF-8') . "..." ?></p>
                        <?php echo "<a class='blog-button' href='index.php?id=fullpost&postid={$items['id']}'>Далее</a>" ?>
                        <hr>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</section>
