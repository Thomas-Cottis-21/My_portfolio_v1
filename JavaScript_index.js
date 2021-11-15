function popUp(){
    let text;
    let person = prompt("Please enter your name:", "Buzz Lightyear");
    if (person == null || person == "") {
        text = "User cancelled the prompt";
    } else {
        text = "Hello " + person + "! Thank you for your input and please contact me soon!";
    }
    document.getElementById("newPage").innerHTML = text;
}
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}