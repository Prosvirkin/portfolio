<div class="container">
    <div class="blog-content_item content">
        <?php
        foreach ($data as $item) {

            ?>
            <div class="blog-content_img">
                <a href=""><img src="<?php echo " /images/" . $item['image'] ?>" alt=""></a>
            </div>
            <p style="text-align: left;"><?php echo $item["header"]; ?></p>
            <p style="text-align: left;"><?php echo date("d-m-Y", $item["datetime"]); ?></p>
            <p><?php echo $item["content"] ?></p>
        <? } ?>
    </div>

    <h3>Комментарии:</h3>

    <div class="comments">
        <?php
        foreach ($posts as $item) {

            ?>
            <div class="comment">
                <h4 class="comment-name"><?php echo $item["name"].":" ?></h4>
                <p class="comment-date"><?php echo date("F, d, Y H:i", $item["datetime"]) ?></p>
                <p class="comment-content"><?php echo $item["content"] ?></p>
            </div>
            <hr>
        <?php } ?>
    </div>


    <section class="admin-form">
        <form action="" method="post">
            <p>Имя:</p>
            <input type="text" name="name"> <br>
            <p>Комментарий:</p>
            <textarea type="text" name="content" required> </textarea> <br>
            <input type="submit" value="Добавить">
        </form>
    </section>
</div>


