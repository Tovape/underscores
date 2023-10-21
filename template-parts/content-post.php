<?php if (is_home() || is_archive()) { ?>
	<p>Archive</p>
<?php } else if (is_single()) { ?>
	<p>Single</p>
<?php } ?>