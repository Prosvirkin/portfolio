<div class="container">
    <div class="blog-content_item">
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

    <form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="post">
        <label>Имя:</label> <br>
        <input style="margin-bottom: 15px;" type="text" name="name"> <br>
        <label>Описание:</label> <br>
        <textarea type="text" name="msg" required> </textarea> <br>
        <input type="submit" value="Добавить">
    </form>
</div>


