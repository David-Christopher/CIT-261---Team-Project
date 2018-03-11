<!DOCTYPE html>
<html lang="en">
<head>

<title>DOM Manipulation Code Topic</title>

<script>
function getStyles() {
  var selectedDiv = document.getElementById("firstDiv");
  var textHeight = document.getElementById("heightText");
  var heightStyle = document.defaultView.getComputedStyle(selectedDiv, null).getPropertyValue("height");

  textHeight.value = heightStyle;

  var textWidth = document.getElementById("widthText");
  var widthStyle = document.defaultView.getComputedStyle(selectedDiv, null).getPropertyValue("width");

  textWidth.value = widthStyle;

  var textBackgroundColor = document.getElementById("colorText");
  var colorStyle = document.defaultView.getComputedStyle(selectedDiv, null).getPropertyValue("background-color");

  textBackgroundColor.value = colorStyle;
}

function setStyles() {
    var divElement = document.getElementById("styledDiv");
    while (divElement.firstChild) {
        divElement.removeChild(divElement.firstChild);
    }

    var firstDiv = document.createElement("div");
    firstDiv.setAttribute("id", "firstDiv");

    document.getElementById("styledDiv").appendChild(firstDiv);

    document.getElementById("firstDiv").style.height = document.getElementById("heightInput").value;
    document.getElementById("firstDiv").style.maxWidth = document.getElementById("widthInput").value;
    document.getElementById("firstDiv").style.backgroundColor =  document.getElementById("colorInput").value;
}

function changeText() {
    var p = document.getElementById("fontChange");

    function getRandInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomFont() {
      return `${getRandInt(0,50)}`;
    }

    p.setAttribute('style', `font-size: ${randomFont()}`+'pt');

    if (document.getElementsByClassName("fontChange") !== null) {
        var newp = document.getElementsByClassName("fontChange")
        
        for (var i = 0; i < newp.length; i++) {
            newp[i].setAttribute('style', `font-size: ${randomFont()}`+'pt');
         }
    }   
}

function insertText() {
    var newParagraph = document.createElement("li");
    newParagraph.setAttribute("class", "fontChange");

    var text = document.createTextNode("This is new text and it will change when you press the button below.");
    newParagraph.appendChild(text);

    var pDiv = document.getElementById("changingFont");
    pDiv.insertBefore(newParagraph, pDiv.childNodes[0]);
}

function setBorderWidth(width) {
  document.getElementById("img1").style.borderWidth = width + "px";
}

</script>

<style>
#firstDiv {
  margin-left: 10px;
  background-color: rgb(173, 216, 230); 
  height: 20px;
  max-width: 20px;
}

ul{
    list-style: none;
    padding: 0px;
}


</style>

</head>

<body>
<h1>DOM Manipulation</h1>
<h3>The blue box shape has properties that can be viewed or editted.</h3>
<div id="styledDiv">
    <div id="firstDiv">&nbsp;</div>
</div>

<form action="">
  <p>
    <button type="button" onclick="getStyles();">Get Current Style Details</button><br><br>
    Current Height<input id="heightText" type="text"><br><br>
    Current Width<input id="widthText" type="text"><br><br>
    Current Color<input id="colorText" type="text"><br><br>
  </p>
</form>

<form action="">
<h3>By clicking the button below, you will delete ( removeChild() )and create an element with your chosen styles.</h3>
  <p>
    New Height (Example => 100px)<input id="heightInput" type="text"><br><br>
    New Width (Example => 100px)<input id="widthInput" type="text"><br><br>
    New Color (Examples: Red, #dddddd, rgb(221, 221, 250)<input id="colorInput" type="text"><br><br>
    <button type="button" onclick="setStyles();">Set Style Details</button>
  </p>
</form>

<br><hr><br>

<ul id="changingFont">
    <li id="fontChange">This text will change when you press the button below.</li>
</ul>
<form>
  <p><input value="Change Text" type="button" onclick="changeText();" /></p>
  <p><input value="Add Text" type="button" onclick="insertText();" /></p>
</form>

<br><hr><br>

<p>
  <img id="img1"
       src="../Manipulating-CSS/images/resizingPic.jpg"
       style="border: 5px solid green;"
       width="100" height="100" alt="border test">
</p>

<form name="FormName">
  <input type="button" value="Make border 20px-wide" onclick="setBorderWidth(20);" />
  <input type="button" value="Make border 5px-wide"  onclick="setBorderWidth(5);" />
</form>

</body>
</html>