<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/main.css" tyle="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin panel</title>
</head>
<body style="background-color: #16213e">
<div class="container-fluid">
    <div class="row" id="navbar">
        <div class="col-md-7">
            <div class="row">
                <p class="col-md-4" id="logo">Panel administracyjny</p>
                <p class="col navBtn">Wszystkie</p>
                <p class="col navBtn">Zatwierdzone</p>
                <p class="col navBtn">Odrzucone</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <input type="text" class="form-control col-md-5" id="search" placeholder="podaj tytuł artykułu">
                <button type="submit" class="btn btn-primary col-md-2"id="searchBtn">wyszukaj</button>
            </div>

        </div>
    </div>
    <div class="col-md-8 offset-2" id="content">
        <table class="table">
            <thead>
            <tr>
                <th style="max-width:10%" scope="col">#</th>
                <th style="max-width:30%"scope="col">Tytuł</th>
                <th style="max-width:40%"scope="col">Opis</th>
                <th style="max-width:10%"scope="col">Status</th>
                <th style="max-width:10%"scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>