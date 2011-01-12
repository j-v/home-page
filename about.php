<? require_once('inc/header.php'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Jonathon Volkmar @ McGill</title>
        <link type="text/css" rel="stylesheet" href="main.css"/>
    </head>
    <body style="background-image: <?= rnd_bg() ?>">

        
        <?
        
        $page_index = PAGE_ABOUT;


        $blocks = Array(
            Array('title'=>'Bio',
                'html'=> '
                    <b>Jonathon David Volkmar</b> <br>
                    b. 1988, Saskatoon, SK <br><br>
                    <p>
                    Currently, I am a undergraduate student at McGill studying Computer Science.
                    My anticipated graduation date is in 2012. Programming has been a hobby of mine from the time
                    I started programming text-based games in BASIC on an old IBM PC,
                    to high school when I would create crude 2D shooters
                    to play over a network with friends, to now. Now, I am interested in
                    seriously advancing my skills in software
                    development. I am interested in such areas as: forms of human communication over the computer networks,
                    development of modern web applications,
                    general forms of client-server interaction, and ways of making sense of the immense
                    amount of data that is currently available through the internet.
                    You can look at some information on my projects <a href="projects.php">here</a>.
                    </p>
                    <p>
                    I transfered to McGill in September 2009, then beginning to pursue a degree in Computer Science. Prior to that,
                    I attended the University of Western Ontario, with a major in Music. I play the guitar, and I hope that
                    some day we can jam.
                    </p>
                    <p>
                    I grew up mostly in Brandon, Manitoba where I went to a small French Immersion High School.
                    </p>'
                )
        );

        echo page_code($blocks);

        ?>

        

    </body>
</html>
