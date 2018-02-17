
function displayColor() {
	var textColor = "clrName";
	var enteredColor = document.getElementById(textColor);
 	var divColor = "sectionChangingColor";
	var div = document.getElementById(divColor);

	var colorValue = enteredColor.value;
	div.style.backgroundColor = colorValue;
}

function largerImage() {
    if (document.getElementById("imageSizing").style.width < "51%"){
        document.getElementById("imageSizing").style.width = "75%";
        return;
    }
    if (document.getElementById("imageSizing").style.width < "76%"){
        document.getElementById("imageSizing").style.width = "95%";
        return;
    }
    if (document.getElementById("imageSizing").style.width < "99%"){
        document.getElementById("imageSizing").style.width = "100%";
        return;
    }
}

function smallerImage() {
    if (document.getElementById("imageSizing").style.width == "100%"){
        document.getElementById("imageSizing").style.width = "95%";
        return;
    }
    if (document.getElementById("imageSizing").style.width == "95%"){
        document.getElementById("imageSizing").style.width = "75%";
        return;
    }
    if (document.getElementById("imageSizing").style.width == "75%"){
        document.getElementById("imageSizing").style.width = "50%";
        return;
    }
    if (document.getElementById("imageSizing").style.width == "50%"){
        document.getElementById("imageSizing").style.width = "25%";
        return;
    }
    if (document.getElementById("imageSizing").style.width == "25%"){
        document.getElementById("imageSizing").style.width = "20%";
        return;       
    }
}

function normalImage() {
    document.getElementById("imageSizing").style.width = "50%";
}