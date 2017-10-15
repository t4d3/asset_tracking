<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BYU-I Asset search</title>
        <meta name="viewport" content="width=device-widtch">
        <link href="/asset_tracking/css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        </header>
        <nav>
        </nav>
        <main>
            <div id="searchForm">
                <h1>Asset search</h1>
                <h4>(At least one field)</h4>
                <form method="post" action="/asset_tracking/">
                    <input type="text" placeholder="Asset Tag" name="asset_tag" id="aet_tag">
                    <input type="text" placeholder="Model"     name="model"     id="model">
                    <select name="building">
                        <option value=''>Building</option>
                        <option value='ROM'>Romney</option>
                        <option value='AUS'>Austin</option>
                        <option value='STC'>Science & Technology Center</option>
                        <option value='MCK'>MCK library</option>
                    </select>
                    <input type="text" placeholder="Room"      name="room"      id="room">
                    <input type="text" placeholder="Year"      name="year"      id="year">
                    <button type="submit">Search</button>
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="query">
                </form>
                <a href="/asset_tracking/edit?action=insert">Add computer</a>

            </div>
            <div id="searchResults">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
