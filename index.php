<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegEx Form</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
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
            <input type="button" name="submit" id="submit"  value="Submit" />  
            <span id="error_message" class="text-danger"></span>  
            <span id="success_message" class="text-success"></span>  
        </form>
      
          
        <script type="text/javascript" src="index.js"></script>

        <script>

            $(document).ready(function(){

                $('#submit').click(function(){  
                    var username = $('#username').val();  
                    var email = $('#email').val();  
                    var password = $('#password').val();  
                    var telephone = $('#telephone').val();  
                    var slug = $('#slug').val();  

                    if(username=='' || email==""||password==""|| telephone==""||slug==""){

                        $('#error_message').html("All Fields are required"); 

                        setTimeout(() => {
                            $('#error_message').fadeOut("Slow");  

                            
                        }, 2000);
                    }
                   else{
        
                    $.ajax({  
                         url:"server.php",  
                         method:"POST",  
                         data:{username:username, email:email,password:password,telephone:telephone,slug:slug},  
                         success:function(data){  
                            $("form").trigger("reset");  
                              $('#success_message').fadeIn().html(data);  
                              setTimeout(function(){  
                                   $('#success_message').fadeOut("Slow");  

                              }, 2000);  
                         }  
                     
                    });  
                  }
            
              });  

               
            });

           

      </script>

       
            </style> --> 
    </body>
</html>