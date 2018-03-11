var string = '{ "occupation":"Plumber", "name":"Chris", "age":43, "city":"Sutter Creek", "state":"CA", "company":"3D Plumbing"}';
var contractor = { "occupation":"Plumber", "name":"Chris", "age":43, "city":"Sutter Creek", "state":"CA", "company":"3D Plumbing"};

function jsonString(jsonString){
    var jsonString = JSON.stringify(contractor);

	document.getElementById("jsonOutput").innerHTML = jsonString + '<br><br>';
}

function jsonParse(jsonString){
	var list = JSON.parse(string);
	for(p in list){
		document.getElementById("jsonOutput").innerHTML += list[p] + '<br>';
	}
}

//Could add a user input to extract any part of the JSON object...
//
//