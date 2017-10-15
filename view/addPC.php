<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BYU-I Add asset</title>
        <meta name="viewport" content="width=device-widtch">
        <link href="/byu-i/css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        </header>
        <nav>
        </nav>
        <main>
            <div id="searchForm">
                <h1>Add asset</h1>
                <h4>(Please fill out all the fields)</h4>
                <form method="post" action="/byu-i/edit/">
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
                    <button type="submit">Add Asset</button>
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="insertAsset">
                </form>
                <a href="/byu-i/">Search for assets</a>

            </div>
            <div id="addMessage">
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
