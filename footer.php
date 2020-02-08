<!-- ▼ フッター : 開始-->
<footer class="l-footer">
    <div class="l-container">
        <p class="c-footer-description"><?php bloginfo( 'description'); ?></p>
        <a class="c-logo is-white" href="../">
            <div class="c-logo__image">
                <img src="<?php echo esc_url( get_theme_file_uri( 'images/logo.png' )); ?>" alt="SUNLABS">
            </div>
            <!-- <div class="c-logo__text"></div> -->
        </a>
    </div>
</footer>
<div class="c-copyright">
    <p>Copyright © 2019 <?php bloginfo( 'name'); ?> All Rights Reserved.</p>
</div>
<!-- ▲ フッター : 終了-->
<?php wp_footer(); ?>
</body>
</html>