<?php
    $qry1 = $connect->prepare('select count(*) from users');
    $qry1->execute();
    $users = $qry1->fetch();
    $usersCount = $users[0];

    $qry2 = $connect->prepare('select count(*) from categories');
    $qry2->execute();
    $categories = $qry2->fetch();
    $categoriesCount = $categories[0];

    $qry3 = $connect->prepare('select count(*) from posts');
    $qry3->execute();
    $posts = $qry3->fetch();
    $postsCount = $posts[0];

    $qry4 = $connect->prepare('select count(*) from comments');
    $qry4->execute();
    $comments = $qry4->fetch();
    $commentsCount = $comments[0];
?>