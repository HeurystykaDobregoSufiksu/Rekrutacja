<?php include_once 'templates/header.php'?>
<?php

if($categories==null){ ?>
    <h2 style="text-align: center">Brak pasujących rekordów</h2>
<?php }else {?>
    <tr>
        <th scope="row">1</th>
        <td><?=$categories[0]->getName()?> </td>
        <td><?=$categories[0]->getDescription()?> </td>
        <td>aktywny</td>
        <td>DELete EDTYTUJ</td>
    </tr>
<?php } ?>



<?php include_once 'templates/footer.php'?>
