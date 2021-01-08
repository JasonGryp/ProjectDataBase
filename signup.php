<?php
require_once 'includes/dbh.inc.php';

$onoma=$password=$confirm_password=$email=$tilefono="";
$onomaError=$passwordError=$confirm_passwordError=$emailError=$tilefonoError="";


if($_SERVER["REQUEST_METHOD"]== "POST"){
    //Handle onoma
    if(empty(trim($_POST["onoma"])))
   {
        $onomaError="Please enter a username";
    }else
    {
        //make a select statement to check if username is taken
        $sql="SELECT onoma from user where onoma=?";
        if($statement = mysqli_prepare($conn,$sql))
        {
            //bind parameters to the statement
            mysqli_stmt_bind_param($statement,"s",$parameter_onoma);

            //attach onoma to parameter
            $parameter_onoma=trim($_POST["onoma"]);

            //try to execute select
            if(mysqli_stmt_execute($statement))
            {
                mysqli_stmt_store_result($statement);
                if(mysqli_stmt_num_rows($statement)==1)
                {
                    $onomaError="Username already taken";
                }else
                {
                    $onoma=trim($_POST["onoma"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($statement);
    }
    }

    //Handle Password

    if(empty(trim($_POST["password"])))
    {
        $passwordError="Please enter a password";
    }else if(strlen(trim($_POST["password"])) < 4)
    {
       $passwordError="Password must be at least 4 characters";
    }
    else
    {
        $password = trim($_POST["password"]);
    }
    //Handle confirmation of password

    if(empty(trim($_POST["confirm_password"])))
        {
            $confirm_passwordError="Please confirm your password";
        }
    else
        {
            $confirm_password = trim($_POST["confirm_password"]);
            //Check if password and confirmation match
            if($confirm_password!=$password && empty($passwordError))
            {
                $confirm_passwordError="Passwords do not match";
            }
        }
    //Handle email
    if(empty(trim($_POST["email"])))
    {
        $emailError="Please enter an E-mail Address";
    }else
    {
        //make a select statement to check if username is taken
        $sql="SELECT email from user where email=?";
        if($statement = mysqli_prepare($conn,$sql))
        {
            //bind parameters to the statement
            mysqli_stmt_bind_param($statement,"s",$parameter_email);

            //attach onoma to parameter
            $parameter_email=trim($_POST["email"]);

            //try to execute select
            if(mysqli_stmt_execute($statement))
            {
                mysqli_stmt_store_result($statement);
                if(mysqli_stmt_num_rows($statement)==1)
                {
                    $emailError="E-mail address already in use";
                }else
                {
                    $email=trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($statement);
        }
    }

    //Handle tilefono
    if(empty(trim($_POST["tilefono"])))
    {
        $tilefonoError="Please enter a Telephone Number";
    }else if(strlen(trim($_POST["tilefono"])) != 10 && is_numeric(trim($_POST["tilefono"])) )
    {
       $tilefonoError="Phone Number must be at exactly 10 numbers";
    }
    else
    {
        $tilefono = trim($_POST["tilefono"]);
    }
    
    //if there are no errors prepare to insert
    if(empty($onomaError)&&empty($passwordError)&&empty($confirm_passwordError)&&empty($emailError)&&empty($tilefonoError))
    {
        $sql= "INSERT INTO user (onoma,password,email,tilefono) VALUES (?,?,?,?)";
        if($statement = mysqli_prepare($conn,$sql))
        {
            mysqli_stmt_bind_param($statement,"sssi",$parameter_onoma,$parameter_password,$parameter_email,$parameter_tilefono);
            $parameter_onoma=$onoma;
            $parameter_email=$email;
            $parameter_tilefono=$tilefono;
            $parameter_password=$password;//password_hash($password, PASSWORD_DEFAULT);
            
            if(mysqli_execute($statement))
            {
                header("Location:login.php");
            }else
            {
                echo "Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }

    }
 mysqli_close($conn);
}
?>

             

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($onomaError)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="onoma" class="form-control" value="<?php echo $onoma; ?>">
                <span class="help-block"><?php echo $onomaError; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($passwordError)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $passwordError; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_passwordError)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_passwordError; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($emailError)) ? 'has-error' : ''; ?>">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $emailError; ?></span>
            </div>
             <div class="form-group <?php echo (!empty($tilefonoError)) ? 'has-error' : ''; ?>">
                <label>Phone Number</label>
                <input type="text" name="tilefono" class="form-control" value="<?php echo $tilefono; ?>">
                 <span class="help-block"><?php echo $tilefonoError; ?></span>
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>