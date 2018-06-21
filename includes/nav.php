<!-- include: nav -->

<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $active = 'class="active"';
    
    if (substr($url, -1) == '/' || strpos($url, 'index')) {
        $url .= 'home';
    }
    
    function activeIf($pageName) {
        global $url;
        global $active;
        if (strpos($url, $pageName)) {
            return $active;
        }
    }
?>

<nav id="main-nav">
    <a class="nav-logo" href="/"><img alt="arithmetica" src="images/arithmetica-h-white-yellow.svg"></a>
    <ul>
        <li <a <?php echo activeIf('home'); ?>>
            <a href="/">About</a>
        </li>
        <li <a <?php echo activeIf('timeline'); ?>>
            <a href="/timline.php">Timeline</a>
        </li>
        <li>
            <a target="_blank" href="https://github.com/arithm3tica">GitHub</a>
        </li>
        <li>
            <a class="button" href="https://arithmetica.network/contribute">Start Contributing</a>
    </ul>
</nav>

<!-- /include: nav -->