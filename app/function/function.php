<?php
function uploadImage($image)
{
    $image_name = date('dmy_H_s_i');
    $ext = strtolower($image->getClientOriginalExtension());
    $image_full_name = $image_name . '.' . $ext;
    $upload_patch = 'public/media/';
    $image_url = $upload_patch . $image_full_name;
    $success = $image->move($upload_patch, $image_full_name);
    return $image_url;
}
?>
