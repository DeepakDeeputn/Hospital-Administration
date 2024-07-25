<?php
$db = mysqli_connect('localhost', 'username', 'password', 'database_name');

if (isset($_POST['book_appointment'])) {
 
  $doctor = mysqli_real_escape_string($db, $_POST['doctor']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $query = "SELECT * FROM appointments WHERE doctor='$doctor' AND time='$time'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) == 0) {
    
    $query = "INSERT INTO appointments (doctor, time) VALUES ('$doctor', '$time')";
    mysqli_query($db, $query);
    $success = "Appointment booked successfully!";
  } else {
    
    $error = "This time is not available for the selected doctor. Please choose a different time.";
  }
}

// Get the list of doctors from the database
$query = "SELECT * FROM doctors";
$doctors = mysqli_query($db, $query);

?>

