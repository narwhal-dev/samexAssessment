
<?php
// Create an instance of mysqli class to connect to the database with default setting (user 'root' with no password)
$connection = new mysqli('localhost', 'root', '', 'web_signup');
if($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}
// Initialize the necessary variables
$errors = [];
$first_name = '';
$last_name = '';
$email = '';
$phone_num = '';

// Check if the request method is post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $id = md5($email);

    // Check if First name field is empty
    if(!$first_name){
        $errors[] = 'First name is required';
    }
    // Check if Email address field is empty
    if(!$email){
        $errors[] = 'Email Address is required';
    }
    elseif(!filter_var(($email), FILTER_VALIDATE_EMAIL)){ // Validate the format of the email address
        $errors[] = 'Invalid email format';
    }
    else{
        $check = $connection->query("SELECT * FROM signup_table where email='".$email."'");
        if(mysqli_num_rows($check)){
            $errors[] = 'Email already exists';
        }
    }

    // If no sign of errors, insert data into the database table
    if(empty($errors)){
        $statement = $connection->prepare("INSERT INTO signup_table(id,first_name, last_name, email, phone_num)
            VALUES(?,?, ?, ?, ?)");
        $statement->bind_param("sssss", $id, $first_name, $last_name, $email, $phone_num);
        $statement->execute();
        $statement->close();
        $connection->close();    
        echo '<span style="color:#313234;text-align:center;">Submitted successfully!</span>';
    }
}
?>

