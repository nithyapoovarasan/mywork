<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Verify the Form</title>
    <style>
        label{
            width:150px;
            display:inline-block;
            padding:2x;
        }
        form val{
            margin:auto;
        }
         
        .valid {
            color: green;
        }

        .invalid {
            color: red;
        }
    
    </style>
</head>
<body>
<?php 
    session_start();
    $eid=$_SESSION["id"];
    echo $eid;
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        echo($$id);
    }
    ?>
    
<section>
        <h1>Form Validation</h1>
        <form id="form_val">
            <div>
                <label>First Name</label>
                <input type="text" name="first_name" id="first_name" required/>
                
           </div>
           <div>
                <label>Last Name</label>
                <input type="text" name="last_name" id="last_name" required />
                
            </div>
        
             <div>
                <label>Password</label>
                <input type="password" name="pwd" id="pwd" required />
                
            </div>
             <div>
                <label>Email</label>
                <input type="email" name="email" id="email" required />
                
            </div>

             <div>
                <label>Mobile Number</label>
                <input type="number"  name="mobile_number" id="mobile_number" required />
                
            </div>
        </div>
        <center>
            <button type="Submit">Submit</button>
        </center>
</form>
    </section>
   
</head>
<body>

    <h2>Validation Check</h2>

    <input type="password" id="password" placeholder="Enter Password">

    <ul>
        <li id="length" class="invalid"> Minimum 8 characters</li>
        <li id="lower" class="invalid"> At least one lowercase letter</li>
        <li id="upper" class="invalid"> At least one uppercase letter</li>
        <li id="special" class="invalid"> At least one special character</li>
    </ul>

<script>
    var passwordInput = document.getElementById("password");
    passwordInput.addEventListener("keyup", function () {
    var password = passwordInput.value;
    var lengthCheck = document.getElementById("length");
    var lowerCheck = document.getElementById("lower");
    var upperCheck = document.getElementById("upper");
    var specialCheck = document.getElementById("special");

    // Minimum 8 characters
    if (password.length >= 8) {
        lengthCheck.className = "valid";
        lengthCheck.innerHTML = "Minimum 8 characters";
    } else {
        lengthCheck.className = "invalid";
        lengthCheck.innerHTML = "Minimum 8 characters";
    }

    // Lowercase check
    if (/[a-z]/.test(password)) {
        lowerCheck.className = "valid";
        lowerCheck.innerHTML = "At least one lowercase letter";
    } else {
        lowerCheck.className = "invalid";
        lowerCheck.innerHTML = "At least one lowercase letter";
    }

    // Uppercase check
    if (/[A-Z]/.test(password)) {
        upperCheck.className = "valid";
        upperCheck.innerHTML = "At least one uppercase letter";
    } else {
        upperCheck.className = "invalid";
        upperCheck.innerHTML = "At least one uppercase letter";
    }

    // Special character check
    if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        specialCheck.className = "valid";
        specialCheck.innerHTML = "At least one special character";
    } else {
        specialCheck.className = "invalid";
        specialCheck.innerHTML = "At least one special character";
    }

});
</script>

 <script>

/*First Name Validation*/
    document.getElementById("first_name").addEventListener("change",function(e){
        let fname= document.getElementById("first_name").value.trim();
        const namePattern = /^[a-zA-Z\xC0-\uFFFF\s.'-]+$/u;
            if(fname==""){
                alert("enter the name ")
             }
             else if((fname.length<3) || (fname.length>20) ){
                alert(" Name length between 3 to 20  ")
             }
             else if(!(namePattern.test(fname))){
                alert(" enter alphabet value only  ")
                }
             });
            

/*Last Name Validation*/
    document.getElementById("last_name").addEventListener("change",function(e){
        let last_name=document.getElementsById("last_name").value.trim();
        const Npattern= /^[a-zA-Z\xC0-\uFFFF\s.'-]+$/u;
        let Error2=document.getElementById("last_name");
            if(last_name==""){
                Error2.textContents="It is Empty! please enter your name";
            }
            else if(!(NamePattern.test(fname))){
             Error2.textContents(" enter alphabet value only  ");
            }
            });

/* email  validation */
    document.getElementById("email").addEventListener("change",function(e){

           let email= document.getElementById("email").value.trim();
            let email_pat= /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
             if(email==""){
               error_mess="enter the correct email "
             }
             else if(!(email_pat.test(email))){
             error_mess=" enter the correct email "
            }
        });

/* mobile number validation */
    document.getElementById("mobile_number").addEventListener("change",function(e){
        let mnumber= document.getElementById("mobile_number").value.trim();
             if(mnumber==""){
                alert("enter the number")
             }
             else if(!(mnumber.length==10) ){
                alert("Enter 10 digit mobile number ")
             }
             else{
                alert("successfully")
             }
            
            });
    </script>
    
</body>
</html>