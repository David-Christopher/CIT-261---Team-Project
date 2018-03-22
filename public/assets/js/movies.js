function findMovie() {
	// Get the value from the search box
	var searchTitle = $("#title").val();
	console.log("Searching for: " + searchTitle);

	// Set up the parameters to send to the API
	var params = {s: searchTitle, apikey:"c214de2e"};

	// Use jQuery to make the get request
	$.get("https://www.omdbapi.com/", params, function(data, status){
		// For debugging purposes, make a note that we're back
		console.log("Results from API:")
		console.log(status);
    	console.log(data);

    	updateResults(data)
	});
}

function updateResults(data) {

	if (data.Search && data.Search.length > 0) {
		var resultList = $("#dataResults");
		resultList.empty();

		for (var i = 0; i < data.Search.length; i++) {
			var title = data.Search[i].Title;
			var poster = data.Search[i].Poster;
			resultList.append("<li class='title'><img src='" + poster + "' alt='" + title + "'><p>" + title + "</p></li>");
		} 
	} else {
			var resultList = $("#dataResults");
			resultList.empty();
			resultList.append("<li class='title'><p>Please check your title and resubmit your inquery</p></li>");
		}

}