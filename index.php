<?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    pre_r($_POST);
    pre_r($_GET);
    pre_r($_REQUEST);

    echo "<br>";
    if(isset($_POST['submit'])){
        echo "The Form is using POST methods <br>";
        echo "FirstName: ".$_POST['firstname']. "<br>";
        echo "LastName: ".$_POST['lastname']."<br>";
    }

    elseif(isset($_GET['submit'])){
        echo "The Form is using GET methods <br>";
        echo "FirstName: ".$_GET['firstname']. "<br>";
        echo "LastName: ".$_GET['lastname']."<br>";

    }

    ?>
    <form action="" method ="GET">
        <P>FirstName: <input type="text" name="firstname" vlaue=""></P>
        <P>LastName: <input type="text" name="lastname" vlaue=""></P>
        <input type="submit" name="submit" vlaue="Submit">
    </form>
    
</body>
</html>

/*
Editorial:: https://www.youtube.com/watch?v=Z9aePaXve6s
*/