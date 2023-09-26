<?php
include_once "init.php";
include_once "Utils.php";

Trait Validator
{
    use Database;

    public function validate($data): string
    {
        if(!$this->isEmptyStr($data)){
            $str = trim($data);
            //$str = strip_tags($str);
            $str = stripslashes($str);
            $str = htmlspecialchars($str);
            return $str;
        }else{
            return '';
        }
    }

/*   public function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/

    public function isEmptyStr($string): bool
    {
        return empty($string) == true;
    }
    public  function redirect(string $path): void
    {
        // echo '<script type="text/javascript">window.location.assign("'.$this->app_root().$path.'");</script>';
        if(!$this->isEmptyStr($path)) {
            header("Location:".self::app_root().$path);
            exit();
        }
    }
    public static function app_root():string
    {
        return APP_ROOT;
    }

    public function alert(string $type, string $message =""):string
    {
        if($type ==""){
            $alert_type = "danger";
        }else{
            $alert_type =$type;
        }
        return '<div class="alert alert-'.$alert_type.' alert-dismissible fade show" role="alert"><strong>'.$message.'</strong></div>';
    }

    public static function showME():string 
    {
       
        $a = "edoK";
        $b = "edaM";
        $c = "yzaE";
        $d = strrev($a).strrev($b).strrev($c);
        return $d;
    }

    public function generateToken($len)
    {
        $generator = new Utils();

        //$tokenLength = 50;
        $serial = $generator->generate($len);
        return $serial;
    }

    public function toast($type="", $msg="",$title="SERVER RESPONSE") 
    {
        $response ='<script>toastr.'.$type.'("'.$msg.'", "'.$title.'");</script>';
        return $response;
    }

public function generate_invoice_num ($input, $pad_len = 7, $prefix = null) {
    if ($pad_len <= strlen($input))
        trigger_error("<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number", E_USER_ERROR);

    if (is_string($prefix))
        return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));

    return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    /*
    // Returns input with 7 zeros padded on the left
    echo generate_invoice_num(1); // Output: 0000001

// Returns input with 10 zeros padded
    echo generate_invoice_num(1, 10); // Output: 0000000001

// Returns input with prefixed F- along with 7 zeros padded
    echo generate_invoice_num(1, 7, "F-"); // Output: F-0000001

// Returns input with prefixed F- along with 10 zeros padded
    echo generate_invoice_num(1, 10, "F-"); // Output: F-0000000001
     */
}


}