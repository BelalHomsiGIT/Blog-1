<?php
    $qryAllComments = $connect->prepare('select * from comments');
    $qryAllComments->execute();
    $numComments=$qryAllComments->rowCount();
    $allComments=$qryAllComments->fetchAll();   
?>