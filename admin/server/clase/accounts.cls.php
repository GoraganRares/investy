<?php

require_once "../obiecte/autoloader.php";

class Accounts extends Db {

    public function login($email, $password) {

        if ( isset($_COOKIE['user']) ) return "Esti deja conectat";

        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();
        
        if ( empty($row) ) return "Email sau parola gresite";

        if ( $row['verify'] != "da" ) return "Contul nu a fost verificat";

        if ( $row['psw'] == "investy" && $password == "investy") { setCookie("user", $row['vkey'], time() + (86400 * 30), "/"); return "Te-ai autentificat cu success"; } 

        $pwdCheck = password_verify($password, $row['psw']);  

        if ( $pwdCheck == true ) { setCookie("user", $row['vkey'], time() + (86400 * 30), "/"); return "Te-ai autentificat cu success"; } 

        return "Email sau parola gresite";

    }

    public function register ($rol, $email, $psw, $re_psw) {

        $emailRe = '/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i';
        $passRe = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';

        if ( $rol == "select" ) return "Selecteaza un rol";

        if ( !preg_match( $emailRe, $email) ) return "Introduce-ti o adresa de email valida";

        if ( !preg_match( $passRe, $psw) ) return "Parola trebuie sa contina minim 8 caractere si macar o cifra";
        
        if ( $psw != $re_psw ) return "Parolele trebuie sa fie identice";

        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();

        if ( !empty($row) ) return "Exista deja un cont cu acest email";

        $hashedPwd = password_hash($psw, PASSWORD_DEFAULT);
        $vkey = md5(time().$email);

        $sql = "INSERT INTO accounts (rol, email, psw, vkey) VALUES ('$rol', '$email', '$hashedPwd', '$vkey')";
        $result = $this->connect()->prepare($sql);

        try {
            
            $result->execute();
            return "Contul a fost creat cu success";

        }catch (Exception $e) {

            return "A aparut o problema. Incearca iar";

        }

    }

    public function change ( $psw, $email, $vkey ) {

        $hashedPwd = password_hash($psw, PASSWORD_DEFAULT);

        $pwd_sql = ( $psw == "" ) ? "" : "psw = '$hashedPwd'";
        $email_sql = ( $email == "" ) ? "" : "email = '$email'";

        if ( $pwd_sql != "" && $email_sql != "" ) { 
            $pwd_sql .= "," ;
        }

        if ( $pwd_sql == "" && $email_sql == "" ) return "Nu exista date";

        $sql = "UPDATE accounts SET $pwd_sql $email_sql WHERE vkey = '$vkey'";
        $result = $this->connect()->prepare($sql);

        try {
            
            $result->execute();
            return "Datele au fost actualizate";

        }catch (Exception $e) {

            return "A aparut o problema. Incearca iar";

        }
    }

    public function register_client ( $username, $nume, $email, $telefon, $psw, $re_psw ) {

        $emailRe = '/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i';
        $passRe = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
        $telRe = '/^(\+4|)?(07[0-8]{1}[0-9]{1}|02[0-9]{2}|03[0-9]{2}){1}?(\s|\.|\-)?([0-9]{3}(\s|\.|\-|)){2}$/';

        if ( empty($username) ) return "Numele de utilizator este obligatoriu";

        if ( empty($nume) ) return "Numele este obligatoriu";

        if ( !preg_match( $emailRe, $email) ) return "Numele este obligatoriu";

        // if ( !preg_match( $telRe, $telefon) ) return "Introduce-ti un numar de telefon valid";

        if ( !preg_match( $passRe, $psw) ) return "Parola trebuie sa contina minim 8 caractere si macar o cifra";
        
        if ( $psw != $re_psw ) return "Parolele trebuie sa fie identice";

        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();

        if ( !empty($row) ) return "Exista deja un cont cu acest email";

        $hashedPwd = password_hash($psw, PASSWORD_DEFAULT);
        $vkey = md5(time().$email);

        $sql = "INSERT INTO accounts (rol, username, nume, email, telefon, psw, vkey) VALUES ('client', '$username', '$nume', '$email', '$telefon', '$hashedPwd', '$vkey')";
        $result = $this->connect()->prepare($sql);

        try {
            
            $result->execute();
            $emails = new Emails;
            $email_res = $emails->send_email("Activeaza-ti conutl", "Salut activeaza-ti contul", $email);

            $sql = "INSERT INTO userprofile (client) VALUE ('$vkey')";
            $result = $this->connect()->prepare($sql);

            if ( $email_res == "success" && $result->execute() ) return "Contul a fost creat cu success. Activeazal pe email";

            return "A aparut o problema. Incearca iar";

        }catch (Exception $e) {

            return "A aparut o problema. Incearca iar";

        }

    }

    public function get_recover_link ($email) {

        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();
        
        if ( empty($row) ) return "trimis";

        $emails = new Emails;
        $email_res = $emails->send_email("Recupereaza-ti parola", "Salut aici este link-ul de recuperare", $row['email']);

        if ( $email_res == "success" ) return "trimis";

    }

    public function recover_psw ($new_psw, $re_psw, $vkey) {

        $passRe = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';

        if ( !preg_match( $passRe, $new_psw) ) return "Parola trebuie sa contina minim 8 caractere si macar o cifra";
        
        if ( $new_psw != $re_psw ) return "Parolele trebuie sa fie identice";

        if ( !$vkey ) return "A aparut o eroare. Incearca iar";

        $hashedPwd = password_hash($new_psw, PASSWORD_DEFAULT);

        $sql = "UPDATE accounts SET psw = '$hashedPwd' WHERE vkey='$vkey'";
        $result = $this->connect()->prepare($sql);

        try {
            
            $result->execute();

            return "Parola a fost schimbata cu success";

        }catch (Exception $e) {

            return "A aparut o problema. Incearca iar";

        }

    }

    public function update_profil ($oras, $judet, $adresa, $limbi, $hoby, $studii, $experienta) {

        $client = $_COOKIE['user'];

        $sql = "UPDATE userprofile SET oras = 'Ă;Î;Â;Ș;Ț - ă;î;â;ș;ț', judet = '$judet', adresa = '$adresa', limbi = '$limbi', hoby = '$hoby', studii = '$studii', experienta = '$experienta' WHERE client='$client'";
        $result = $this->connect()->prepare($sql);

        if ( !$result->execute() ) return "A aparut o problema. Incearca iar";

        return "Ai actualizat datele cu success";
 
    }

}

// $account = new accounts;

// echo $account->register_client("Lema Paul", "lemapaul328@yahoo.com", "0767967335", "paulsiatat28", "paulsiatat28");
// echo $account->update_profil("Bucuresti", "Bucuresti", "Ghiorghe Iorga 6", "Engleza, Avansta; Romana, Nativ;", "Sportul", "Liceu", "2.5 ani ca programator");