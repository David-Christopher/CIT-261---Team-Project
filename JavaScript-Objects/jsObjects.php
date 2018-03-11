<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Objects</title>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <script src="js/myscripts.js"></script>
</head>
    <body>
        <div class="wrapper"><!--background image applied here-->
            <div class="page-content-container"><!--content container applied here-->
                <main>
                    <div id="sectionChangingColor">
                        <h1>Click Button Below</h1>
                        <p>The Book object contains an author, price, and the year  it was written.<br><br>
                        Once the button is clicked, a new book object will be set with "William Shakespeare", "30.00", "1594"; <br>
                        Although, it is overwritten by "Brandon Sanderson", "25.00", "2017", which is displayed as an alert. </p>
                        
                        <button id="newName" name="newName" onclick="newDetails();">Display Current Book Details</button> <br><br>

                        <form>
                            <input id="authorName" type="text" name="" placeholder="Enter Author Name" required>
                            <input id="bookPrice" type="number" name="" placeholder="Enter Book Price" min=".01" required>
                            <input id="bookYear" type="number" name="" placeholder="Enter Year Written" max="2018" required>
                            <input type="submit" name="newBook" value="Create New Book Details" onclick="newDetails();">

                        </form>

                    </div>
                </main>
                <footer>
                </footer>
            </div><!--end of content container tag-->
        </div>
    </body>
</html>