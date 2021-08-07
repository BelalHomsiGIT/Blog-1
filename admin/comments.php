<?php 
    include 'init.php';
    include 'includes/templates/navbar.php';
    include 'includes/db/fetchAllComments.php';
    include 'includes/db/manipulate-comments.php';
?>
<h3 class="blogger">Blogger</h3>
<div class="" id="management">
    <div class="container">
        <h4 class="text-center mb-4">Comments Management</h4>
        <div class="card main-card"> <!-- Card contain the table of all Comments 'start'-->
            <h5 class="card-header">All Comments <span class="badge bg-success"><?php echo $numComments; ?></span> </h5>            
            <div class="card-body c-body">
                <!-- Table 'start' -->
                <table class="table table-success table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Comment</th> 
                        <th scope="col">Post-Id</th>
                        <th scope="col">User-ID</th>                                             
                        <th scope="col">Control</th>
                        </tr>
                    </thead>

                    <?php if($numComments>0){ # $numComments>0 is true, at least one Comment
                        foreach ($allComments as $Comment) {                                                 
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $Comment['id'] ?></th>
                                <td><?php echo $Comment['comment'] ?></td>
                                <td><?php echo $Comment['post_id'] ?></td>                              
                                <td><?php echo $Comment['user_id'] ?></td>                                                                                            
                                <td>                               
                                    <a  title="show" class="btn btn-info" 
                                        href="comments.php?action=show&id=<?php echo $Comment['id']; ?>">
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
                            <h5 class="card-title text-center mb-2 rounded-pill border-3 border border-success">About Comment</h5>                                                
                            <p class="card-text">Comment-ID: <span id="eachOne"><?php echo $showCurrentComment['id']?></span></p>
                            <p class="card-text">User-Name: <span id="eachOne"><?php echo $usrName?></span></p>     
                            <p class="card-text">Created: <span id="eachOne"><?php echo date('D d-m-Y', strtotime($showCurrentComment['created_at']))?></span></p>
                            <p class="card-text">Updated: <span id="eachOne"><?php echo date('D d-m-Y', strtotime($showCurrentComment['updated_at']))?></span></p>                                                        
                            <a href="comments.php" onclick="javascript:hideDetails()" class="card-link btn btn-primary"><i class="fas fa-home"></i></a>                    
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