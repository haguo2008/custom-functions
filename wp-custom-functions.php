<?php
function mgrename_filename($filename) {
    $info = pathinfo($filename);
    $ext = empty($info['extension']) ? '' : '.' . $info['extension'];
    $name = basename($filename, $ext);
    return substr(md5($name), 0, 16) . $ext;
}
add_filter('sanitize_file_name', 'mgrename_filename', 10);