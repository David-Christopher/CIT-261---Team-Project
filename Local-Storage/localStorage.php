
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Local Storage Code Topic</title>
</head>
    <body>
        <div class="wrapper"><!--background image applied here-->
            <div class="page-content-container"><!--content container applied here-->
                <main>
					<h1>Local Storage</h1>
					<p>This is an example of storing an array of Recipe objects and retrieval of those arrays.</p>
					<h2>Recipe Details</h2>
				        <form id="recipeForm">

				                <label for="name">Recipe Name: <input type="text" name="name" id="name"></label><br>
				                <label for="time">Cooking Time-frame: <input type="text" name="time" id="time"></label><br>
				                <label for="ingredients">List Ingredients: <input type="text" name="ingredients" id="ingredients"></label><br>
				                <label for="directions">Cooking Directions: <input type="text" name="directions" id="directions"></label><br>

				                <input type="button" name="button" id="action" value="Add Recipe" onClick="addRecipe()">
				        </form>
				        <br>
				        <h4>Recipe List</h4>
				        <div id="recipeListDetails"><table id="recipeList"></table></div>
					
				        <script type="text/javascript">
				            function Recipe(name, time, ingredients, directions) {
				                this.name = name;
				                this.time = time;
				                this.ingredients = ingredients;
				                this.directions = directions;
				            }

				            function addRecipe() {
				                var nameDetail = document.getElementById('name');
				                var timeDetail = document.getElementById('time');
				                var ingredientsDetail = document.getElementById('ingredients');
				                var directionsDetail = document.getElementById('directions');
				                
				                var name = nameDetail.value;
				                var time = timeDetail.value;
				                var ingredients = ingredientsDetail.value;
				                var directions = directionsDetail.value;
				                
				                var newRecipe = new Recipe(name, time, ingredients, directions);
				                var recipeListStorage = JSON.parse(localStorage.getItem("recipeListStorage"));
				                if(recipeListStorage === null) {
				                    recipeListStorage = Array();
				                }
				                recipeListStorage.push(newRecipe);
				                localStorage.setItem("recipeListStorage", JSON.stringify(recipeListStorage)); 
				                nameDetail.value = "";
				                timeDetail.value = "";
				                ingredientsDetail.value = "";
				                directionsDetail.value = "";
				                updateRecipe();
				            }
		            
				            function deleteRecipe(index) {
				                var recipeListStorage = JSON.parse(localStorage.getItem("recipeListStorage"));
				                recipeListStorage.splice(index,1);
				                localStorage.setItem("recipeListStorage", JSON.stringify(recipeListStorage));
				                updateRecipe();
				            }
				            
				            function updateRecipe() {
				                var table = document.getElementById('recipeList');
								var div = document.getElementById('recipeListDetails');
				                var recipeListStorage = JSON.parse(localStorage.getItem("recipeListStorage"));
				                var newTable = document.createElement('table');
				                newTable.id = 'recipeList';
				                var newHead = document.createElement('thead');
				                var newRow = document.createElement('tr');
				                var newName = document.createElement('th');
				                newName.appendChild(document.createTextNode('Name'));
				                var newTime = document.createElement('th');
				                newTime.appendChild(document.createTextNode('Time'));
				                var newIngredients = document.createElement('th');
				                newIngredients.appendChild(document.createTextNode('Ingredients'));
				                var newDirections = document.createElement('th');
				                newDirections.appendChild(document.createTextNode('Directions'));
				                var newAction = document.createElement('th');
				                newAction.appendChild(document.createTextNode('Action'));
				                
				                newRow.appendChild(newName);
				                newRow.appendChild(newTime);
				                newRow.appendChild(newIngredients);
				                newRow.appendChild(newDirections);
				                newRow.appendChild(newAction);
				                
				                newHead.appendChild(newRow);
				                var newBody = document.createElement('tbody');
				                
				                if(recipeListStorage !== null) {
				                    var count = 0;
				                    recipeListStorage.forEach(function(rowData) {
				                        var row = document.createElement('tr');
				
				                        var nameCell = document.createElement('td');
				                        nameCell.appendChild(document.createTextNode(rowData.name));
				                        row.appendChild(nameCell);
				                        var timeCell = document.createElement('td');
				                        timeCell.appendChild(document.createTextNode(rowData.time));
				                        row.appendChild(timeCell);
				                        var ingredientsCell = document.createElement('td');
				                        ingredientsCell.appendChild(document.createTextNode(rowData.ingredients));
				                        row.appendChild(ingredientsCell);
				                        var directionsCell = document.createElement('td');
				                        directionsCell.appendChild(document.createTextNode(rowData.directions));
				                        row.appendChild(directionsCell);
				                        var actionCell = document.createElement('td');
				                        actionCell.innerHTML = "<input type=\"button\" name=\"button\" value=\"Delete\" onClick=\"deleteRecipe(" + count + ")\">";
				                        row.appendChild(actionCell);
				                        newBody.appendChild(row);
				                        count++;
				                    });
				                }
		                
				                newTable.appendChild(newHead);
				                newTable.appendChild(newBody);
				                div.replaceChild(newTable, table);
				            }
		            
				            updateRecipe();
				        </script>
		        </main>
	            <footer>
	            </footer>
			</div>
		</div>
	</body>
</html>
