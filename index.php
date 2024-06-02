<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Visit Counter</title>
</head>
<body>
    <h1>Welcome!</h1>
    <?php
        $connect = mysqli_connect(
          'db',
          'cloud',
          'password',
          'cloud'
        );
    
        $table_name = "cloud_table";
        $query = "SELECT * FROM $table_name";
    
        // Execute the query and store the result in $response
        $response = mysqli_query($connect, $query);
    
        echo "<strong>$table_name:</strong>";
        while($row = mysqli_fetch_assoc($response)) {
          // Access data using $row instead of $i
          echo "<p>" . $row['title'] . "</p>";
          echo "<p>" . $row['body'] . "</p>";
          echo "<p>" . $row['data_created'] . "</p>";
          echo "<hr>";
        }
    
        // Close the connection (optional, but good practice)
        mysqli_close($connect);
    ?>
</body>
</html>