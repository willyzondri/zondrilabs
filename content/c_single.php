<div id='post_content'>
<?php 
    if(have_posts()) : while(have_posts()) : the_post();
?>
    <article id='post-<?= the_id();?>' <?php post_class();?>>
        <div class='the_thumbnails'>
            <?php the_post_thumbnail(); ?>
        <div>
        <div class='the_content'>
            <header>
                <div class='the_title'>
                    <h2>
                        <?php the_title();?>
                    </h2>
                </div>
                <div class='the_meta'>
                    <span class='none'><?php the_author(); ?></span>
                    <span class='none'><?php the_category(' '); ?></span>
                    <time class='tme' datetime='<?= the_time('c');?>' pubdate><?php the_time('d/m/Y'); ?></time>
                </div>
            </header>
            <div>
                <?php the_content();?>
            </div>
        </div>
    </article>
<?php 
    endwhile;
    endif;
?>
</div>