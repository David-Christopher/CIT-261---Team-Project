<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Code Topic</title>
    <script src="js/jsonExample.js"></script>
</head>
    <body>
        <div class="wrapper"><!--background image applied here-->
            <div class="page-content-container"><!--content container applied here-->
                <main>
                    <div>
                        <h1>JSON Parse and Stringify</h1>
                        <p>var contractor = { "occupation":"Plumber", "name":"Chris", "age":43, "city":"Sutter Creek", "state":"CA", "company":"3D Plumbing"};</p>
                        <p id="jsonOutput"></p>

                        <button onclick="jsonString()">Stringify the JSON Object</button>

                        <button onclick="jsonParse()">Parse the JSON Object</button>
                    </div>
                </main>
                <footer>
                </footer>
            </div><!--end of content container tag-->
        </div>
    </body>
</html>