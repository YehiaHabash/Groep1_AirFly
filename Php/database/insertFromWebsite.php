<form action="index.php" method="POST">
    <label for="username">
        <p>username</p>
        <input type="text" placeholder="Username" name="username">
    </label>
    <label for="password">
        <p>password</p>
        <input type="password" placeholder="Password" name="password">
    </label>
    <label for="email">
        <p>email</p>
        <input type="email" placeholder="Email" name="email">
    </label>
    <label for="birthdate">
        <p>birth date</p>
        <input type="date" name="birthdate">
    </label>
    <br>
    <br>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    echo "hello world";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birthDate = $_POST['birthdate'];
    $userRole = 2;
    $createdOn = date("Y/m/d");
    $modifiedOn = date("Y/m/d");

    $sql = "INSERT INTO Users
(userName,
passWord,
email,
birthdate,
userRole,
created_on,
modified_on)
VALUES(
'$username',
'$password',
'$email',
'$birthDate',
'$userRole',
'$createdOn',
'$modifiedOn')";

    $result = mysqli_query($conn, $sql);
    header("location: index.php");
    if (!$result) {
        echo "Query error";
        mysqli_close($conn);

    }
}
?>