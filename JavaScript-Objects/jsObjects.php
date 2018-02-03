<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 Teach : Team Activity</title>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <script src="js/myscripts.js"></script>
</head>
    <body>
        <div class="wrapper"><!--background image applied here-->
            <div class="page-content-container"><!--content container applied here-->
                <main>
                    <div id="sectionChangingColor">
                        <h1>Choose a Character</h1>
                        <p>Choose an option from the drop down menu to change the character name. This interacts with different JavaScript Objects and displays it here:</p>
                        <p id="display"></p>
                        <select name="newName" onchange="newName(this.value);"> 
                          <option value="">Choose An Option</option>
                          <option value="optionA">John Doe</option>
                          <option value="optionB">Mary Jane</option>
                          <option value="optionC">Bob Dillian</option>
                          <option value="optionD">Chris David</option>
                        </select>
                    </div>
                    </div>
                </main>
                <footer>
                </footer>
            </div><!--end of content container tag-->
        </div>
    </body>
</html>