<?php session_start();
include ("config.php");

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM `student` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);

    if($result) {
        $_SESSION['status'] = "Student record deleted successfully!";
        $_SESSION['status_code'] = "success";
    } else {
        $_SESSION['status'] = "Error deleting student record";
        $_SESSION['status_code'] = "error";
    }

    header("Location: index.php");
    exit();
}
?>
