<?php get_header(); ?>
<div id="left">
<div align="left" style="padding:10px;padding-left:0;">
<script type="text/javascript">
/* <![CDATA[ */
function affiliateLink(str){ str = unescape(str); var r = ''; for(var i = 0; i < str.length; i++) r += String.fromCharCode(2^str.charCodeAt(i)); document.write(r); }
affiliateLink('%3Ec%22jpgd%3F%20jvvr8--uuu%2Cvgzv/nkli/cfq%2Camo-%3Dpgd%3F%3B2407%20%3C%3Ekoe%22qpa%3F%20jvvr8--uuu%2Cvgzv/nkli/cfq%2Camo-kocegq-vgzv%5Dnkli%5Dcfq%5DC%5D64%3Az42%2Cekd%20%22%60mpfgp%3F%202%20%22cnv%3F%20Vgzv%22Nkli%22Cfq%20%3C%3E-c%3C');
/* ]]> */
</script>
</div>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="entry">
<div class="post" id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<p><?php the_time('F jS, Y') ?> <?php the_author() ?></p>

				
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php if ( function_exists('the_tags') ) { the_tags('<p>Tags: ', ', ', '</p>'); } ?>
				
<p>Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
</div>
		<?php endwhile; ?>


			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>


	<?php else : ?>
<div class="entry">
		<h2>Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		
</div>
	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
