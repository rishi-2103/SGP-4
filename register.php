<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/326143f435.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="pull-right">
            <a class="login-link" href="login.php"><h6>Back to Login</h6></a>
        </div>
    </div>
    <div class="wrapper">
        <div class="form">
            <header>Create Account</header>
            <form id="loginform" method="POST" action="connect.php">
            <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_lg"><i class="icon fa-solid fa-pen"></i></span><input type="text" name="fname" placeholder="Full Name" required/>
                    </div>
                </div>
                <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_lg"><i class="icon fas fa-user-circle"></i></span><input type="text" name="username" placeholder="Username" required/>
                    </div>
                </div>
                <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_ly"><i class="icon fas fa-lock"></i></span><input type="password" name="password" placeholder="Password" required/>
                    </div>
                </div>
                <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_ly"><i class="icon fa-solid fa-phone"></i><span><input type="tel" name="contact" placeholder="Contact No." required/>
                    </div>
                </div>
                <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_ly"><i class="icon fa-solid fa-person"></i></span>
                    <select class="drop-down" name="gender" required="required" id="select">
                                    <option value="Gender" selected="selected" >Gender</option>
                                    <option value="Male" >Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>                    
                            </div>
                </div>
                <div class = "form-actions center">
                    <button class="login" type = "submit" title="Log In" name="login" value="Admin Login"> Login </button>
                </div>
            </form>
            </div>
    </div>
    
</body>
</html>