<?php
session_start();
include_once('connect.php');

if($_POST['action'] == 'login'){
    login_user();
}

function login_user(){
    

    $username = strip_tags($_POST['username']);

    $password = md5(strip_tags($_POST['password']));

    $user = find_user_by_username($username);

    
    if ($password == $user['password']) {
    //if ($user && password_verify($password, $user['password'])) {

        // prevent session fixation attack
        session_regenerate_id();

        // set username in the session
        $_SESSION['username'] = $user['email'];
        $_SESSION['user_id']  = $user['adminID'];
        $_SESSION['user_is_logged_in']  = true;


        echo $_SESSION['user_is_logged_in'];

        exit;
    }

    echo 'dfs ddsds'. $_SESSION['username'];

}

function find_user_by_username($username){

    $conn = connect_to_db();

    if($conn){

        $query = "SELECT * FROM `admin_tbl` WHERE `email` = '$username'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                return $row;

            }

        } else {

            echo "0 results";

        }

        $conn->close();

    }else{
        echo "Error: Could not connect to DB";
    }

}
?>