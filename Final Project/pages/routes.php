<?php

$path = "index.php?page=welcome";


$nav=<<<HTML
    <nav>
        <ul>
            <li><a href="index.php?page=welcome">Welcome</a></li>
            <li><a href="index.php?page=addContact">Add Contact</a></li>
            <li><a href="index.php?page=deleteContacts">Delete contact(s)</a></li>
            <li><a href="index.php?page=addAdmin">Add Admin</a></li>
            <li><a href="index.php?page=deleteAdmin">Delete Admin(s)</a></li>
        </ul>
    </nav>
HTML;

if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        $result = init();
    }

    else if($_GET['page'] === "deleteAdmin"){
        require_once('pages/deleteAdmin.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        require_once('pages/welcome.php');
        $result = init();

    }

    else {
        //header('Location: http://russet.php?page=form');
        header('location: '.$path);
    }
}

else {
    //header('Location: http://198.199.80.235/cps276/cps276_assignments/assignment10_final_project/solution/index.php?page=form');
    header('location: '.$path);
}



?>
