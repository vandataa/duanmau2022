<?php
    $upload_dir = 'test/';
    $upload_file = $upload_dir.$_FILES['file']['name'];
    $error  = [];
    $ar_allow = array('png','jpg','jepg','gif');
    $type = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    if(!in_array($type,$ar_allow)){
        $error['type']="Ban can nhap file anh";
    }if(empty($error)){
        if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file)){
            echo "upload file thanh cong";;
        }else{
            echo "upload file ko thanhf cong";
        }
    }
  
    
?>