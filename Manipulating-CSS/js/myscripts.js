
function displayColor() {
	var textColor = "clrName";
	var enteredColor = document.getElementById(textColor);
 	var divColor = "sectionChangingColor";
	var div = document.getElementById(divColor);

	var colorValue = enteredColor.value;
	div.style.backgroundColor = colorValue;
}


//JQuery --- Outside the Scope of the Class
///////////////////////////////////////////
$(document).ready(function() {
	//Click Me button toggle text
    $("#testButton").click(function () {
        $(this).text(function(i, displayClicked){
            return displayClicked === 'Click Me' ? 'Clicked!' : 'Click Me'
        })
    });

    //Click On/Off button toggle text
    $("#onOffButton").click(function () {
        $(this).text(function(i, On_Off){
            return On_Off === 'Click Off' ? 'Click On' : 'Click Off'
        })
    });

    //Fade in and out div
    $("#onOffButton").click(function() {
        $( "#blueSection" ).toggle( "highlight" );
    });
});
///////////////////////////////////////////
//JQuery --- Outside the Scope of the Class

