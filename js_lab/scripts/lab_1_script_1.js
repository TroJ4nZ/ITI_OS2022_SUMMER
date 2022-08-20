function getUserDetails(){
    let fName = prompt("What is your first name?");
    let lName = prompt("What about your last name?");
    let fullName = fName + " " + lName;
    
    let birthYear = prompt("What is your year of birth?");
    let now = new Date();
    let age = now.getFullYear() - birthYear;
    document.writeln(`<h1>Welcome ${fullName}, you are ${age} years old!</h1>`);
}

getUserDetails();   