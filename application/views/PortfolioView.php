<section class="home-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                foreach ($data as $items) {
                    ?>
                    <div class="home-content_item">
                        <div class="home-content_img">
                            <a href="<?php echo $items['reference'];?>"><img src="<?php echo "../images/".$items['image']?>" alt=""></a>
                        </div>
                        <p><?php echo $items["name"]; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
