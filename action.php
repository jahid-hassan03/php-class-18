<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\series;
use App\classes\Registet;


if (isset( $_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }

    else if ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }

    elseif( $_GET['pages']=='register')
    {
        include 'pages/Register.php';

    }


}
elseif (isset($_POST['btn']))
{
    $home = new Home($_POST);
    $result = $home ->primeNumber();
    include 'pages/home.php';
}
elseif (isset($_POST['series_Btn']))
{
    $series = new series($_POST);
    $result = $series->getSeries();
    include 'pages/series.php';
}

elseif ($_POST['register_btn'])
{
    $register =new Registet($_POST);


}


else
{
    $home = new Home();
    $home->index();
}