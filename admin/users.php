<?php 
    include 'init.php';
    include 'includes/templates/navbar.php';
    include 'includes/db/fetchAllUsers.php';
    include 'includes/db/manipulate-users.php';
?>
<h3 class="blogger">Blogger</h3>
<div class="" id="management">
    <div class="container">
        <h4 class="text-center mb-4">Users Management</h4>
        <div class="card main-card"> <!-- Card contain the table of all users 'start'-->
            <h5 class="card-header">All Users <span class="badge bg-success"><?php echo $numUsers; ?></span> </h5>            
            <div class="card-body c-body">
                <!-- Table 'start' -->
                <table class="table table-success table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Control</th>
                        </tr>
                    </thead>

                    <?php if($numUsers>0){ # $numUsers>0 is true, at least one user
                        foreach ($allUsers as $user) {                                                 
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $user['id'] ?></th>
                                <td><?php echo $user['username'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['role'] ?></td>
                                <td><?php echo $user['status'] ?></td>
                                <td>                               
                                    <a  title="show" class="btn btn-info" 
                                        href="users.php?action=show&id=<?php echo $user['id']; ?>">
                                        <i class="fas fa-eye"></i>
                                    </a>                                
                                    <a  title="edit" class="btn btn-primary" 
                                        href="#" 
                                        onclick="javascript:displayDetails()">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a  title="delete" class="btn btn-danger"                                         
                                        href="users.php?action=delete&id=<?php echo $user['id']; ?>">
                                        <?php  #$deleteFlag=1; ?>
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>                       
                        </tbody>
                    <?php
                            } #Clost foreach
                        }else{ # $numUsers>0 is false, no users
                            echo '<tr><td colspan=6>Tehre are not any users !</td></tr>';
                        }
                    ?>
                </table>
                <!-- Table 'end' -->
                <!-- Card for one specicific user 'start' -->
                <div class="detail-card" id="detailCard">
                    <div class="card detcard" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 rounded-pill border-3 border border-success">About User</h5>                                                
                            <p class="card-text">User-ID: <span id="eachOne"><?php echo $showCurrentUser['id']?></span></p>
                            <p class="card-text">User-Name: <span id="eachOne"><?php echo $showCurrentUser['username']?></span></p>
                            <p class="card-text">User-Role: <span id="eachOne"><?php echo $showCurrentUser['role']?></span></p>
                            <p class="card-text">User-Posts: <span id="eachOne"><?php echo $currUsrPstsCount?></span></p>
                            <p class="card-text">User-Comments: <span id="eachOne"><?php echo $currUsrCmntsCount?></span></p>
                            <a href="users.php" onclick="javascript:hideDetails()" class="card-link btn btn-primary"><i class="fas fa-home"></i></a>                    
                        </div>                  
                    </div>
                </div> 
                <!-- Card for one specicific user 'end' -->             
            </div>
        </div> <!-- Card contain the table of all users 'end'-->
    </div>
</div>

<script src="includes/assest/js/users.js"></script>
<?php
    include 'includes/templates/footer.php';  
?>