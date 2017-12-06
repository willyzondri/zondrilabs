<div id='post_content'>
<?php 
    if(have_posts()) : while(have_posts()) : the_post();
?>
    <article id='post-<?= the_id();?>' <?php post_class('posted');?>>
        <div class='the_thumbnails'>
            <?php the_post_thumbnail(); ?>
        <div>
        <div class='the_excerpt'>
            <header>
                <div class='waktu'>
                    <div class='wkt'>
                        <span class='tanggal'><?= the_time('d');?></span>
                        <span class='bulan'><?= the_time('M y');?></span>
                        <time class='none' datetime='<?= the_time('c');?>' pubdate><?= the_time('c');?></time>
                    </div>
                </div>
                <div class='judul'>
                    <h2><a href='<?= the_permalink(); ?>'><?= the_title(); ?></a></h2>
                </div>
            </header>
        </div>
    </article>
<?php 
    endwhile;
    endif;
?>
</div>