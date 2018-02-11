
function newName() {
    var sValue = document.getElementById("newName");
    var i = sValue.options[sValue.selectedIndex].value;

    var name = ["Choose An Option", "John Doe the diligent", "Mary Jane the kind", "Bob Dylan the talented", "Chris David the brave"];

    document.getElementById("display").innerHTML = name[i];

}
