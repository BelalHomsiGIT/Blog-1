<?php
    $qryAllPosts = $connect->prepare('select * from posts');
    $qryAllPosts->execute();
    $numPosts=$qryAllPosts->rowCount();
    $allPosts=$qryAllPosts->fetchAll(); 
?>