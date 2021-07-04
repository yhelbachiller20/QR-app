<?php

$id = isset($_GET['id']) ? "?id=" . $_GET['id'] : '';
if (isset($_COOKIE['user'])) {
    redirecToIndex($_COOKIE['user_type']);
}

$login_error = "";
$user_password_empty = "";
if (isset($_POST['btn_submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $user_password_empty = "Username or Password cannot be empty.";
        return;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('ss', $username, sha1($password));
    $statement->execute();
    $result = $statement->get_result()->fetch_assoc();
    if ($result == null) {
        $login_error = "Could not find user";
    } else {
        var_dump($result);
        //set 1hr cookie
        setcookie('user', $result['username'], time() + 3600);
        setcookie('user_type', $result['user_type'], time() + 3600);
        //redirect to clinic view / guard view
        if (!empty($id)) {
            header('Location: view_checklist.php' . $id);
            exit;
        }
        redirecToIndex($result['user_type']);
    }
    $statement->close();
    $conn->close();
}

function redirecToIndex($type) {
    if ($type == 10) {
        //clinic view
        header("Location: index_clinic.php");
    } elseif (v == 20) {
        //guard view
        header("Location: index_guard.php");
    }
}
