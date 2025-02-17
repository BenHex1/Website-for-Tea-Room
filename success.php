<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <span><img src="logo.png" alt="Logo"></span>
        <ul>
            <li><a href = "index.html">home</a></li>
            <li><a href = "findMore.html">find out more</a></li>
            <li><a href = "viewReq.php">view requests</a></li>
            <li><a href = "credits.html">credits</a></li>
        </ul>
    </nav>
    
    <header class="homeHeader">
        <h1>Success</h1>
    </header>
    <main>
        <h2>
            Your request has been successfully submitted!
        </h2>
        <p> 
            <!-- htmlspecialchars is used to combat cross-site-scripting as it turns the html special characters to html entries-->
            Forename:
            <?php echo htmlspecialchars($_GET['firstName']); ?>
        </p>
        <p> 
            Surname:
            <?php echo htmlspecialchars($_GET['lastName']); ?>
        </p>
        <p> 
            Postal address:
            <?php echo htmlspecialchars($_GET['postAddress']); ?>
        </p>
        <p> 
            Phone number:
            <?php echo htmlspecialchars($_GET['phoneNum']); ?>
        </p>
        <p> 
            Email:
            <?php echo htmlspecialchars($_GET['email']); ?>
        </p>
        <p> 
            Send method:
            <?php echo htmlspecialchars($_GET['sendMethod']); ?>
        </p>
        <p> 
            Category:
            <?php echo htmlspecialchars($_GET['category']); ?>
        </p>
    </main>
    
</body>
</html>
