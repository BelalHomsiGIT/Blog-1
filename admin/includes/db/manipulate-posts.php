<?php    
    if( isset($_GET['action']) && isset($_GET['id']) 
        && !empty($_GET['action']) && !empty($_GET['id'])){        
            $id=intval($_GET['id']); 
            #switch between show,update and delete - for one specific post
            switch($_GET['action']){
                case 'show':
                    $showPostQry = $connect->prepare("select * from posts where id='$id'");                    
                    $showPostQry->execute();
                    $showCurrentPost = $showPostQry->fetch();        
                    echo '<style type="text/css">
                            #detailCard {
                                display: block;
                            }
                            </style>';

                    $categPostId=$showCurrentPost['category_id'];
                    $getPostCategoryName = $connect->prepare("select title from categories where id='$categPostId'");
                    $getPostCategoryName->execute();
                    $categoryTitle = $getPostCategoryName->fetch();
                    $categTitle = $categoryTitle[0];

                    $showPostNumCommentsQry = $connect->prepare("select count(*) from comments where post_id='$id'");
                    $showPostNumCommentsQry->execute();
                    $showCurrPostNumComments = $showPostNumCommentsQry->fetch();
                    $currPostCommsCount = $showCurrPostNumComments[0];                
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