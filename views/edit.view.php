<?php include_once 'templates/header.php'?>
<?php

if(!isset($articles)){ ?>
    <h2 style="text-align: center">Brak artykułu</h2>
<?php }else { ?>

<?php  } ?>

<div class="row">
<div class="col-sm-4 offset-1" style="margin-top:5vh; margin-bottom:5vh">
    <form action='/article/update' method="POST">
        Tytuł:
        <input class="form-control" type="text" name="title" value="<?=$articles[0]['title']?>">
        Opis:
        <textarea class="form-control" name="content" rows="10"><?=$articles[0]['content']?></textarea>

</div>
    <div class="col-sm-4 offset-1" style="margin-top:5vh">
        Kategoria
        <select name="category" class="form-control">
            <?php foreach ($categories as $category){?>
                <option value="<?=$category->getID();?>"><?=$category->getCategory()?></option>
            <?php } ?>
        </select>
        Status:
        <select name="status" class="form-control">
            <option disabled>Wybierz status</option>
            <option value="accepted">Zaakceptowany</option>
            <option value="waiting">Oczekujący</option>
            <option value="rejected">Odrzucony</option>
        </select>
        <button type="submit" style="margin-left: 25%;width:50%; margin-top:3vh" class="btn btn-primary" name="id" value="<?=$articles[0]['ID']?>">Zapisz zmiany</button>
        </form>
    </div>
</div>


<?php include_once 'templates/footer.php'?>
<?php include_once 'templates/addons.php'?>
<?php include_once 'templates/messanger.php'?>
