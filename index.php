<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegEx Form</title>
        <link rel="stylesheet" href="styles.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    </head>
    <body>
        <h1>New User Signup</h1>
        <form action="server.php" method="post">

            <input type="text" name="username" placeholder="username" id="username">
            <p>Username must be  and contain 5 - 12 characters</p>

            <input type="text" name="email" placeholder="email" id="email">
            <p>Email must be a valid address, e.g. myname.lastname@student.uni-pr.edu</p>

            <input type="password" name="password" placeholder="password" id="password">
            <p>Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>

            <input type="text" name="telephone" placeholder="telephone" id="telephone">
            <p>Telephone must be a valid USA telephone number (11 digits)</p>

            <input type="text" name="slug" placeholder="profile slug" id="slug">
            <p>Slug must contain only lowercase letters, numbers and hyphens and be 8 - 20 characters</p>
            <input type="button" value="sign up" id="submit" name="submit">

            <!-- <button type="submit" name="submit" id="submit">Sign up</button> -->
        </form>
        <div class="correct" style="display:none">Your data has been save</div>
            <div id="error"style="display:none" > something went worong :-)</div>
          
        <script type="text/javascript" src="index.js"></script>

        <script>

            $(document).ready(function(){
                $('submit').click(function(event){

                var mydata{
                  username:$("#username").val();
                  email:$("#email").val();
                  password:$("#password").val();
                  telephone:$("#telephone").val();
                  slug:$("#slug").val();
                };
                 $.ajax({
                     url:"server.php",
                     method:"POST",
                     data:mydata,
                       
                
                 }).done(function(data){

                    if(data.error){
                        $("#error").text(data.error).show();
                    }
                    else{
                        $('.correct').text(data.name).show();
                    }


                 })



                  event.preventDefault();

                })

            });


        </script>

        <style>
            #error{
                width:100%;
                background-color:red;
                height:25px;
                text-align:center;
            }

            .correct{
                height:25px;
                width:100%;
                background-color:green;
                text-align:center;
                
            }
            </style>
    </body>
</html>