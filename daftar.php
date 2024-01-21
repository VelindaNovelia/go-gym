<?php

session_start();
if (!isset($_SESSION['registered_user'])) {
    $_SESSION['registered_user'] = false;
}

function createMySQLConnection(): PDO
{
    $link = new PDO('mysql:host=localhost;dbname=gym', 'root');
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    return $link;
}

function login(String $email, String $password)
{
    $link = createMySQLConnection();
    $query = 'SELECT * FROM daftar WHERE email = ? AND password = ?';
    $stmt = $link->prepare($query);
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    $user = $stmt->fetch();
    $link = null;
    return $user;
}

function addNewUser(String $name, String $email, String $password): int
{
    $result = 0;
    $link = createMySQLConnection();
    $link->beginTransaction();
    $query = 'INSERT INTO daftar(name, email, password) VALUES (?, ?, ?)';
    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $name);
    $stmt->bindValue(2, $email);
    $stmt->bindValue(3, $password);
    if ($stmt->execute()) {
        $link->commit();
        $result = 1;
    } else {
        $link->rollBack();
    }
    $link = null;
    return $result;
}

$loginPressed = filter_input(INPUT_POST, 'btnLogin');
if (isset($loginPressed)) {
    $loginEmail = filter_input(INPUT_POST, 'loginEmail');
    $loginPassword = filter_input(INPUT_POST, 'loginPassword');
    if (empty($loginEmail) || empty($loginPassword)) {
        echo '<div class="d-flex justify-content-center valided">Please provide valid input</div>';
    } else {
        $user = login($loginEmail, $loginPassword);
        if ($user) {
            $_SESSION['registered_user'] = true;
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            if ($user['role'] == 'admin') {
                header('location: dashboardtest.php');
            } else {
                header('location: home.php');
            }
        } else {
            echo '<div class="d-flex justify-content-center valided">Invalid email or password</div>';
        }
    }
}

$submitPressed = filter_input(INPUT_POST, 'btnSignUp');
if (isset($submitPressed)) {
    $name = filter_input(INPUT_POST, 'signUpName');
    $email = filter_input(INPUT_POST, 'signUpEmail');
    $password = filter_input(INPUT_POST, 'signUpPass');
    $confirmPassword = filter_input(INPUT_POST, 'signUpConfirm');
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo '<div class= "d-flex justify-content-center valided">Please provide with a valid input </div>';
    } elseif ($password != $confirmPassword) {
        echo '<div class= "d-flex justify-content-center valided">Password not match</div>';
    } else {

        addNewUser($name, $email, $password);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign Up</title>
    <link rel="stylesheet" href="CSS/style1.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 mx-auto p-0">
                <div class="card">
                    <div class="login-box">
                        <div class="login-snip">
                            <!-- Tab untuk Login -->
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                            <label for="tab-1" class="tab">Login</label>

                            <!-- Tab untuk Sign Up -->
                            <input id="tab-2" type="radio" name="tab" class="sign-up">
                            <label for="tab-2" class="tab">Sign Up</label>

                            <div class="login-space">
                                <div class="login">
                                    <form action="" method="post">

                                        <!-- Form Login -->
                                        <div class="group">
                                            <label for="user" class="label">Email Address</label>
                                            <input id="user" type="text" name="loginEmail" class="input" placeholder="Enter your email address">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" type="password" name="loginPassword" class="input" data-type="password" placeholder="Enter your password">
                                        </div>
                                        <div class="group">
                                            <input id="check" type="checkbox" class="check" checked>
                                            <label for="check">
                                                <span class="icon"></span> Keep me Signed in
                                            </label>
                                        </div>
                                        <div class="group">
                                            <a href="home.php"><input type="submit" class="button" name="btnLogin" value="Sign In"></a>
                                        </div>
                                        <div class="hr"></div>
                                        <div class="foot">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                        <div class="group"> <a href="home.php"><input class="rounded-pill py-2 " type="button" value="Back" style="background-color:#014638 ; color: white;"></a></div>
                                    </form>
                                </div>
                                <div class="sign-up-form">
                                    <!-- Form Sign Up -->
                                    <form action="" method="post">

                                        <div class="group">
                                            <label for="pass" class="label">Full Name</label>
                                            <input id="pass" type="text" name="signUpName" class="input" placeholder="Enter your full name">
                                        </div>
                                        <div class="group">
                                            <label for="user" class="label">Email Address</label>
                                            <input id="user" type="text" name="signUpEmail" class="input" placeholder="Enter your email address">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" type="password" name="signUpPass" class="input" data-type="password" placeholder="Create your password">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Repeat Password</label>
                                            <input id="pass" type="password" name="signUpConfirm" class="input" data-type="password" placeholder="Repeat your password">
                                        </div>
                                        <div class="group" id="submit">
                                            <input type="submit" name="btnSignUp" class="button" value="Sign Up">
                                        </div>
                                        <div class="group"> <a href="home.php"><input class="rounded-pill py-2 " type="button" value="Back" style="background-color:#014638 ; color: white;"></a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>