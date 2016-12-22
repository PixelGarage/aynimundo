<?php
$block_pictures = module_invoke('views', 'block_view', 'pictures-block');

?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<?php if ($page): ?>
		<div class="left_image">
			<p><strong><?php echo format_date($node->created, 'short'); ?></strong></p>
			<?php print render($block_pictures); ?>
		</div>
		<h1 class="title"><?php echo $title; ?></h1>
	<?php endif; ?>
	<?php if ($node->nid != 78 && in_array($view_mode, array('full', '2_columns')) && !$page): ?>
		<?php echo render($content['field_pictures']); ?>
		<header>
			<?php print render($title_prefix); ?>
				<h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
		</header>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
    	if (in_array($view_mode, array('full', '2_columns'))) {
    		hide($content['field_pictures']);
    	}
      // We hide the comments, tags and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      print render($content);
    ?>
  </div> <!-- /.content -->

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
