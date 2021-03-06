<?php 

var_dump($_POST);
include("./connect_db.php");
include("./functions.php");

$email = sanitize($_POST['email']);
$password = sanitize($_POST["password"]);

if (empty($email) || empty($password)) //check of beide velden ingevuld zijn
{
    header("Location: ./index.php?content=message&alert=loginformempty");
}
else
{
    $sql = "SELECT * FROM `register` where email='$email'";
    echo "GEWELDIFG";
    $result = mysqli_query($conn, $sql);
    //var_dump( (bool) mysqli_num_rows($result) ); 
    if (!mysqli_num_rows($result))
    {
        // e mail not found
        header("Location: ./index.php?content=message&alert=emailnotfound");
    }
    else
    {
        $record = mysqli_fetch_assoc($result);

        //var_dump($record["activated"]);
        if(!$record["activated"]) 
        {
            header("Location: ./index.php?content=message&alert=notactivated&email='$email'");
        }
        elseif(!password_verify($password, $record["password"]))
        {
            header("Location: ./index.php?content=message&alert=passwordwrong");

            // var_dump($record["password"]); //gehasht password uit de database
            // var_dump($password);
            // var_dump(password_hash($password, PASSWORD_BCRYPT));

            // var_dump( password_verify($password, $record["password"]));
        }
        else
        {

            session_start();
            $_SESSION["id"] = $record["id"];
            $_SESSION["role"] = $record["role"];

            switch($record["role"])
            {//inlog succes
            case 'customer':
                header("Location: ./index.php?content=c-home");
            break;
            case 'root':
                header("Location: ./index.php?content=r-home");
            break;
            case 'admin':
                header("Location: ./index.php?content=a-home");
            break;
            case 'moderator':
                header("Location: ./index.php?content=m-home");
            break;
            default:
            header("Location: ./index.php?content=home");
            break;
            }
        }
    }

}
