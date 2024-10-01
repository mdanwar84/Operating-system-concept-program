<<?php
  // Connect to the MySQL database
  $sql = mysqli_connect("localhost:3306", "root", "" , "restaurentms");

  // Check if the connection was successful
  if ($sql) {
      // Connection successful, you can perform database operations here

      // For example, you can execute a query
      $query = "SELECT * FROM admin";
      $result = mysqli_query($sql, $query);

      // Check if the query executed successfully
      if ($result) {
          // Fetch data from the result set
          while ($row = mysqli_fetch_assoc($result)) {
              // Process each row of data
              // For example, you can echo the data
              echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
          }
          // Free result set
          mysqli_free_result($result);
      } else {
          // Query execution failed
          echo "Error executing the query: " . mysqli_error($sql);
      }

      // Close the database connection
      mysqli_close($sql);
  } else {
      // Connection failed
      echo "Failed to connect to the database: " . mysqli_connect_error();
  }
  ?> 