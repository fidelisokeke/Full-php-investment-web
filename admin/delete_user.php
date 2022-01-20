<?php
include '../includes/dbconn.php';

if (isset($_GET['delete'])) {
    $user_id_to_delete = $_GET['delete'];

    $query = "DELETE FROM users WHERE id = {$user_id_to_delete}";
    $delete_user_query = mysqli_query($conn, $query);

    if (!$delete_user_query) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        header("Location: admin.php");
        exit;
    }
}
?>
