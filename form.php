<!DOCTYPE html>
<html>
<head>
    <title>sign up</title>
    <link rel="stylesheet" href="j.query.css">
</head>
<body>
<div class="wrapper">
<form class="card" action="form1.php" method="post"> 
   <div class="fl"><label for="fname">Fname:</label>
    <input type="text" id="fname" name="fname"><span id="f-name" class="red"></span><br> 
    <label for="lname">Lname:</label></div>
    <input type="text" id="lname"><br> <span id="l-name" class="red"></span><br>
    <label for="mail">Email:</label>
    <input type="email" id="mail"><br> <span id="e-mail" class="red"></span><br>
    <label for="number">phone no:</label>
    <input type="number" id="number"><br> <span id="phone" class="red"></span><br>
    <label for="password">password:</label>
    <input type="password" id="password"><br> <span id="pass" class="red"></span><br>
    <label for="password">confirm password:</label>
    <input type="password" id="password2"><br> <span id="pass2" class="red"></span><br>
    <label for="Dob">Date of birth:</label>
    <input type="date" id="dob"  ><br><span id="date1" class="red"></span><br>
    <input type="button" id="submit" value="submit" name="submit">
</form> 
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
        var validation_holder;
    $("#submit").click(function(){
            var  validation_holder =0;
            var fname  =$("#fname").val();
            var lname =$("#lname").val();
            var email =$("#mail").val();
            var email_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/;
            var number =$("#number").val();
            var password =$("#password").val();
            var password2 =$("#password2").val();
            var number     =$("#number").val();
            var number_regex		= /^[0-9]/;
            var dob =$("#dob").val();
            //VALIDATION
            if(fname ==""){
                $("#f-name").text("this field is required").addClass('validate');
                validation_holder =1;
            }
                else{   
                    $("#f-name").text("");
                }
            if(lname ==""){
                $("#l-name").text("this field is required").addClass('validate');
                validation_holder=1;
            }
            else{
                $("#l-name").text("");
            }
            if(email ==""){
                $("#e-mail").text("this field is required").addClass('validate');
                validation_holder=1;
            }
            else{
                if(!email_regex.test(email)){
                    $("#e-mail").html("Invaild Email").addClass('validate');
                    validation_holder=1;
                }
                else{
                    $("#e-mail").html("");
                }
            }
            if(number ==""){
            $("#phone").text("this field is required").addClass('validate');
            validation_holder=1;
            }
            else{
                if(!number_regex.test(number)){
				$("#phone").html("Invalid Phone Number!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("#phone").html("");
			}
            }
            if(password ==""){
            $("#pass").text("this field is required").addClass('validate');
            validation_holder=1;
            }
            else{
            $("#pass").text("");
            }
            if(password2 == "") {
			$("#pass2").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(password != password2) {
				$("#pass2").html("Password does not match!").addClass('validate');
				validation_holder = 1;
			} else {
				$("#pass2").html("");
			}
        }
            if(dob==""){
            $("#date1").text("this field is required").addClass('validate');
            validation_holder=1;
            }
            else{
            $("#date1").text("");
            }
        }); 
    }); 
</script>
</html>