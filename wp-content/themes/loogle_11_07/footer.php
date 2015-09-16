<?php /*
 Template Name: Footer
 URI: http://lineshjose.com/
 Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://lineshjose.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
 Version: 11.07
 Author: Linesh Jose
 Author URI: http://lineshjose.com
 Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready, white,  widgets
 */
?>
   <div id="footer">
		<ul>
		<li><a href="<?php bloginfo('url') ?>">Home</a></li>
		<?php wp_list_pages('title_li=&depth=1'); ?>
        </ul>
<small>
	<p>
		<a href="<?php bloginfo('url'); ?>" title="<?php _e(get_bloginfo('name'), 'personal'); ?>"><?php _e(get_bloginfo('name'), 'personal'); ?></a>
		<?php _e('is powered by', 'theme'); ?>
		<a href="http://www.rebelk.com.br" title="Powered by Rebelk Gestão de Conteúdo <?php bloginfo('version'); ?>, state-of-the-art semantic personal publishing platform">Rebelk Gestão de Conteúdo <?php bloginfo('version'); ?></a>
		<?php _e(' and delivered to you in ');
			timer_stop(1);
			_e(' seconds using ');
			echo $wpdb -> num_queries;
			_e(' queries.');
		?>	
</small>
<br />
	<p>
		Desenvolvido pela <a href="http://rebelk.com.br/" target="_blank"> Rebelk - Soluções em Software e Internet. (15) 3017-7225 - <a href="mailto:comercial@Rebelk.com.br">comercial@rebelk.com.br</a> - Sorocaba - SP
	</p>
	<br />
	<br/>
	</div>
	</div>

<?php wp_footer(); ?>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
	var sc_project = 7450696;
	var sc_invisible = 1;
	var sc_security = "da240e0e"; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="vBulletin
statistics" href="http://statcounter.com/vbulletin/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/7450696/0/da240e0e/1/"
alt="vBulletin statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>
</html>