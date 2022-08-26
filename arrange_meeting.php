<!-- <?php
echo $_GET['meeting_date_time'];
?> -->

<?php
include("includes/connect_database.php");


$logged_user_id = $_POST['logged_id'];
$other_user_id = $_POST['other_id'];
$date_time = $_POST['meeting_date_time'];

$date = substr($date_time, 0, 10);
$time = substr($date_time, 11).":00";
$meeting_datetime = $date." ".$time;


$sql = "INSERT INTO meetings (user_1, user_2, meeting_date_time) VALUES ($logged_user_id, $other_user_id, '$meeting_datetime')";


if (mysqli_query($connect,$sql)) {

    echo "<script> alert('Meeting arrangement date and time is added in our database. Our employees will contact both partners soon!');
    window.location.href='visit_other.php?other_id={$other_user_id}&logged_user_id={$logged_user_id}';
    </script>
    ";

} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

?>







