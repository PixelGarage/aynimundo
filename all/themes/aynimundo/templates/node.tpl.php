<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<?php if ($page): ?>
		<div class="left_image">
			<?php print render(module_invoke('views', 'block_view', 'pictures-block')); ?>
		</div>
		<h1 class="title"><?php echo $title; ?></h1>
	<?php else: ?>
		<?php if ($node->type == 'news'): ?>
			<?php echo render($content['field_pictures']); ?>
		<?php endif; ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
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
