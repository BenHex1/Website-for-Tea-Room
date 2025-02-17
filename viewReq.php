<?php
    include 'conn.php'; //connects to localhost

    //selects the required collumns from the CT_expressedIntrest table and uses a join to get the category description rather than the catID
    $requests = $conn->query("SELECT forename, surname, postalAddress, mobileTelNo, email, sendMethod, catDesc FROM CT_expressedInterest JOIN CT_category ON CT_expressedInterest.catID = CT_category.catID ORDER BY surname asc;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- echo time(); is a function that causes the page to refresh as when the user submits a new entry for the database it must 
         create the table borders etc around the new entry and without this cookies would have to be manually cleared everytime -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav class="navbar">
        <span><img src="logo.png" alt="Logo"></span>
        <ul>
            <li><a href = "index.html">Home</a></li>
            <li><a href = "findMore.html">Find out more</a></li>
            <li><a href = "viewReq.php">View requests</a></li>
            <li><a href = "credits.html">Credits</a></li>
        </ul>
    </nav>
    
    <header class="homeHeader">
        <h1>Chollerton Tearooms</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Postal Address</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Send method</th>
                    <th>category</th>
                </tr>
            </thead>
            <tbody>
                <!-- Iterates through the array $requests which hold each row -->
                <?php 
                    while($row = $requests->fetch_object()){
                ?>
                <tr class="tableBody">
                    <!-- writes each value into each corresponding collumn -->
                    <!-- I set the forename and surname to be displayed into the same collumn rather than two seperate collumns -->
                    <td> <?php echo htmlspecialchars($row->forename . " " . $row->surname);?></td>
                    <td> <?php echo htmlspecialchars($row->postalAddress);?></td>
                    <td> <?php echo htmlspecialchars($row->mobileTelNo);?></td>
                    <td> <?php echo htmlspecialchars($row->email);?></td>
                    <td> <?php echo htmlspecialchars($row->sendMethod);?></td>
                    <td> <?php echo htmlspecialchars($row->catDesc);?></td> 
                </tr>
                <?php }?>
            </tbody>
        </table>
    </main>
    
</body>
</html>
