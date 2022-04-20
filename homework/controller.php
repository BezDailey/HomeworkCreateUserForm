<?php
    require_once('database.php');
    require_once('user_db.php');
    
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'show_login';
    }

    switch($action) {
        case'show_login':
            include('login.php');
            break;
        case'create_user':
            $first_name = filter_input(INPUT_POST, 'first_name');
            $last_name = filter_input(INPUT_POST, 'last_name');
            $password = filter_input(INPUT_POST, 'password');
            $username = filter_input(INPUT_POST, 'username');
            UserDB::create_user($username, $password, $last_name, $first_name);
            print("HACKER VOICE: I'M IN");
            include('login.php');
            break;
    }

?>