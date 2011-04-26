<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage 1up_talent
 * @since 1up talent 1.0
 */

get_header(); ?>
<?php
  $container_class = "one-column";
  if ( have_posts() )
    the_post();
    $pic = get_post_meta($post->ID, 'left-pic', true);
    if ($pic)
      $container_class .= " left-pic";
      $style = "style='background: url(". $pic . ") no-repeat left top'";
    end;
    rewind_posts();
  end;
?>
		<div id="container" class="<?php echo $container_class; ?>" <?php echo $style; ?> >
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
