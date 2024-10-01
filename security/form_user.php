<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$errors = [];

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}


if (!empty($_POST['submit'])) {

    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    if (empty($name)) {
        $errors['name'] = "Tên là bắt buộc.";
    } elseif (!preg_match('/^[A-Za-z0-9]+$/', $name)) {
        $errors['name'] = "Tên chỉ được chứa các ký tự chữ cái và số.";
    } elseif (strlen($name) < 5 || strlen($name) > 15) {
        $errors['name'] = "Tên phải có từ 5 đến 15 ký tự.";
    }
    if (empty($password)) {
        $errors['password'] = "Mật khẩu là bắt buộc.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        $errors['password'] = "Mật khẩu phải bao gồm ít nhất một chữ thường, một chữ hoa, một số và một ký tự đặc biệt (~!@#$%^&*()).";
    } elseif (strlen($password) < 5 || strlen($password) > 10) {
        $errors['password'] = "Mật khẩu phải có từ 5 đến 10 ký tự.";
    }

    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');

    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <div class="alert alert-danger" role="alert">
            <?php if (!empty($errors)) { ?>
            <?php foreach ($errors as $error) {
                    echo $error . "<br>";
                } ?>
            <?php } else { ?>
            User form
            <?php } ?>
        </div>

        <?php if ($user || !isset($_id)) { ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $_id ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name']))
                        echo $user[0]['name'] ?>'>

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">

            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
        <?php } ?>
    </div>
</body>

</html>