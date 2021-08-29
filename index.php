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

            <input type="text" name="username" placeholder="username">
            <p>Username must be  and contain 5 - 12 characters</p>

            <input type="text" name="email" placeholder="email">
            <p>Email must be a valid address, e.g. myname.lastname@student.uni-pr.edu</p>

            <input type="password" name="password" placeholder="password">
            <p>Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>

            <input type="text" name="telephone" placeholder="telephone">
            <p>Telephone must be a valid USA telephone number (11 digits)</p>

            <input type="text" name="slug" placeholder="profile slug">
            <p>Slug must contain only lowercase letters, numbers and hyphens and be 8 - 20 characters</p>

            <button type="submit" name="submit" id="submit">Sign up</button>

          
        </form>
        <script type="text/javascript" src="index.js"></script>

        <script>

            $(document).ready(function(){
                $('form').on("submit",function(event){
                    event.preventDefault();

                })

            });
        </script>
    </body>
</html>