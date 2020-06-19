
<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$name = $fname = $lname = $conno = $subject = $message = $email = $finalmessage = "";
$fnameErr = $lnameErr = $snameErr = $emailErr = $error = $rerror = "";
$subject = " ";
$validator = 0;
$to = "bhaveshkhivesra@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["fname"])) {
        $fnameErr = "First Name is required";
        $validator = 0;
    } else {
        $name = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $fnameErr = "Only letters and white space allowed";
            $validator = 0;
        } else {
            $validator = $validator + 1;
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
        $validator = 0;
    } else {
        $tname = test_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $tname)) {
            $lnameErr = "Only letters and white space allowed";
            $validator = 0;
        } else {
            $validator = $validator + 1;
        }
    }

    if (empty($_POST["message"])) {
        $lnameErr = "Message is required";
        $validator = 0;
    } 
    else {
        // $text = test_input($_POST["message"]);
        // // check if message only contains letters and whitespace
        // if (!preg_match("/^[a-zA-Z0-9.,_-]*$/", $text)) {
        //     $lnameErr = "Only letters and white space allowed";
        //     $validator = 0;
        // } else {
            $validator = $validator + 1;
    //    }
    }
    
    $sub = test_input($_POST["subject"]);
    // check if subject only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9.,_'\"\n\t ]*$/", $sub)) {
        $snameErr = "Only letters, numbers and white space allowed";
        $validator = 0;
    } else {
        $validator = $validator + 1;
    }

    if (empty($_POST["email"])) {
        $emailErr = "email is required";
        $validator = 0;
    } else {
        $email1 = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $validator = 0;
        } else {
            $validator = $validator + 1;
        }
    }
    
    if (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{10}$/', $_POST['phone'])) {
            $error = 'Invalid Number!' . $_POST['phone'];
            $validator = 0;
        } else {
            $validator = $validator + 1;
        }
    }
    // echo "VALIDATOR = ".$validator;
    if ($validator == 6) {
        $fname = test_input($_POST['fname']);
        $lname = test_input($_POST['lname']);
        $email = test_input($_POST['email']);
        $conno = test_input($_POST['phone']);
        $subject = test_input($_POST['subject']);
        $message = test_input($_POST['message']);
        $finalmessage =  nl2br("\nFrom" . "\n&nbsp;&nbsp;&nbsp;&nbsp;   " . $fname . " " . $lname . "\n&nbsp;&nbsp;&nbsp;&nbsp;" .
            "Contact number : " . $conno . "\n&nbsp;&nbsp;&nbsp;&nbsp;" .
            "E-Mail : " . $email . "\n&nbsp;&nbsp;&nbsp;&nbsp;" .
            "Subject : " . $subject . "\n&nbsp;&nbsp;&nbsp;&nbsp;" .
            "message : " . $message);
            //mail($to,$subject,$finalmessage);
    }
}

?>

<form  class="container" method="POST" action="javascript: postToGoogle()">
    <input type="text" class="name" name="fname" value="<?php echo  $fname ?>" placeholder="First Name" required><?php $fnameErr ?>
    <input type="text" class="name" name="lname" value="<?php echo $lname ?>" placeholder="Last Name" required>
    <input type="email" name="email" value="<?php echo $email ?>" placeholder="E-Mail" required>
    <input type="text" name="phone" value="<?php echo $conno ?>" placeholder="Phone Number" required>
    <input type="text" name="subject" value="<?php echo $subject ?>" placeholder="Subject">
    <input placeholder="Message" value="<?php echo $message ?>" name="message" required>

    <input type="submit" id="submitbutton" value="SUBMIT" style="background-color: black; color: white;">
</form>

<a href="contact.php"><button id="contactbutton">contact us</button></a>
Endpoint : http://designsandwoods.in.s3-website.ap-south-1.amazonaws.com
<!-- //echo $validator;
/*echo nl2br("Name : " . $fname . " " . $lname . $fnameErr . "\n" .
    "Contact number : " . $conno . $error . "\n" .
    "Subject : " . $subject . $snameErr . "\n" .
    "message : " . $message . $lnameErr . "\n" .
    "final message : " . $finalmessage . "\n" .
    "E-Mail : " . $email . $emailErr);*/ -->


<script src="./resources/bootstrap/jquery.min.js"></script>
<script src="./resources/javascripts/form.js"></script>