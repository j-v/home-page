   <?
        require_once('inc/header.php');
        require_once('inc/news.php');

        $page_index = PAGE_HOME;

        $welcomeText =  <<<EOF

   <img src="img/meonroof.jpg" alt="Me on a roof" width="30%" style="float:left;display:inline"/>
                <div style="float:left;width:70%">
                <p>
                    Hello, and welcome to my personal home page.
                </p>
                <p>
                    Here you can check what's new with me, and have a look at my interests and projects, past and present.
                </p>
                <p>Currently I am an undergraduate student in Computer Science at McGill University. More about me <a href="about.php">here</a></p>
                <p>
                    If you would like to get in touch with me, please send me an <a href="mailto:jonathon.volkmar@mail.mcgill.ca">email</a>
                </p>
                </div>
EOF;
        $newsText = <<<EOF
        <p>Just made this site, hopefully there will be news to come</p>
EOF;
		$newsHtml = '';
		$max_news_items=5;
		for ($i=0; $i<$max_news_items && $i<count($news); $i++) {
			$item = $news[$i];
			$newsHtml .= '<h4><span style="float:right;font-size:0.6em">'.$item['date'].'</span><a href="news.php#'.$item['title'].'">'.$item['title'].'</a></h4>';
			$newsHtml .= format_news($item['html']); 
		}
		
		//if (count($news) > $max_news_items) {
			$newsHtml .= '<a href="news.php">View all news...</a>';		
		//}

        $blocks = Array(
            Array(
                'html'=> $welcomeText
                ),
            Array('title'=>'Lastest News', 'html'=>$newsHtml)
        );
        
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Jonathon Volkmar @ McGill</title>
        <link type="text/css" rel="stylesheet" href="main.css"/>
    </head>
    <body style="background-image: <?= rnd_bg()?>">

     <?=
        page_code($blocks);
        ?>

        
    </body>
</html>
