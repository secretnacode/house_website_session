<?php
    // checking if you already logged in, if not youll go back to log in page
    session_start();
    if(empty($_SESSION["username"]) && empty($_SESSION["password"])){
        header("location: ./admin_log_in_form.php?bad_msg=You need to log in FIRST!!");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./design.css">

    <style>

    /* navigation bar style */
    #header {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        height: 40px;
        padding: 20px;
        background-color: transparent;
        color: white;
        position: fixed;
        width: 100%;
        z-index: 10;
        transition: background-color 1s ease-in;
    }

    #header.scrolled{
        background-color: black;
    }

    #header nav {
        display: flex;
    }
        

    #header nav ul {
        display: flex;
        flex-direction: row;
        list-style: none;
        justify-content: flex-end;
        margin-right: 25px;
    }

    #header nav ul li a {
        margin: 10px;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1.7px;
        text-decoration: none;
        color: white;
        padding-bottom: 5px;
    }

    #header nav ul li a:hover{
        border-bottom: 1px solid white;
    }
    
    #admin{
        margin: 0 10px;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1.7px;
        padding-bottom: 5px;
        cursor: pointer;
    }

    #container{
        position: relative;
    }

    #container:hover #content{
        cursor: pointer;
        display: block;
    }

    #content{
        position: absolute;
        background-color: white;
        min-width: max-content;
        transform: translateX(-40%);
        display: none;
        border-radius: 5px;
    }

    #content a, #content form{
        display: flex;
        flex-direction: column;
        align-items: center;
        color: black;
        text-decoration: none;
        padding: 5px 8px; 
        font-size: 15px;
    }

    #content a{
        border-bottom: 1px solid black;
    }

    #content a:nth-of-type(1){
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    #content form{
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    #content form input{
        border: none;
        background-color: white;
        cursor: pointer;
        background-color: transparent;
    }

    #content a:hover, #content form:hover{
        background-color: lightsteelblue;
    }

    </style>

</head>
<body>
    <!-- for navigation bar -->
    <div id="header">
        <h1>Houses.com</h1>

        <!-- for the shortcuts/links -->
        <nav>
            <ul>
                <li><a href="#aTagHomeLink">Homes</a></li>
                <li><a href="#aTagLocationLink">Locations</a></li>
                <li><a href="#">Reservations</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <div id="container">
                    <li id="admin">Admin</li>
                    <div id="content">
                        <a href="admin_house_info.php">House Info</a>
                        <a href="">Interior Design</a>
                        <a href="">Contact Info</a>
                        <a href="">User Messages</a>
                        <a href="">Admin</a>
                        <form action="./admin_log_in_form.php" method="post">
                            <input type="submit" name="log_out" value="Log Out" class="log_out">
                        </form>
                    </div>
                </div>
            </ul>
        </nav>
    </div>

    <!-- sliding images for the back ground in landing page -->
    <?php include("./included_files/home_page_bgslidding.php")?>

    <!-- main content of the web page -->
    <?php include("./included_files/homes.php")?>
</body>
</html>