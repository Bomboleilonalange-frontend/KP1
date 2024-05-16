<?php
  $connect = mysqli_connect(hostname:"localhost", username:"root", password:"" , database:"FoodForLifeReady");
  if(!$connect){
    die("Нет подключения к базе данных");
  }