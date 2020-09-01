<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/main.css" tyle="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="./js/messanger.js"></script>
    <title>Admin panel</title>
</head>
<body style="background-color: #16213e">
<div class="container-fluid">
    <div class="row" id="navbar">
        <div class="col-md-7">
            <div class="row">
                <p class="col-md-4" id="logo">Panel administracyjny</p>
                <p class="col navBtn">artykuly</p>
                <p class="col navBtn">kategorie</p>
                <button type="button" id="dodajArt"  class="btn btn-primary" data-toggle="modal" data-target="#dodajArtykul">
                    Dodaj artykuł
                </button>
                <button type="button" id="dodajKat"  class="btn btn-primary" data-toggle="modal" data-target="#dodajKategorie">
                    Dodaj kategorie
                </button>

            </div>
        </div>
    </div>
    <div class="col-md-8 offset-2" id="content">

