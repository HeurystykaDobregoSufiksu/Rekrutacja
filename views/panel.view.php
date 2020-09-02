<?php include_once 'templates/header.php'?>
    <table class="table">
        <thead>
        <tr>
            <th style="max-width:10%" scope="col">#</th>
            <th style="max-width:30%"scope="col">Tytuł</th>
            <th style="max-width:40%"scope="col">Opis</th>
            <th style="max-width:40%"scope="col">Autor</th>
            <th style="max-width:10%"scope="col">Status</th>
            <th style="max-width:10%"scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
<?php
if(!isset($articles)){ ?>
    <h2 style="text-align: center">Brak pasujących rekordów</h2>
<?php }else { foreach ($articles as $article){?>
    <tr>
        <th scope="row"><?=$article['ID']?></th>
        <td><?=$article['title']?> </td>
        <td><?=$article['content']?> </td>
        <td><?=$article['name']?> </td>
        <td><?=$article['status']?> </td>

        <td><form method="POST" action="/article/remove"><button type="submit" class="btn btn-danger" name="id" value="<?=$article['ID']?>">usuń</button></form></td>
        <td><form method="GET" action="/article/edit"><button type="submit" class="btn btn-info" name="id" value="<?=$article['ID']?>">edytuj</button></form></td>

    </tr>
<?php } } ?>

    </tbody>
    </table>
<?php include_once 'templates/footer.php'?>
<?php include_once 'templates/addons.php'?>
<?php include_once 'templates/messanger.php'?>