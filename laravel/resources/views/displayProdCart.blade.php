<?php

$dir = "Produits/*.jpg";
$images = glob( $dir );

foreach( $images as $image ):
    echo "<div class='displayprod'>
	<img src='" . $image . "', class='prodpic' />
		<div class='price'> 150€ </div>
		<div class='description'>
			Foot control and protection with active comfort provided through a stable chassis ...
		</div>
		<button>Delete Article</button>
	</div>";
endforeach;

?>