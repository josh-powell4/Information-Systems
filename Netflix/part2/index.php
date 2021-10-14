<html>
    <head>
      <title>Banks Web Page</title>  
    </head>

<body>
    
    <p><h2>This Page Demonstrates MySQL Connectivity</h2></p>
    <p><h5><u>List of Authors</u></h5></p>
    
    <?php
        $connection = mysqli_connect('localhost', 'root', '', 'booksdb');
        if ($connection->connect_error) die ($connection->connect_error);
        
        $author_query = "select * from authors";
        $result = mysqli_query($connection, $author_query);
        if (!result) die ($connection->error);
        
      
        $rows = $result->num_rows;
        
        for ($j = 0; $j < $rows; ++$j)
            {
                $result->data_seek($j);
                $row=$result->fetch_array(MYSQLI_BOTH);
                echo $row['authorid'].' ';
                echo $row['firstName'].' ';
                echo $row['lastName'].'<br>';
                
            }
    
  $result->close();
    
    ?>

</body>
</html>