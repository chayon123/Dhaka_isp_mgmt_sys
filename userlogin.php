<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dhaka ISP Solution</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">    <!-- semantic-ui cdn -->   <!--bootstrep-->
        <link rel="stylesheet" href="../css/style.css">
        <style>
          

        </style>
       
    </head>
    <body>
        <div class="topbar">
            <div class="topleft">
              <a class="" href="index.html">Home</a>
              <a href="usersignup.php">USER-SIGNUP</a>
              <a class="active" href="userlogin.php">USER-LOGIN</a>
            </div>
            <div class="topright">
              <a href="ispsignup.php">ISP-SIGNUP</a>
              <a href="isplogin.php">ISP-LOGIN</a>
              <a href="mypanel.php">My Profile</a>
            </div>
        </div>

        <div class="mainbody">
            <div><h1 class="title">DHAKA ISP SOLUTION</h1></div>
            <!-- <div><h4>User Login</h4></div> -->

           
        </div>

        <div class="form1">

                <form action="userpasswordcheck.php" method="POST">
                  <div class="form">
                    <div><h4>User Login</h4></div>
                    <label for ="username">UserName:</label>
                    <br>
                    <input type="text" name="userid" id="username" class="" placeholder="Enter your login id" requred><br>
                    <label for="password">Password:</label>
                    <br>
                    <input type="text" name="password" id="password" class="" placeholder="Enter your login password" required>
                    <br>
                    <button type="submit" class="ui blue button">Submit</button>
                  </div>
                </form>
         </div>



    </body>
</html>