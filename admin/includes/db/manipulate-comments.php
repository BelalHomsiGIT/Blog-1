<?php    
    if( isset($_GET['action']) && isset($_GET['id']) 
        && !empty($_GET['action']) && !empty($_GET['id'])){        
            $id=intval($_GET['id']); 
            #switch between show,update and delete - for one specific post
            switch($_GET['action']){
                case 'show':
                    $showCommentQry = $connect->prepare("select * from posts where id='$id'");                    
                    $showCommentQry->execute();
                    $showCurrentComment = $showCommentQry->fetch();        
                    echo '<style type="text/css">
                            #detailCard {
                                display: block;
                            }
                            </style>';

                    $userCommId=$showCurrentComment['user_id'];
                    $getUserName = $connect->prepare("select username from users where id='$userCommId'");
                    $getUserName->execute();
                    $userName = $getUserName->fetch();
                    $usrName = $userName[0];

                    
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