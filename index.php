<!DOCTYPE html>
<html lang ="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width">
    <title> Register & Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Sign Up</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fa-regular fa-user" style="color: #8a0000;"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fa-regular fa-user" style="color: #8a0000;"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>    
            <div class="input-group">
                <i class="fa-solid fa-envelope" style="color: #8a0000;"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div> 
            <div class="input-group">
                <i class="fa-solid fa-lock" style="color: #8a0000;"></i>   
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
    <div class="input-group">

                <p>Gender (Optional)</p>
                <div class="button-group flex">
                    <button class="choice" type="button" onclick="selectGender('Female')">Female</button>
                    <button class="choice" type="button" onclick="selectGender('Male')">Male</button>
                </div>
                <!-- Hidden input to send gender value -->
                <input type="hidden" name="gender" id="gender-input" value="">
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
    
            <input type="submit" class="btn" value="Sign Up" name="signUp">

        </form>
            <div class="links">
                <p>Already Have Account ?</p>
                <button id="signInButton"> Sign In</button>
            </div>
        </div>

        <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">

            <div class="input-group">
                <i class="fa-solid fa-envelope" style="color: #8a0000;"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div> 
            <div class="input-group">
                <i class="fa-solid fa-lock" style="color: #8a0000;"></i>   
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            
            <p class="recover" >
                <a href="#">Forgot Your Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>
            <div class="links">
                <p>Don't Have An Account ?</p>
                <button id="signUpButton"> Sign Up</button>
            </div>
        </div>
        <script src="script.js"> </script>
</body>
</html>                  

