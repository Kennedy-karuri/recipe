<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Recipe</title>
</head>
<body>
    <div class="homepage">
        <h1>WELCOME TO KEN'S SPECIAL RECIPIES</h1>
        <p>Food at its best.</p>
       

        <?php


if (!isset($_SESSION['username'])) {
    echo "Please login first <a href='login.html'> here </a>";
    exit;
}

if (isset($_GET['pageNumber']))
    $menuChoice = $_GET['pageNumber'];
else 
    $menuChoice = 3;

if ( $_SESSION['username']) {
    require_once 'showTopMenu.php';
   
    switch ($menuChoice) {
        case 1:
            require_once 'showSearchForm.php';    
            break;
        case 2:
            require_once 'showAddForm.php';
            break;
        case 3:
            require_once 'showMainWelcome.php';
            break;
            case 4:
                require_once 'ShowAdminPage.php';
                break; 
                case 5:
                    require_once 'ShowUserAdminPage.php';
                    break;  
                    case 6:
                        require_once 'ShowCommentsAdminPage.php';
                        break;      
              
               
    } 
}
else {
    echo "<h1>Recipe Lister</h1>";
    echo "Please login first <a href='login.html'>Login here</a>";
    exit;
}












?>
 

       </div>
</body>
</html>