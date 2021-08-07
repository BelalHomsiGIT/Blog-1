<?php
    include 'init.php';
    include 'includes/templates/navbar.php';
    include 'includes/db/statistics-queries.php';
    
?>
<!-- Contents by html-->
<h3 class="blogger">Blogger</h3>
<div id='main-dashboard'>       
    <div class="container-fluid">
        <h4 class="text-center mb-4">Dashboard</h4>
        <div class="status">
            <div class="row boxes">
                <div class="col-md-3">
                    <div class="box box1 d-flex justify-content-between align-items-center">
                        <i class="fas fa-users ico"></i>
                        <div class="details">
                            <h5><?php echo $usersCount ?></h5>
                            <span class="dashAnchor"><a href="users.php">Users</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box2 d-flex justify-content-between align-items-center">
                        <i class="fas fa-anchor ico"></i>
                        <div class="details">
                            <h5><?php echo $categoriesCount ?></h5>
                            <span class="dashAnchor"><a href="categories.php">Categoies</a></span>
                        </div>
                    </div>
                </div>              
                <div class="col-md-3">
                    <div class="box box3 d-flex justify-content-between align-items-center">
                        <i class="fas fa-envelope-open-text ico"></i>
                        <div class="details">
                            <h5><?php echo $postsCount ?></h5>
                            <span class="dashAnchor"><a href="posts.php">Posts</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box4 d-flex justify-content-between align-items-center">
                        <i class="fas fa-comments ico"></i>
                        <div class="details">
                            <h5><?php echo $commentsCount ?></h5>
                            <span class="dashAnchor"><a href="Comments.php">Comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
    include 'includes/templates/footer.php';
?>