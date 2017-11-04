<div class="container">
    <table>
        <h2>Сайты:</h2>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Ссылка</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        <?php
        foreach ($data as $item) {
            $countWebsites++;
            ?>
            <tr>
                <td><?php echo $countWebsites ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['description'] ?></td>
                <td><?php echo "<a style='letter-spacing: 0px; text-transform: none;' href='{$item['reference']}'>{$item['reference']}</a>" ?></td>
                <td><?php echo "<a href='http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}edit/{$item["id"]}'>Изменить</a>" ?></td>
                <td><?php echo "<a href='deleteWebsite.php?id={$item['id']}'>Удалить</a>" ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <table>
        <h2>Посты:</h2>
        <tr>
            <th>№</th>
            <th>Заголовок</th>
            <th>Контент</th>
            <th>Время</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        <?php
        foreach ($posts as $item) {
            $countPosts++;
            ?>
            <tr>
                <td><?php echo $countPosts ?></td>
                <td><?php echo $item['header'] ?></td>
                <td><?php echo $item['content'] ?></td>
                <td><?php echo date('d-m-Y H:i', $item['datetime']) ?></td>
                <td><?php echo "<a href='http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}edit/{$item["id"]}'>Изменить</a>" ?></td>
                <td><?php echo "<a href='deletePost.php?id={$item['id']}'>Удалить</a>" ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>