<section class="home-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 style="text-align: center">Последние сайты:</h2>
                <?php
                $websites = getWebsites();
                foreach ($websites as $items) {
                    ?>
                    <div class="home-content_item">
                        <div class="home-content_img">
                            <a href="<?php echo $items['reference'];?>"><img src="<?php echo "../images/".$items['image']?>" alt=""></a>
                        </div>
                        <p><?php echo $items["name"]; ?></p>
                    </div>
                <?php } ?>
            </div>

            <div class="col-md-6">
                <h2 style="text-align: center">Последние записи:</h2>
                <?php
                $posts = getPosts();
                foreach ($posts as $items) {
                    ?>
                    <div class="home-content_item">
                        <div class="home-content_img">
                            <a href=""><img src="<?php echo "../images/".$items['image']?>" alt=""></a>
                            <p><?php echo $items["content"]; ?></p>
                        </div>
                        <p><?php echo $items["header"]; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
