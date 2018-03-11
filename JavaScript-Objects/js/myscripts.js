
function newDetails() {
	function Book(author, price, year) {
	    var details = {
	        "author": author,
	        "price": price,
	        "year": year
	    };
	    this.getDetails = function () {
	        // returns reference to details object
	        return details;
	    };
	}

	var book = new Book("William Shakespeare", "30.00", "1594");
	var bookDetails = book.getDetails();
	bookDetails.author = "Brandon Sanderson";
	bookDetails.price = "25.00";
	bookDetails.year = "2017";	

	if (document.getElementById("authorName").value !== null && document.getElementById("authorName").value !=='') {

		//Update object details with what is in the input fields
		bookDetails.author = document.getElementById("authorName").value;
		bookDetails.price = document.getElementById("bookPrice").value;
		bookDetails.year = document.getElementById("bookYear").value;
	}

		//Update input display to show what current object details are
	document.getElementById("authorName").value = bookDetails.author ;
	document.getElementById("bookPrice").value = bookDetails.price;
	document.getElementById("bookYear").value = bookDetails.year;

	// => Author Name
	alert(book.getDetails().author);
	// => 25.00        
	alert(book.getDetails().price); 
	// => 2017
	alert(book.getDetails().year);        

}
