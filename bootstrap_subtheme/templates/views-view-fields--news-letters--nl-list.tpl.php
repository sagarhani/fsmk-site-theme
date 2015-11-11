<div class="col-sm-8" >
	<h2><?php print $fields['title']->content?></h2>
	<p>
		<?php print $fields['body']->content?>
	<p>
		<a  href="newsletters/<?php print  str_replace(" ","-", strtolower ($fields['title']->raw))?>" >read more</a>
	</p>
	<hr>
</div>
