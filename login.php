<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/326143f435.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="pull-left">
            <a class="login-link" href="../index.php"><h6>Go Back</h6></a>
         </div>

        <div class="pull-right">
            <a class="login-link" href="register.php"><h6>Create New</h6></a>
        </div>
    </div>
    <div class="wrapper">
        <div class="form">
            <header>Staff Login</header>
            <form id="loginform" method="POST" action="#">
                <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_lg"><i class="icon fas fa-user-circle"></i></span><input type="text" name="user" placeholder="Username" required/>
                    </div>
                </div>
                <div class="field alogin">
                    <div class="input-area">
                    <span class="add-on bg_ly"><i class="icon fas fa-lock"></i></span><input type="password" name="pass" placeholder="Password" required/>
                    </div>
                </div>
                <div class = "form-actions center">
                    <button class="login" type = "submit" title="Log In" name="login" value="Admin Login"> Login </button>
                </div>
            </form>
            </div>
    </div>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost","root","","gym");
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from staff where username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                header('location:index.php');
            }else{
                echo "Invalid";
            }
        } else{
            echo "Invalid Username";
        }
    }
?>
</body>
</html>