<?php
    $qryAllCategoriess = $connect->prepare('select * from categories');
    $qryAllCategoriess->execute();
    $numCategories=$qryAllCategoriess->rowCount();
    $allCategories=$qryAllCategoriess->fetchAll();  
?>