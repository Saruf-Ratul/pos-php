<?php
require_once "Database.php";
require_once "Validator.php";
class User
{
    use Database, Validator;
    private string $table = 'users';

    protected function index():array
{
    $sql ="SELECT * FROM `{$this->table}` ORDER BY id ASC LIMIT 100;";
    $stmt = $this->connect()->query($sql);
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetchAll();
        $stmt = null;
        return $result;
    }else{
        return [];
    }
}

public function login($email, $password):string
{
    $sql ="SELECT * FROM `{$this->table}` WHERE email=:email LIMIT 1;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam('email', $email, PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        $result = $stmt->fetch();
          $stmt =null;
        $db_password = $result->password;
        if($this->check_hashed_passwords($password, $db_password))
        {
            $_SESSION['loggedIn_user'] = $result->username;
            $_SESSION['user_type'] = $result->userType;
            $_SESSION['loggedIn_email'] = $result->email;
            $_SESSION['loggedIn_ID'] = $result->id;
              $sql_ = "UPDATE `{$this->table}` SET login_datetime=NOW() WHERE email=:email LIMIT 1;";
              $stmt = $this->connect()->prepare($sql_);
               $stmt->bindParam('email', $email, PDO::PARAM_STR);
                $stmt->execute();
                if ($result->userType === 'Administrator'){
                     $_SESSION['user_type'] = "Admin";
                     $token = $this->generateToken(101);
                      $_SESSION['token'] = $token;
                    $dashboardPath ="admin/";
                }else{
                 $_SESSION['user_type'] = "Cashier";
                  $token = $this->generateToken(98);
                  $_SESSION['token'] = $token;
                $dashboardPath ="cashier/";
                     
                }

            //check for active loggedIn somewhere 
            $chk = "SELECT * FROM user_token_tbl WHERE email=:email LIMIT 1;";
             $stmt = $this->connect()->prepare($chk);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt->rowCount() > 0) {
                //user is already loggedIn somewhere, so change the session token
            $update_query = "UPDATE user_token_tbl SET token=:token WHERE email=:email LIMIT 1;";
              $stmt = $this->connect()->prepare($update_query);
            $stmt->bindParam('token', $token, PDO::PARAM_STR);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->execute();
             $stmt = null;
            }else{
            $insertToken = "INSERT INTO user_token_tbl (email,token) VALUES (:email,:token);";
             $stmt = $this->connect()->prepare($insertToken);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
             $stmt->bindParam('token', $token, PDO::PARAM_STR);
            $stmt->execute();
            $stmt = null;
            }
            $response = $this->toast("success", "Login successful!")."<script>
            setTimeout(function(){
             window.location.assign('".$dashboardPath."');
        },500);
        </script>";
        }else{
            $response = $this->toast("error", "Invalid credentials!");// 
        }
    }else{
        $response =  $this->toast("error", "Account details not found in our database!");// invalid account details
    }
    return $response;
}

    public function find($field, $value)
    {
        $sql ="SELECT * FROM `{$this->table}` WHERE `{$field}`=:field LIMIT 1;";
        $stmt = $this->connect()->prepare($sql);
       
        $type = gettype($value);
        $param_type = match ($type) {
            'integer' => PDO::PARAM_INT,
            'boolean' => PDO::PARAM_BOOL,
            default => PDO::PARAM_STR,
        };
        $stmt->bindParam('field', $value, $param_type);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $response = $stmt->fetch();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
    }

protected function logout_admin($session_id,$email):string
{

    $sql = "UPDATE `{$this->table}` SET `status`= 0, logout_datetime=now() WHERE id=:id LIMIT 1;";
         $stmt = $this->connect()->prepare($sql);
          $stmt->bindParam('id', $session_id, PDO::PARAM_INT);
          $stmt->execute();
          $statement = $this->connect()->prepare("UPDATE `user_token_tbl` SET token=NULL WHERE email=:email LIMIT 1");
                $statement->bindParam('email', $email, PDO::PARAM_STR);
          if ( $statement->execute()) {
            $statement =null;
            $response = "Logout successful";
          }else{
            $response = "Logout not successful";
          }
          return $response;
}

protected function logout_cashier($session_id,$email):string
{
        $sql = "UPDATE `{$this->table}` SET `status`= 0, logout_datetime=now() WHERE id=:id LIMIT 1;";
         $stmt = $this->connect()->prepare($sql);
          $stmt->bindParam('id', $session_id, PDO::PARAM_INT);
          $stmt->execute();
          $statement = $this->connect()->prepare("UPDATE `user_token_tbl` SET token=NULL WHERE email=:email LIMIT 1");
                $statement->bindParam('email', $email, PDO::PARAM_STR);
          if ($statement->execute()) {
            $statement =null;
            $response = "User Logout successful";
          }else{
            $response = "User logout not";
          }
          return $response;
}

public function isLoggedInUser()
    {
        if (!isset($_SESSION['loggedIn_ID']) || $_SESSION['loggedIn_ID'] === "") {
          return false;
        }else{
            return true;
        }
    }

    public function countAllUsers()
    {
        $query = "SELECT count(`id`) as totalUser FROM $this->table;";
        $stmt = $this->connect()->query($query);
        if ($stmt->rowCount() > 0) {
            $response = $stmt->fetch();
             $stmt =null;
            return $response->totalUser;
        }else{
            return 0;
        }
    }

    public function CreateUser($userType,$full_name,$email,$username,$password,$date)
    {
        $active = 1;
        $password = $this->encryptUserPassword($password);
        $query = "INSERT INTO $this->table (userType,full_name,email,username,password,active,created_at) VALUES (:userType,:full_name,:email,:username,:password,:active,:created_at);";
        $stmt = $this->connect()->prepare($query);
         $stmt->bindParam('userType', $userType, PDO::PARAM_STR);
         $stmt->bindParam('full_name', $full_name, PDO::PARAM_STR);
         $stmt->bindParam('email', $email, PDO::PARAM_STR);
         $stmt->bindParam('username', $username, PDO::PARAM_STR);
         $stmt->bindParam('password', $password, PDO::PARAM_STR);
         $stmt->bindParam('active', $active, PDO::PARAM_INT);
         $stmt->bindParam('created_at', $date, PDO::PARAM_STR);
         if ($stmt->execute()) {
            $stmt = null;
            return "Yes";
         }else{
            return "";
         }
    }

    public function checkTokenExists($email,$token):bool
    {
        if (!$this->isEmptyStr($email) && !$this->isEmptyStr($token)) {
            $query = "SELECT * FROM user_token_tbl WHERE email=:email AND token=:token LIMIT 1;";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
                 $stmt->bindParam('token', $token, PDO::PARAM_STR);
                 $stmt->execute();
                 if ($stmt->rowCount() > 0) {
                     //collect the current token from db
                $tokenRow = $stmt->fetch();
                $currentToken = $tokenRow->token;
                //compare the two tokens
                if ($token === $currentToken) {
                    //return false
                return true;
                }else{
                return false;
                }
                 }else{
            return false;
            }
        }
    }
}