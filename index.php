<?php get_header(); ?>
<div id="content_wrapper" class='container white'>
    <div class='white'>
        <?php include(TEMPLATEPATH.'/content/c_index.php'); ?>
    </div>
    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>
<?php get_footer();?>