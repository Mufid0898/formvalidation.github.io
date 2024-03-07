<?php
$namaa = $emaill = $genderr = "";

session_start();

if (isset($_SESSION['namaa'])) {
    $namaa = $_SESSION['namaa'];
}
if (isset($_SESSION['emaill'])) {
    $emaill = $_SESSION['emaill'];
}
if (isset($_SESSION['genderr'])) {
    $genderr = $_SESSION['genderr'];
}
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
</head>

<body>
    <h1>Form Validasi</h1>
    <form action="cek-valid.php" method="post">
        <table>
            <tr>
                <td>Nama: </td>
                <td>
                    <input type="text" name="nama">
                    <span style="color: red;">* <?= $namaa ?></span>
                </td>
            </tr>

            <tr>
                <td>Email: </td>
                <td>
                    <input type="email" name="email">
                    <span style="color: red;"> * <?= $emaill ?></span>
                </td>
            </tr>

            <td>Gender</td>

            <tr>

                <td>
                    <input type="radio" name="gender" id="gender">
                    <label>Male</label>
                </td>
                <td>
                    <input type="radio" name="gender" id="gender">
                    <label>Female</label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>