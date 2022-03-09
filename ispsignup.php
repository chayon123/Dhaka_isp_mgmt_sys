<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dhaka ISP Solution</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">    <!-- semantic-ui cdn -->   <!--bootstrep-->
        <link rel="stylesheet" href="../css/signup.css">
        <style>

        </style>
       
    </head>
    <body>
        <div class="topbar">
            <div class="topleft">
              <a class="" href="index.html">Home</a>
              <a class="" href="usersignup.php">USER-SIGNUP</a>
              <a class="" href="userlogin.php">USER-LOGIN</a>
            </div>
            <div class="topright">
              <a class="active" href="ispsignup.php">ISP-SIGNUP</a>
              <a href="isplogin.php">ISP-LOGIN</a>
              <a href="mypanel.php">My Profile</a>
            </div>
        </div>

        <div class="mainbody">
            <div><h1 class="title">DHAKA ISP SOLUTION</h1></div>
             
        </div>

        <div class="form1">
                
                <form action="mainsearch.php" method="GET">
                    <div class="form">
                            <div><h4>ISP SignUp</h4></div>
                            <div class="signupform">
                                <div class="signupfield">
                                        <label for ="firstname">ISP Name:</label>
                                        <br>
                                        <input type="text" name="name" id="firstname" class="" placeholder="Enter your ISP Name" requred><br>
                                </div>
                                <div class="signupfield">
                                        <label for="coverage">Coverage Area:</label>
                                        <br>
                                        <input type="text" name="lname" id="coverage" class="" placeholder="Enter all the Coverage Area" required>
                                </div>
                            </div>

                            <div class="signupform">
                                <div class="signupfield">
                                        <label for ="username">UserName:</label>
                                        <br>
                                        <input type="text" name="username" id="username" class="" placeholder="Set a unique UserName" requred><br>
                                </div>
                                <div class="signupfield">
                                        <label for="password">Password:</label>
                                        <br>
                                        <input type="text" name="password" id="password" class="" placeholder="Set your login password" required>
                                </div>
                            
                            </div>

                            <div class="signupform">
                                <div class="signupfield">
                                        <label for ="address">Address:</label>
                                        <br>
                                        <input type="text" name="address" id="address" class="" placeholder="Enter your Office Address" requred><br>
                                </div>
                                <div class="signupfield">
                                        <label for="phn">Mobile No:</label>
                                        <br>
                                        <input type="text" name="phn" id="phn" class="" placeholder="Enter your MObile NO" required>
                                </div>
                            
                            </div>
                            

                            <div>
                            <button type="submit" class="ui blue button">Submit</button>
                            </div>

                            
                    </div>
                </form>
            </div>



    </body>
</html>