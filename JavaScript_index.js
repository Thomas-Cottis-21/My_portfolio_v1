function popUp(){
    let text;
    const d = new Date();
    //Brings in the current date
    d.getHours();
    //returns just the hours (8, 10, 17, 24 etc...).
    let h_morning = 12;
    let h_afternoon = 17;
    let h_evening = 23;
    //variables of time to be tested against.

    const createName = () => {
        let person = prompt("Please enter your name: (trust me, it'll be cool)", "Buzz Lightyear");
        person = localStorage.setItem("name", person);
    }

    let getNewName = localStorage.getItem("name");
    let person = getNewName;
    
    if (getNewName === null) {
        createName();
        console.log("first if");
    }else{
        console.log("else");
        
    }
    person = localStorage.getItem("name");

    //let person = prompt("Please enter your name: (trust me, it'll be cool)", "Buzz Lightyear");

    //newName = localStorage.setItem("name", person);

    if (person === "null" || person === "") {
        text = "Thank you for your visit!";

    }else if(h_morning >= d.getHours() && d.getHours() < h_afternoon){
        //if 12 is greater than current time AND less than 17.
        text = `Good morning, ${person}! Thank you for taking time out of your morning.`;

    }else if(h_afternoon >= d.getHours() && d.getHours() > h_morning){
        //if 17 is greater than current time AND greater than 12.
        text = "Good afternoon, " + person + "! Thank you for taking time out of your day.";

    }else if(h_evening >= d.getHours() && d.getHours() > h_afternoon){
        //if the current time is less than or equal to 23 and greater than 17.
        text = "Good evening, " + person + "! Thank you for taking time out of your night."
    }
    document.getElementById("newPage").innerHTML = text;
}
//localStorage.clear();