<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class='main-wrapper'>
    <header id='main-header' class='wrapper'>
        <div class='container xx'>
            <div id='bloglogo'>                
                <?php if(!is_single()||!is_page){
                    echo ('<h1><a href="'.get_bloginfo('url').'" title="'.get_bloginfo('title').'">'.get_bloginfo('name').'</a></h1>');
                }else{ 
                    echo ('<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('title').'">'.get_bloginfo('name').'</a>');
                }?>
            </div>
            <nav id='topmenu'>
                <?php wp_nav_menu(array('location' => 'topmenu')); ?>
            </nav>    
        </div>
    </header>    
    <div class='clear'></div>