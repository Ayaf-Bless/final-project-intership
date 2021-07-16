<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/img/faviconTra.png" type="image/png">
</head>

<body>
    <div class="wrapper">
        <div class="logo-box">
            <img src="assets/img/TrackerChild-1.png" alt="logo" class="logo">
        </div>
        <div class="form-content">
            <div class="para">Sign up for free</div>
            <form action="signup.php" class="form" method="GET">
                <input type="text" name="firstName" placeholder="First name">
                <input type="text" name="lastName" placeholder="Last name">
                <input type="email" name="mail" placeholder="E-mail">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirmPassword" placeholder="Confirm your password">
                <select name="country" id="country">
                    <option value="1">Uganda</option>
                    <option value="2">D.R.C</option>
                </select>
                <select name="typeAs" id="type">
                    <option value="">registering as</option>
                    <option value="parent">Parent</option>
                    <option value="child">Child</option>
                </select>
                <select name="gender" id="gender">
                    <option value="">your gender</option>
                    <option value="m">M</option>
                    <option value="f">F</option>
                </select>
                <button type="submit">Create an account</button>
            </form>
            <p><a href="index.php" class="haveAccount">I have an account already</a></p>
        </div>
    </div>

</body>

</html>
<?php
error_reporting(E_NOTICE ^ E_ALL);
// if (isset($_GET['firstName'], $_GET['lastName'], $_GET['Email'], $_GET['password'], $_GET['confirmPassword'], $_GET['country'], $_GET['typeAs'], $_GET['gender'])) {
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$email = $_GET['mail'];
$password = $_GET['password'];
$confirmPassword = $_GET['confirmPassword'];
$country = $_GET['country'];
$typeAs = $_GET['typeAs'];
$status = 1;
$gender = $_GET['gender'];


if ($typeAs === "parent") {
    $insert = mysqli_query($conect, "INSERT INTO parent( parent_id,parent_firstName,parent_lastName,parent_sexe,parent_mail,country_id,parent_password,parent_photo,parent_description,parent_phoneNumber,status_id,child_id,location_id,regNo  )
VALUES (
NULL , '$firstName', '$lastName', '$gender', '$email',$country, $password , NULL, NULL,NULL, $status,NULL,NULL,'N544'
)");
} elseif ($typeAs === "child") {
    $insert = mysqli_query($conect, "INSERT INTO child( child_id,child_firstName,child_lastName,child_sexe,child_mail,country_id,child_password,child_photo,child_desciption,child_phoneNumber,status_id,location_id,regNo  )
    VALUES (
    NULL , '$firstName', '$lastName', '$gender', '$email', 1 , '$password' , NULL, NULL,NULL, 1 ,NULL,'N433'
    )");
} else {
    return;
}
// }




// $insert = mysqli_query($conect, "insert into usertype(u_id,usertype) values(null,'" . $user . "')");

?>