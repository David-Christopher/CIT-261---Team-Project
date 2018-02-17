<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 Teach : Team Activity</title>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <script src="js/myscripts.js"></script>
</head>
    <body>
        <div class="wrapper"><!--background image applied here-->
            <div class="page-content-container"><!--content container applied here-->
                <main>
                    <div id="sectionChangingColor">
                        <h1>Change the background color for this section by entering a color below.</h1>
                        <input type="text" id="clrName" placeholder="Red, Pink, #d3d3d3"><br/>
                        <input type="submit" value="Change Color" id="colorButton" onclick="displayColor()">
                    </div>

                    <div id="resizeImage">
                    <img id="imageSizing" src="images/resizingPic.jpg" alt="resizing pic from https://i.ytimg.com/vi/aXYtJB7Qslk/maxresdefault.jpg">
                        <div id="buttonPosition">
                            <input type="submit" value="Make Image Larger" id="resizeImageButton" onclick="largerImage()">
                            <input type="submit" value="Make Image Smaller" id="resizeImageButton" onclick="smallerImage()">
                            <input type="submit" value="Reset Size" id="resizeImageButton" onclick="normalImage()">
                        </div>        
                    </div>
                </main>
                <footer>
                </footer>
            </div><!--end of content container tag-->
        </div>
    </body>
</html>