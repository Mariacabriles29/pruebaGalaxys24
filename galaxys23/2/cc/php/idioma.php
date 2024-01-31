<?php
    $sector = "en";
    // unix, linux, mac
    if (DIRECTORY_SEPARATOR === '/') {
        $cur_dir = explode('/', getcwd());
        $index = array_search('geo', $cur_dir);
        $sector=$cur_dir[$index+1];
    }

    // on windows server
    if (DIRECTORY_SEPARATOR === '\\') {
        $cur_dir = explode('\\', getcwd());
        $index = array_search('geo', $cur_dir);
        $sector=$cur_dir[$index+1];
    }

    $lang = $sector;

?>