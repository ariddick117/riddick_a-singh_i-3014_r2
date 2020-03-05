<?php
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_POST['submit'])){
        $fname = trim($_POST['fname']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        if(empty($fname) || empty($username) || empty($password) || empty($email)){
            $message = 'Please fill required fields!';
        }else{
            // All data pre processed, and good to go
            $message = createUser($fname, $username, $password, $email);
        }
    }

    // // $email and $message are the data that is being posted to this page from our html contact form
    // $username = $_REQUEST['username'];
    // $password = $_REQUEST['password'];
    // $email = $_REQUEST['email'];

    // require("../composer/vendor/autoload.php");
    // require_once '../composer/vendor/phpmailer/phpmailer/src/Exception.php';
    // require_once '../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    // require_once '../composer/vendor/phpmailer/phpmailer/src/SMTP.php';
    // //use PHPMailer\PHPMailer\PHPMailer;


    // $mail = new PHPMailer\PHPMailer\PHPMailer();
    // $mail->IsSMTP();

    // // As this email.php script lives on the same server as our email server, we are setting the HOST to localhost
    // $mail->Host = "localhost"; // specify main and backup server

    // $mail->SMTPAuth = true; // turn on SMTP authentication

    // // When sending email using PHPMailer, you need to send from a valid email address. In this case, we setup a test email account with the following credentials:
    // // email: send_from_PHPMailer@jeffm.webhostinghubexample.com
    // // pass: password
    // $mail->Username = " send_from_PHPMailer@jeffm.webhostinghubexample.com"; // SMTP username
    // $mail->Password = "password"; // SMTP password

    // // $email is the user's email address the specified on our contact us page. We set this variable at the top of this page with:
    // // $email = $_REQUEST['email'] ;
    // $mail->From = $email;

    // // below we want to set the email address we will be sending our email to.
    // $mail->AddAddress(" alec.riddick@gmail.com", "Alec Riddick");

    // // set word wrap to 50 characters
    // $mail->WordWrap = 50;
    // // set email format to HTML
    // $mail->IsHTML(true);

    // $mail->Subject = "Login Information for: Movies CMS";

    // // $message is the user's message they typed in on our contact us page. We set this variable at the top of this page with:
    // // $message = $_REQUEST['message'] ;
    // $mail->Body = $username;
    // $mail->AltBody = $password;

    // if(!$mail->Send())
    // {
    // echo "Message could not be sent. <p>";
    // echo "Mailer Error: " . $mail->ErrorInfo;
    // exit;
    // }

    // echo "Message has been sent";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
</head>
<body>
    <h2>Create User</h2>
    <?php echo !empty($message)? $message:''; ?>
    <form action="admin_createuser.php" method="post">
        <label>First Name</label>
        <input type="text" name="fname" value=""><br><br>
        <label>Username</label>
        <input type="text" name="username" value=""><br><br>
        <label>Password</label>
        <input type="text" name="password" value=""><br><br>
        <label>Email</label>
        <input type="text" name="email" value=""><br><br>

        <button type="submit" name="submit">Create User</button>
    </form>
</body>
</html>