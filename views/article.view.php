<?php include_once 'templates/header.php'?>
<?php

if(!isset($articles)){ ?>
    <h2 style="text-align: center">Brak artykułu</h2>
<?php }else { ?>

<?php  } ?>
    Panel edycji:
    <form action='/article/update' method="POST">
    <input class="form-control" type="text" name="title" value="<?=$articles[0]['title']?>">
    <textarea class="form-control" name="content" rows="5"><?=$articles[0]['content']?></textarea>
    <input class="form-control" type="number" name="author" placeholder="Default input">
    <select name="category" class="form-control">
        <option disabled>Wybierz kategorie</option>
        <option value="4">Dobra kategoria</option>
    </select>
    <select name="status" class="form-control">
        <option disabled>Wybierz status</option>
        <option value="accepted">Zaakceptowany</option>
        <option value="waiting">Oczekujący</option>
        <option value="rejected">Odrzucony</option>
    </select>
        <button type="submit" style="margin-left: 25%;width:50%; margin-top:3vh" class="btn btn-primary" name="id" value="<?=$articles[0]['ID']?>">Zapisz zmiany</button>
    </form>

<?php include_once 'templates/footer.php'?>
<?php include_once 'templates/addons.php'?>