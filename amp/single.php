<!DOCTYPE html>
<html amp lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php do_action('amp_post_template_head', $this); ?>
    <style amp-custom>
        <?php $this->load_parts(array('style')); ?>
    </style>
</head>
<body>
<header>
<div class="container">
    <div class="site">
    <a href="<?php echo $this->get('home_url'); ?>">
    <?php if (has_site_icon()): ?>
        <amp-img src="<?php site_icon_url('180'); ?>"
        alt="" width="42" height="42"></amp-img>
    <?php endif; ?>
    <?php echo $this->get('blog_name'); ?>
    </a>    
    </div>
</div>
</header>
<div class="container">
<article class="article">
<div class="a-categories">
<?php echo get_the_category_list('', '', $this->ID); ?>
<?php echo get_the_tag_list('<ul><li>', '</li><li>', '</li></ul', $this->ID); ?>
</div>
<h1><?php echo $this->get('post_title'); ?>
<amp-img src="<?php echo get_template_directory_uri(); ?>/amp/amp-icon.png" alt="AMP" width="30" height="30"></amp-img>
</h1>
<div class="a-date">
<span class="fa fa-clock-o"></span>
<!-- datetime 検索エンジン向け -->
<time datetime="<?php echo date('c', $this->get('post_publish_timestamp')); ?>">
投稿:
<?php echo date('Y/m/d', $this->get('post_publish_timestamp')); ?>
</time>
<?php if (date('Ymd', $this->get('post_modified_timestamp')) > date('Ymd', $this->get('post_publish_timestamp'))): ?>
<time datetime="<?php echo date('c', $this->get('post_modified_timestamp')); ?>">
更新:
<?php echo date('Y/m/d', $this->get('post_modified_timestamp')); ?>
</time>
<?php endif; ?>
</div>
<?php $fimg = $this->get('featured_image'); echo $fimg['amp_html']; ?>
<?php echo $this->get('post_amp_content'); ?>
</article>
</div>
<div class="container">
<amp-img src="<?php echo get_template_directory_uri(); ?>/amp/amp-footer.png" alt="" width="1000" height="217" layout="responsive"></amp-img>
</div>
<footer>
<div class="container">
    <div class="copyright">
    ©︎ <?php echo $this->get('blog_name'); ?>
    </div>
</div>
</footer>
<?php do_action('amp_post_template_footer', $this); ?>
</body>
</html>
