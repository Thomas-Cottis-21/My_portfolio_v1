function popUp(){
    let text;
    let person = prompt("Please enter your name:", "Buzz Lightyear");
    if (person == null || person == "") {
        text = "Thank you for your visit!";
    } else {
        text = "Hello " + person + "! Thank you for your input and please contact me soon!";
    }
    document.getElementById("newPage").innerHTML = text;
}

function switchTheme() {
    var element = document.body;
    element.classList.toggle("switch-theme");
}


