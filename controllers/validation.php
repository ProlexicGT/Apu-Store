<?php

class validation
{
    public function fname($fname, &$errors){
        if (strlen($fname)>1 && strlen($fname)<26) {
            if (preg_match('/^[a-zA-Z ]+$/', $fname)) {
                return;
            }
            else {
                $errors[] = "First name must only contain letters!";
            }
        }
        else {
            $errors[] = "First name must be between 1 and 26 letters long!";
        }
    }

    public function lname($lname, &$errors){
        if (strlen($lname)>1 && strlen($lname)<26) {
            if (ctype_alpha($lname)) {
                return;
            }
            else {
                $errors[] = "Last name must only contain letters!";
            }
        }
        else {
            $errors[] = "Last name must be between 1 and 26 letters long!";
        }
    }

    public function email($email, &$errors){
        if (strlen($email)>6 && strlen($email)<26) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return;
            }
            else {
                $errors[] = "Not a valid email address!";
            }
        }
        else {
            $errors[] = "Email must be between 6 and 26 characters long!";
        }
    }

    public function password($password, &$errors){
        if (strlen($password)>8 && strlen($password)<20) {
            return;
        }
        else {
            $errors[] = "Password must be between 8 and 20 characters long!";
        }
    }

    public function cpassword($password, $cpassword, &$errors){
        if (strlen($cpassword)>8 && strlen($cpassword)<20) {
            if ($password === $cpassword) {
                return;
            }
            else {
                $errors[] = "Passwords do not match!";
            }
        }
        else {
            $errors[] = "Password must be between 8 and 20 characters long!";
        }
    }
}