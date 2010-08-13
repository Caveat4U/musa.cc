<!--<div id="categories">
    <h3 class="module-title">Categories</h3>
    <ul class="fix">
        <?php wp_list_categories("&orderby=name&show_count=1&title_li="); ?>
    </ul>
</div>
   
 <div id="middle-widgets" class="fix">
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - Shared') ) : ?>
        <?php else: ?>
        <h3 class="module-title">Configure Widgets</h3>
		<p class="sidebar-desc">The Unstandard theme utilizes WordPress widgets to populate the main sidebar, single post sidebars, and shared foote area of a page. To remove this message, visit your Admin Dashboard to configure your site widgets. Customize this area by selecting widgets for the 'Footer - Shared' zone.</p>
        <?php endif; ?>
    </div>
-->
    <div id="footer">
        <div class="footer-box">
            <p class="titulo">Sobre nós:</p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">O MuSA</a></p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">Manifestinho</a></p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">Na imprensa</a></p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">Endereço</a></p>            
        </div>        
        
        <div class="footer-box">
            <p class="titulo">Acompanhe:</p>
            <p class="footer-item"><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">Lista de e-mail</a></p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">Wiki</a></p>
        </div>

        <div class="footer-box">
            <p class="titulo">Entre em contato:</p>
            <p class="footer-item"><a href="<?php echo get_settings('home'); ?>/">contato@musa.cc</a></p>
        </div>

        <div id="licenca">
            <p class=" footer-item"><a href="http://sam.zoy.org/wtfpl/">MuSA @ Copyright: Do What The Fuck You Want To Public License</a></p>
        </div>
    </div>

</div>
<?php wp_footer(); ?>
</body>
</html>