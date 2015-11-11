<div class="col-sm-4">
	<?php print $fields['field_image']->content;?>
</div>
<div class="col-sm-8">
	<h2><?php print $fields['title']->content?></h2>
	<p>
		<?php print $fields['body']->content?>
	<p>
		<a href="campaigns/<?php print  str_replace(" ","-", strtolower ($fields['title']->raw))?>" >read more</a>
	</p>
	<hr>
</div>


