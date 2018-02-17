function showRows() {
	var hiddenA = document.getElementById("invisibleRowA");
	hiddenA.style.display = hiddenA.style.display ==  "inline-block" ? "none" : "inline-block";

	var hiddenB = document.getElementById("invisibleRowB");
	hiddenB.style.display = hiddenB.style.display ==  "inline-block" ? "none" : "inline-block";

	var hidden = document.getElementById("invisibleSeperator");
	hidden.style.display = hidden.style.display ==  "inline-block" ? "none" : "inline-block";
}