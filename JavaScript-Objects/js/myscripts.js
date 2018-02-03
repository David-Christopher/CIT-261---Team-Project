
function newName(optionA) {

    var character = {
        firstName: "John",
        lastName : "Doe",
        id       : 1,
        fullName : function() {
           return this.firstName + " " + this.lastName;
        }
    };

    document.getElementById("display").innerHTML = character.fullName();
}

function newName(optionB) {

    var character = {
        firstName: "Mary",
        lastName : "Jane",
        id       : 1,
        fullName : function() {
           return this.firstName + " " + this.lastName;
        }
    };

    document.getElementById("display").innerHTML = character.fullName();
}

function newName(optionC) {

    var character = {
        firstName: "Bob",
        lastName : "Dillan",
        id       : 1,
        fullName : function() {
           return this.firstName + " " + this.lastName;
        }
    };

    document.getElementById("display").innerHTML = character.fullName();
}

function newName(optionD) {

    var character = {
        firstName: "Chris",
        lastName : "David",
        id       : 1,
        fullName : function() {
           return this.firstName + " " + this.lastName;
        }
    };

    document.getElementById("display").innerHTML = character.fullName();
}

