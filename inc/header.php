<?php
define('PAGE_HOME', 1);
define('PAGE_NEWS', 2);
define('PAGE_PROJECTS', 3);
define('PAGE_ABOUT', 4);

$pages = Array(
    'Home' => Array('index'=>PAGE_HOME, 'page'=>'index.php')
    ,
    'News' => Array('index'=>PAGE_NEWS,'page'=>'news.php'),
    'Projects' =>
        Array('index'=>PAGE_PROJECTS, 'page'=>'projects.php')
    ,
    'About Me' => Array('index'=>PAGE_ABOUT,'page'=>'about.php')
    );

function menu_code() {
    global $pages, $page_index;
    $ret = '<div class="topMenu">';

    foreach ($pages as $title=>$info) {
        if ($page_index == $info['index']) {            
            $ret .= '<a class="topMenuItem topMenuItemSel">'.$title.'</a>';
        } else {
            $ret .= "<a href=\"{$info['page']}\" class=\"topMenuItem\">$title</a>";
        }
    }

    $ret .= '</div>';
    return $ret;
}

function main_title_code() {
    return <<<EOF
            <div class="mainTitle">
                Jonathon Volkmar
            </div>
EOF;
}

function main_code($blocks) {
    $ret = '';


    $ret .= '<div style="background:black;padding-top:20px;">';

    //foreach ($blocks as $block=>$info) {
    for ($i=0;$i<count($blocks);$i++) {
        $block = $blocks[$i];
        if (!empty($block['title'])) {
            $ret .= '<div class="mainBlockTitle">'.$block['title'].'</div>';
        }
        if (!empty($block['html'])) {
            $ret .= '<div class="mainBlock">'.$block['html'].'<div style="clear:both"></div></div>';
        }
    }

    $ret .= '<div class="mainFooter">Design: Jonathon Volkmar, 2011</div></div>';

    return $ret;
}

function page_code($blocks) {
    $ret ='';
    
    $ret .= menu_code();

    $ret .= '<div class="main">';

    $ret .= main_title_code();
    $ret .= main_code($blocks);

    $ret .= '</div>';

    return $ret;

}

function get_random_filename($dir_path) {
    $dh = opendir($dir_path);
    $files = Array();

    while ($filename = readdir($dh)) {
        $files[] = $filename;
    }
    
    while ($file = $files[rand(0, count($files)-1)]) {
        if (substr($file, 0, 1) != '.') break; //don't allow hidden files.
    }
    return $file;
}

function rnd_bg() {
    return 'url(\'img/bg/'. get_random_filename('img/bg').'\')';
}
?>
