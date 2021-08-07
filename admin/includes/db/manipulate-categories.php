<?php    
    if( isset($_GET['action']) && isset($_GET['id']) 
        && !empty($_GET['action']) && !empty($_GET['id'])){        
            $id=intval($_GET['id']); 
            #switch between show,update and delete - for one specific category
            switch($_GET['action']){
                case 'show':
                    $showCategoryQry = $connect->prepare("select * from categories where id='$id'");                    
                    $showCategoryQry->execute();
                    $showCurrentCategory = $showCategoryQry->fetch();        
                    echo '<style type="text/css">
                            #detailCard {
                                display: block;
                            }
                            </style>';
                    $showCategNumPostsQry = $connect->prepare("select count(*) from posts where category_id='$id'");
                    $showCategNumPostsQry->execute();
                    $showCurrCategNumPosts = $showCategNumPostsQry->fetch();
                    $currCtgryPstsCount = $showCurrCategNumPosts[0];                
                    break;
                case 'delete':        
                    # code ...
                    break;
                                                           
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