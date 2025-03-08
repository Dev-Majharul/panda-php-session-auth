<?php 


function common_assets($type){
    if($type == 'css'){

    }elseif($type == 'js'){
       
    }elseif  ($type == 'header'){
        require_once('header.php');

    }elseif  ($type == 'footer'){
        require_once('footer.php');
    }
    elseif  ($type == 'navbar'){
        require_once('navbar.php');
    }
    
}
?>