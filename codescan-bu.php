<!DOCTYPE html>
<html lang='sv'>

<head>
    <meta charset='utf-8'>
    <title>codescan.php</title>

    <style>
    a[target="_blank"]::after {
        content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==);
        margin: 0 3px 0 5px;
    }

    .prettyprint ol.linenums>li {
        list-style-type: decimal;
    }
    </style>

    <script src='https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js'></script>
</head>

<body>
    <?php
    $dirEntries = scandir(".");     

    foreach ($dirEntries as $dirEntry) {

        $filepath = realpath("./$dirEntry");
        
        if (is_file($filepath) && $dirEntry != "codescan.php") {
            
            $ext = strtolower(pathinfo($dirEntry, PATHINFO_EXTENSION));

            echo "<p>";
            echo "<a href='$dirEntry' target='_blank'><b>$dirEntry</b></a>";
            
            if (in_array($ext, ["php", "html", "css", "js", "ts", "c", "cpp", "cs", "java", "py"])) {
                $code = file_get_contents("./$dirEntry", true);
                echo "<pre class='prettyprint linenums' style='tab-size: 4'>";
                echo htmlspecialchars($code);
                echo "</pre>";
            }

            echo "</p>";
        }      
    }
    ?>
</body>

</html>