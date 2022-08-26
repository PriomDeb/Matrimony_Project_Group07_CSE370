<!-- <?php
echo "Send interest";
?> -->

<?php
include("includes/connect_database.php");


$logged_user_id= $_GET['logged_user_id'];
$other_user_id = $_GET['other_id'];

$sql = "INSERT INTO send_interest (user_1, interest_on_user) VALUES ($logged_user_id, $other_user_id)";


if (mysqli_query($connect,$sql)) {

    echo "<script> alert('💝 Interest is sent!');
    window.location.href='visit_other.php?other_id={$other_user_id}&logged_user_id={$logged_user_id}';
    </script>
    ";

} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

?>







