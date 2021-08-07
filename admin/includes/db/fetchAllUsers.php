<?php
    $qryAllUsers = $connect->prepare('select * from users');
    $qryAllUsers->execute();
    $numUsers=$qryAllUsers->rowCount();
    $allUsers=$qryAllUsers->fetchAll();
?>