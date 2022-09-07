<nav>
    <a class="<?php
    if ($path_parts['filename'] == "home"){
        print 'activePage';
    }
    ?>" href="home.php">Home</a>
    <a class="<?php
    if ($path_parts['filename'] == "portfolio"){
        print 'activePage';
    }
    ?>" href="portfolio.php">Portfolio</a>
    <a class="<?php
    if ($path_parts['filename'] == "about-me"){
        print 'activePage';
    }
    ?>" href="about-me.php">About Me</a>
    <a class="<?php
    if ($path_parts['filename'] == "feedback"){
        print 'activePage';
    }
    ?>" href="feedback.php">Feedback</a>
</nav>

