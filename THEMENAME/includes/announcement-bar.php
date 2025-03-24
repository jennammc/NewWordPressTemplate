<?php       
    $page_title = get_the_title();      
    $show_announcement_bar = get_theme_mod( 'site_show_announcement_bar');      
    $copy = get_theme_mod( 'site_announcement_bar_copy');     
    $show_link = get_theme_mod( 'site_show_announcement_bar_link');       
    $link_url = get_theme_mod( 'site_announcement_bar_link_url');       
    $link_copy = get_theme_mod( 'site_announcement_bar_link_copy');
?>

<?php if($show_announcement_bar): ?>
    <div id="site-announcement-bar">
        <div class="copy">
            <?php echo  $copy; ?>
        </div>
        <?php if($show_link): ?>
            <div class="link">
                <a href="<?php echo  $link_url; ?>"><?php echo  $link_copy; ?></a>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>