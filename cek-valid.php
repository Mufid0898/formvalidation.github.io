<?php
if (isset($_POST['submit'])) {
    session_start();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $error = false;

    if ($nama == "") {
        $_SESSION['namaa'] = "Nama harus diisi";

        $error = true;
    }

    if ($email == "") {
        $_SESSION['emaill'] = "Email harus diisi";

        $error = true;
    }
    if ($email != "" && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emaill'] = "Email yang ada masukan tidak valid";

        $error = true;
    }
    if ($gender == "") {
        $_SESSION['genderr'] = "gender harus diisi";
        $error = true;
    }
    if ($error == true) {
        echo "error";
    } else {
        echo "Data berhasil diinput";
    }
}
