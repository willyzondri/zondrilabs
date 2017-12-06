<?php get_header(); ?>
<div id="content_wrapper" class='container white'>
    <div class='white'>
        <?php include(TEMPLATEPATH.'/content/c_single.php'); //get_sidebar(); ?>
    </div>
    <div class='alignleft'>
        <?php previous_post_link(); ?>    
    </div>
    <div class='alignright'>
        <?php next_post_link(); ?>    
    </div>
</div>
<?php get_footer();?>