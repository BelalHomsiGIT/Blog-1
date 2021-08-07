<?php    
    #if(!isset($deleteFlag)){ $deleteFlag=0;}
    if( isset($_GET['action']) && isset($_GET['id']) 
        && !empty($_GET['action']) && !empty($_GET['id'])){        
            $id=intval($_GET['id']); 
            #switch between show,update and delete - for one specific user
            switch($_GET['action']){
                case 'show':
                    #fetch all columns for specific user by id
                    $showUserQry = $connect->prepare("select * from users where id='$id'");                    
                    $showUserQry->execute();
                    $showCurrentUser = $showUserQry->fetch();                     
                    #show the detail card by display attribute       
                    echo '<style type="text/css">
                            #detailCard {
                                display: block;
                            }
                            </style>';
                    #fetch the number posts which user created them                    
                    $showUserNumPostsQry = $connect->prepare("select count(*) from posts where user_id='$id'");
                    $showUserNumPostsQry->execute();
                    $showCurrUserNumPosts = $showUserNumPostsQry->fetch();
                    $currUsrPstsCount = $showCurrUserNumPosts[0];
                    #fetch the number comments which user created them 
                    $showUserNumCommentsQry = $connect->prepare("select count(*) from comments where user_id='$id'");
                    $showUserNumCommentsQry->execute();
                    $showCurrUserNumComments = $showUserNumCommentsQry->fetch();
                    $currUsrCmntsCount = $showCurrUserNumComments[0];
                    break;
                case 'delete':        
                    #if(isset($deleteFlag) && $deleteFlag == 1){             
                    $delUserQry = $connect->prepare("delete from users where id='$id'");
                    $delUserQry->execute();
                    $deleteFlag = 0;
                    header("Location: https://localhost/blog/admin/users.php");                  
                    break; 
                    #}else{
                     #   break;
                    #}
                                                           
                case 'update':
                    # code ...
                    break;
                default:
                    # code ...
            } #close switch                
    }else{
        echo '<style type="text/css">
                #detailCard {
                    display: none;
                }
                </style>';
    }
?>