<?php 
    include 'init.php';
    include 'includes/templates/navbar.php';
    include 'includes/db/fetchAllPosts.php';
    include 'includes/db/manipulate-posts.php';
?>
<h3 class="blogger">Blogger</h3>
<div class="" id="management">
    <div class="container">
        <h4 class="text-center mb-4">Posts Management</h4>
        <div class="card main-card"> <!-- Card contain the table of all Posts 'start'-->
            <h5 class="card-header">All Posts <span class="badge bg-success"><?php echo $numPosts; ?></span> </h5>            
            <div class="card-body c-body">
                <!-- Table 'start' -->
                <table class="table table-success table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>                      
                        <th scope="col">Control</th>
                        </tr>
                    </thead>

                    <?php if($numPosts>0){ # $numCategories>0 is true, at least one Post
                        foreach ($allPosts as $Post) {                                                 
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $Post['id'] ?></th>
                                <td><?php echo $Post['title'] ?></td>
                                <td><?php echo $Post['description'] ?></td>                              
                                <td>                               
                                    <a  title="show" class="btn btn-info" 
                                        href="posts.php?action=show&id=<?php echo $Post['id']; ?>">
                                        <i class="fas fa-eye"></i>
                                    </a>                                   
                                    <a  title="edit" class="btn btn-primary" href="#">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a  title="delete" class="btn btn-danger" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>                       
                        </tbody>
                    <?php
                            } #Clost foreach
                        }else{ # $numUsers>0 is false, no Categories
                            echo '<tr><td colspan=6>Tehre are not any Posts !</td></tr>';
                        }
                    ?>
                </table>
                <!-- Table 'end' --> 
                    <!-- Card for one specicific Post 'start' -->
                    <div class="detail-card" id="detailCard">
                    <div class="card detcard" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 rounded-pill border-3 border border-success">About Post</h5>                                                
                            <p class="card-text">Post-ID: <span id="eachOne"><?php echo $showCurrentPost['id']?></span></p>
                            <p class="card-text">Post-Category: <span id="eachOne"><?php echo $categTitle?></span></p>     
                            <p class="card-text">Created: <span id="eachOne"><?php echo date('D d-m-Y', strtotime($showCurrentPost['created_at']))?></span></p>
                            <p class="card-text">Updated: <span id="eachOne"><?php echo date('D d-m-Y', strtotime($showCurrentPost['updated_at']))?></span></p>
                            <p class="card-text">Post-Title: <span id="eachOne"><?php echo $showCurrentPost['title']?></span></p>
                            <p class="card-text">Post-Description: <span id="eachOne"><?php echo '<br>' . $showCurrentPost['description']?></span></p>                                                        
                            <p class="card-text">Post-Comments: <span id="eachOne"><?php echo $currPostCommsCount?></span></p>                            
                            <a href="posts.php" onclick="javascript:hideDetails()" class="card-link btn btn-primary"><i class="fas fa-home"></i></a>                    
                        </div>                  
                    </div>
                </div> 
                <!-- Card for one specicific Post 'end' --> 
                
            </div>
        </div> <!-- Card contain the table of all Categories 'end'-->
    </div>
</div>

<?php
    include 'includes/templates/footer.php';  
?>