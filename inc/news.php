<?
//to create a news post, add an item to the **beginning** of the $news array

$news = Array(
	Array( 'date' => 'January 7th, 2011',
			 'title' => 'First post',
			 'html' => <<<EOF
	Thanks for visiting my home page! 
	News about projects and other development will be posted here as news comes up.
	
	Happy 2011!

	-J	
EOF
		)
);

function format_news($str) {
	$pat = '/\n\s*?\n/'; //to elimate all 2 consecutive newlines
	$rep = '<br><br>'; //replace with 2 html newlines
	
	return '<p>'.preg_replace($pat,$rep,$str).'</p>';
	
	//return '<p>'.str_replace("\n\n",'<br>',$str).'</p>';
}

?>