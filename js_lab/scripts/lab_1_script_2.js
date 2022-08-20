function calcSummation(){
    
    alert("This calculator supports only the summation function.");
    let fNumber = Number(prompt("Enter the first number:"));
    let lNumber = Number(prompt("Enter the second number:"));

    document.writeln(`<h1>${fNumber} + ${lNumber} = ${fNumber + lNumber}</h1>`);
}

calcSummation();   