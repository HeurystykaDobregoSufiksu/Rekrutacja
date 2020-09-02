<?php include_once 'templates/header.php'?>
    <table class="table">
        <thead>
        <tr>
            <th style="max-width:10%" scope="col">#</th>
            <th style="max-width:30%"scope="col">Nazwa</th>
            <th style="max-width:40%"scope="col">Opis</th>
            <th style="max-width:10%"scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if(!isset($categories)){ ?>
            <h2 style="text-align: center">Brak pasujących rekordów</h2>
        <?php }else { foreach ($categories as $category){?>
            <tr>
                <th scope="row"><?=$category->getID(); ?></th>
                <td><?=$category->getCategory();?> </td>
                <td><?=$category->getDescription();?> </td>
                <td><form method="POST" action="/category/remove"><button type="submit" class="btn btn-danger" name="id" value="<?=$category->getID();?>">usuń</button></form></td>
            </tr>
        <?php } } ?>

        </tbody>
    </table>
<?php include_once 'templates/messanger.php'?>
<?php include_once 'templates/footer.php'?>
<?php include_once 'templates/addons.php'?>