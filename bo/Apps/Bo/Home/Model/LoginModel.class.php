<?php 
/**
* 
*/
class LoginModel extends Model
{
public function getIp(){
        echo $_SERVER['REMOTE_ADDR'];
    }
}
 ?>