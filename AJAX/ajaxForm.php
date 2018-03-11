<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Code Topic</title>

</head>
    <body>
        <div class="wrapper"><!--background image applied here-->
            <div class="page-content-container"><!--content container applied here-->
                <main>
                    <div id="div1">
                        <h1 id="submittedName"></h1>
                    </div>
                    <form id="form">
                        <input type="text" id="name">
                        <button type="button" id="submit" 
                        onclick="submittedName()">Submit Name</button>
                    </form>
                </main>
                <footer>
                </footer>
            </div><!--end of content container tag-->
        </div>
        <script type="text/javascript">

            function submittedName(){

                if(document.getElementById("name").value !== null && document.getElementById("name").value !==''){
                    
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("form").innerHTML =
                            this.responseText;

                            if(document.getElementById("childDiv") !== null){
                                document.getElementById("childDiv").innerHTML = '';
                            }
                            this.responseText;
                        }
                    };
                    xhttp.open("GET", "ajax_success.txt", true);
                    xhttp.send(); 
                } else {
                    if(document.getElementById("childDiv") == null){
                                
                            var submittedName = document.getElementById("submittedName");
                            var resultSpan = document.createElement("div");
                            resultSpan.setAttribute("id", "childDiv");

                            var text = document.createTextNode("We're sorry for the inconvenience. There was a problem with submitting your name");

                            resultSpan.appendChild(text);

                            var parent = document.getElementById("div1");

                            parent.appendChild(resultSpan);
                        }
                    }
            };
        </script>
    </body>
</html>