<?
        require_once('inc/header.php');
        $page_index = PAGE_PROJECTS;


        $blocks = Array(
            Array(//'title'=>'Projects',
                'html'=> '<p>Here are a few projects I have been involved with in the past while:</p>'
                ),
            Array('title'=>'<a name="advanced_im"></a>Avanced Hierarchical Instant Messenger',
                'html'=> '<p><i>A.k.a.</i> E-HIMS (Encapsulated Hierarchical Instant Messenger), kind of like a hybrid
                    between an internet forum and a "traditional" instant messenger. This project is under the
                    supervision of <a href="http://people.mcgill.ca/animesh.animesh/">Asst. Prof. Animesh</a> of the Desautels Faculty of Management at McGill. It is developed
                    as a modern web application, and the back end is programmed in <a href="http://nodejs.org">
                    node.js</a>, a recently released
                    server-side JavaScript framework.
                    </p>'
                ),
            Array('title'=>'<a name="sitescraper"></a>SiteScraper',
                'html'=>'<p>The development of a web robot to crawl an entire site and store all data of interest
                    to a database in the backend. This project is under the
                    supervision of Asst. Prof. Animesh of the Desautels Faculty of Management at McGill. Parsing of HTML documents is
                    done with a combination of HTML tag parsing and extensive
                    use of regular expressions. Though this project was done to obtain data from a particular site,
                    I designed the application to allow to be programmed to "scrape" other sites by passing in
                    different parameters through a web UI.
                    </p>'),
            Array('title'=>'<a name="softwareforacause"></a>Software for a Cause 2010',
                'html'=>'<p>This project was done as a special project in the course COMP 303, Software Development.
                    In co-operation with Cystic Fibrosis Canada and IBM, the development of a "goal tracker" infographic
                    creation application, deployed as a Facebook application. The code is hosted by Google AppEngine
                    and extensive use of Google and Facebook\'s API\'s is made. Coming up early 2011, the code is to
                    be released under an open source license (EPL).
                    </p>'),
            Array('title'=>'<a name="infocubed"></a>Projects at Infocubed',
                'html'=>'<p>I have worked at <a href="http://www.infocubed.com">Infocubed</a> in Montreal since February 2010, working primarily on two projects,
                    programming in the .NET framework:</p>
                    <b><a name="infocubed_xml"></a>XML Authoring Tool</b>
                    <p>An add-in for Micrsoft Word for document creation according to XML schemas.
                    Allows editing of files in XML format in a familiar, user-friendly environment.</p>
                    <b>Mapping Tool<a name="infocubed_maps"></a></b>
                    <p>A tool for associating data-sets with geographical maps, and displaying an
                    appropriate visual representation.</p>'),
            Array('title'=>'<a name="fash-art"></a>Fash-Art.com <a href="http://fash-art.com" style="font-size:0.6em">[link]</a>',
                'html'=>'<p>I worked as web developer for Fash-Art Inc., a small start-up project aiming to create
                    an online social community for the fashion, art and design audience. While there, I programmed
                    an RSS/Atom feed aggregator to generate content for the website, integrated the site with Facebook by
                    implementing the Open Graph Protocol and enabling "Single Sign-on", and performed various other
                    enhancements and administrative tasks. Programming was in PHP, JavaScript, MySQL, CSS, HTML, etc.</p>')
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

        <?

        echo page_code($blocks);

        ?>


    </body>
</html>
