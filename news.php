<?
        require_once('inc/header.php');
        require_once('inc/news.php');
        $page_index = PAGE_NEWS;
        $entries_per_page = 5;
        $num_pages = floor(count($news) / $entries_per_page) + 1;
		
			
			$newspage = $_GET['page'];
			if (!is_numeric($newspage)) $newspage = 0;
			
			
			$title_html = '<h3>All News <span style="font-size:0.7em;float:right;"> Page '.($newspage+1).' ';
			if ($newspage > 0) {
				$title_html .= '<a href="news.php?page='.($newspage-1).'"> Newer</a>';
			}
			if ($newspage < $num_pages-1) { 
				$title_html .= '<a href="news.php?page='.($newspage+1).'"> Older</a>';
			}
			$title_html .= '</span>';


        $blocks = Array(
            Array('title'=>$title_html
                )
        );
        
        for ($i = $newspage * $entries_per_page; $i<count($news) && $i < $newspage * $entries_per_page + $entries_per_page; $i++) {
        		$item = $news[$i];
        		$blocks[] = Array('title' => '<a name="'.$item['title'].'"></a><span style="font-size:0.8em;float:right"><i>'.$item['date'].'</i></span>'.$item['title'],
        								'html' => format_news($item['html'])
        								);
        };
        ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Jonathon Volkmar @ McGill</title>
        <link type="text/css" rel="stylesheet" href="main.css"/>
    </head>
    <body style="background-image: <?= rnd_bg()?>">

        <?

        echo page_code($blocks);

        ?>


    </body>
</html>
