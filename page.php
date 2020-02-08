<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-sm">
            <?php if(have_posts() ) : //投稿が１件以上あれば ?>
                <?php while(have_posts() ) : //投稿の表示がある間ループ　?>
                <?php the_post(); //データ１件を取り出す ?>
                <article <?php post_class(); ?>>
                    <h1 class="c-post__title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>    
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>