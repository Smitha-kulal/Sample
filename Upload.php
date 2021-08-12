<?php

if(isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('txt', 'jpg', 'enc', 'dec');

    if(in_array($file_ext, $allowed)) {
        if($file_error === 0) {
            if($file_size <= 2097152) {
                $file_destination = 'C:/Users/Sony/Dropbox/' . $file_name;

                if(move_uploaded_file($file_tmp, $file_destination)) {
                    echo "<script>window.alert('File uploaded successfully!')
                    window.open('Admin_Page3.php','_self')</script>";
                }
            }
        }
    }

}

?>