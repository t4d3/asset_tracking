<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BYU-I Asset edit</title>
        <meta name="viewport" content="width=device-widtch">
        <link href="/asset_tracking/css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        </header>
        <nav>
        </nav>
        <main>
            <h1>Asset search</h1>
            <h4>(Here's you data)</h4>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </main>
        <footer>
        </footer>
    </body>
</html>
