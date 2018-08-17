<?php

require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"];
    $user_id = $_SESSION['user_id'];

    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>
