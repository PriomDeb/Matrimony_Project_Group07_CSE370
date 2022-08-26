<!-- <?php
echo "Report";
?> -->



<?php
include("includes/connect_database.php");


$logged_user_id= $_GET['logged_user_id'];
$other_user_id = $_GET['other_id'];

$sql = "INSERT INTO reported (user_1, reported_user) VALUES ($logged_user_id, $other_user_id)";




if (mysqli_query($connect,$sql)) {

    echo "<script> alert('⛔ You reported this user!');
    window.location.href='user_home.php?id={$logged_user_id}';
    </script>
    ";

} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

?>






















