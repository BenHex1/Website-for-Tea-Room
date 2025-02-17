<?php 

//connects to the database
$conn = new mysqli('localhost', 'unn_w22011554', 'Cheese 69', 'unn_w22011554');
if ($conn === false) {
    echo '<p>sorry the connection failed</p>';
    echo '<p>The error was: ' . $conn->connect_error . '</p>';
    exit;
}

//$conn = new mysqli('newnumyspace.co.uk', 'unn_w22011554', 'Cheese 69', 'unn_w22011554');
//$conn = new mysqli('localhost', 'root', '', 'teadb');
?>