<div class="sidebar">
<ul>
	<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
	<li>
		<h2><?php _e('Categories'); ?></h2>
		<ul>
			<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
	</li>
</ul>
</div>