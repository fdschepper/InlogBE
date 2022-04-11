<?php
    function sanitize($raw_data) {
        global $conn;
        $data = htmlspecialchars($raw_data);
        $data = mysqli_real_escape_string($conn, $data);
        $data = trim($data);
        return $data;
    }

    function is_authorized($userroles){
        if(!isset($_SESSION["id"]))
    {
       return header("Location: ./index.php?content=message&alert=hacker");
    }
    elseif( in_array( $_SESSION["role"], $userroles))
    {
       return header("Location: ./index.php?content=message&alert=success");
    }
    else
    {
        return true;
    }
    }
    
?>