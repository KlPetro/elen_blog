<?php
if (!empty($_POST)) {
    $sql = "INSERT INTO `users` (`username`, `lastname`, `password`) VALUES ('" . $_POST['username'] . "','" . $_POST['lastname'] . "','" . $_POST['password'] . "')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: /");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>


<form action="#" method="POST">
    <h1 class="h3 mb-3 fw-normal">Sing Up</h1>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" name="username" placeholder="Username">
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" name="lastname" placeholder="Lastname">
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="w-100 btn btn-small btn-primary" type="submit">Sign in</button>
</form>