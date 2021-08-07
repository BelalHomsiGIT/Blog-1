<?php 
    include 'init.php';
    include 'includes/templates/navbar.php';
    include 'includes/db/fetchAllCategories.php';
    include 'includes/db/manipulate-categories.php';
?>
<h3 class="blogger">Blogger</h3>
<div class="" id="management">
    <div class="container">
        <h4 class="text-center mb-4">Categories Management</h4>
        <div class="card main-card"> <!-- Card contain the table of all Categories 'start'-->
            <h5 class="card-header">All Categories <span class="badge bg-success"><?php echo $numCategories; ?></span> </h5>            
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

                    <?php if($numCategories>0){ # $numCategories>0 is true, at least one category
                        foreach ($allCategories as $category) {                                                 
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $category['id'] ?></th>
                                <td><?php echo $category['title'] ?></td>
                                <td><?php echo $category['description'] ?></td>                              
                                <td>                               
                                    <a  title="show" class="btn btn-info" 
                                        href="categories.php?action=show&id=<?php echo $category['id']; ?>">
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
                            echo '<tr><td colspan=6>Tehre are not any Categories !</td></tr>';
                        }
                    ?>
                </table>
                <!-- Table 'end' -->
                 <!-- Card for one specicific category 'start' -->
                 <div class="detail-card" id="detailCard">
                    <div class="card detcard" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 rounded-pill border-3 border border-success">About Category</h5>                                                
                            <p class="card-text">Category-ID: <span id="eachOne"><?php echo $showCurrentCategory['id']?></span></p>
                            <p class="card-text">Category-Title: <span id="eachOne"><?php echo $showCurrentCategory['title']?></span></p>
                            <p class="card-text">Category-Description: <span id="eachOne"><?php echo '<br>' . $showCurrentCategory['description']?></span></p>                                                        
                            <p class="card-text">Category-Posts: <span id="eachOne"><?php echo $currCtgryPstsCount?></span></p>                            
                            <a href="categories.php" onclick="javascript:hideDetails()" class="card-link btn btn-primary"><i class="fas fa-home"></i></a>                    
                        </div>                  
                    </div>
                </div> 
                <!-- Card for one specicific category 'end' -->    
                      
            </div>
        </div> <!-- Card contain the table of all Categories 'end'-->
    </div>
</div>

<?php
    include 'includes/templates/footer.php';  
?>