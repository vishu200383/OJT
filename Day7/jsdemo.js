function demolAlert(){
    alert("Internal Alert")
}
function demoConfirm(){
    if(confirm("Are you sure..??")){
       
       alert("Yess");
    }
    else{
        alert("Noo");
    }
}
function demoPrompt(){
var fName=prompt("Enter First name here...");
var lname=prompt("Enter last name");
alert(fName+" "+lname)
}