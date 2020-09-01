<?php include_once 'templates/header.php'?>
<?php

if(!isset($articles)){ ?>
    <h2 style="text-align: center">Brak pasujących rekordów</h2>
<?php }else {?>
    <tr>
        <th scope="row">1</th>
        <td><?=$articles[0]['title']?> </td>
        <td><?=$articles[0]['content']?> </td>
        <td><?=$articles[0]['status']?> </td>
        <td>DELete EDTYTUJ</td>
    </tr>
<?php } ?>



<?php include_once 'templates/footer.php'?>
