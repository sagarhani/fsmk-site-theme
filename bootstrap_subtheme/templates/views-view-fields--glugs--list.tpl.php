<div class="col-sm-6 col-md-4">
	<div class="thumbnail">	
		<?php print $fields['field_image']->content;?>
		<div class="caption">
			<h3><?php print $fields['title']->content?></h3>
			<p> <?php print $fields['body']->content?></p>
			<p>
				<a href="glugs/<?php print  str_replace(" ","-", strtolower ($fields['title']->raw))?>" >read more</a>
			</p>
		</div>
	</div>
</div>
