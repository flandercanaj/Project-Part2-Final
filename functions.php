 


<?php 
include_once 'config.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertUser($users){

        $conn = $this->connection;

        $id = $users->getId();
        $email = $users->getEmail();
        $username = $users->getUsername();
        $password = $users->getPassword();

        $sql = "INSERT INTO users (id,email,username,password) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$email,$username,$password]);

        echo "<script> alert('User has been created successfuly :) !'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$email,$username,$password){
         $conn = $this->connection;

         $sql = "UPDATE users SET  email=?, username=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$email,$username,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
   
   
}

function isLoggedIn()
{
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}


function display_error() {
    global $errors;

    if (count($errors) > 0){
            echo '<div class="error">';
                    foreach ($errors as $error){
                            echo $error .'<br>';
                    }
            echo '</div>';
    }
}       




?>
