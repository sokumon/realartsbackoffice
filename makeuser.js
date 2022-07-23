console.log("Im make user")

var sub=document.getElementById("submit")
sub.addEventListener("click",()=>{
    var selected_dep=document.getElementsByTagName("select")
    console.log(selected_dep[0].value)
    var selected_dep_sent=document.getElementById("dept")
    selected_dep_sent.value=selected_dep[0].value
})

/* Function to generate combination of password */
function generateP() {
    var pass = '';
    var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' + 
            'abcdefghijklmnopqrstuvwxyz0123456789@#$';
      
    for (let i = 1; i <= 8; i++) {
        var char = Math.floor(Math.random()
                    * str.length + 1);
          
        pass += str.charAt(char)
    }
    console.log(pass)
    return pass;
}
var password=document.getElementById("password");
console.log(password)
function writeP() {
    var str=generateP();
    console.log(str)
    password.value = generateP();
    console.log(password.value)
}