<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?
    $menuItems = array(
        'Home' => '1',
        'Contacts' => '2',
        'About' => '3',
        'Project' => '4',
        'Map' => '5'
    );
    //require_once("pages/menu.php");
    include_once("pages/menu.php");
    if(isset($_GET["page"]))
    $page=$_GET["page"];
    else 
    $page=1;
    ?>
    <header>
        <?
        include_once("pages/menu.php");
        Menu($menuItems);
        ?>
    </header>
    <section>
        <?
        switch($page){
            case 1: include_once("pages/home.php");
            break;
            case 2: include_once("pages/contacts.php");
            break;
            case 3: include_once("pages/about.php");
            break;
            case 4: include_once("pages/project.php");
            break;
            case 5: include_once("pages/map.php");
            break;
            default: echo "<div>Not found page</div>";
            break;
        }
        ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>