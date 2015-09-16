<?php /*  
	Template Name: Index
	URI: http://lineshjose.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://lineshjose.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 11.07
	Author: Linesh Jose 
	Author URI: http://lineshjose.com
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready, white,  widgets
*/?>

	<?php get_header() ?>
	
	<?php if (have_posts()) : ?>
	<!-- Title -->
	<h1 class="page_title">
	<?php if (is_category()): ?><?php single_cat_title(); ?> 
	<?php elseif (is_day()): ?>Archive for "<?php the_time('F jS, Y'); ?>"
	<?php elseif (is_month()): ?>Archive for "<?php the_time('F, Y'); ?>"
	<?php elseif (is_year()): ?>Archive for "<?php the_time('Y'); ?>"
	<?php elseif (is_tag()): ?>Archive for "<?php single_tag_title(); ?> "
	<?php elseif (is_search()): ?>Resultados da pesquisa por &ldquo;<?php the_search_query(); ?>&rdquo;
	<?php elseif (is_author()): 
		if(get_query_var('author_name')) :
		$curauth = get_userdatabylogin(get_query_var('author_name'));
		else :
		$curauth = get_userdata(get_query_var('author'));
		endif;
		echo $curauth->display_name; ?>'s  Archives  <?php echo get_the_author() ;?>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>Arquivos de Curr&iacute;culos
	<?php else : ?>Bem-vindo ao <?php bloginfo('name');?>
	<?php endif; ?>
	</h1>
	<!-- end Title -->
	
	<ol class="post_list">
	<?php while (have_posts()) : the_post(); ?>
		<li <?php if (function_exists('post_class')) { post_class(); } else { echo 'class="post"'; } ?> id="post-<?php the_ID(); ?>">
			<h2 class="content_header">	<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
			<div class="link"><?php the_permalink() ?> - <?php comments_popup_link('0 Coment&aacute;rios', '1 Coment&aacute;rio', '% Coment&aacute;rio'); ?><?php edit_post_link('Editar',' - ',''); ?></div>
			<div class="excerpt"><span class="date alignleft"><?php the_time('d M Y ');?> <b> ...  &nbsp;</b></span><?php the_excerpt(); ?></div>
			<div class="clearall"></div>
			
		</li>
		<?php endwhile; ?>
	</ol>
	<?php  lj_pagination(); 	?>

	<?php else : ?>
	<div class="post">
	<h1>N&atilde;o foi encontrado nenhum curr&iacute;culo.</h1>
	<br />
	<div class="cont">
	<p>Sugest&atilde;o:</p>
		<ul>
			<li> Certifique-se de que todas as palavras est&atilde;o escritas corretamente.</li>
			<li> Tente palavras-chave diferentes.</li>
			<li> Tente palavras-chave mais gerais.</li>
			<li> Tente com menos palavras-chave.</li>
			</ul>
		</div>
	</div>
			<?php endif; ?>

	<?php get_sidebar() ?>
	<?php get_footer() ?>