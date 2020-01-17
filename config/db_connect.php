<?php

  // connection to the database
  $conn = mysqli_connect('localhost', 'iyke', 'C00ljoe.', 'pizza_shop');

  // check connection
  if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

?>