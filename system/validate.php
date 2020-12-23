<?php

// fungsi pada login

function loginEmail(&$error, $field_name)
{
    if (empty($_POST[$field_name])) {
        $error = "email is required";
        // cek apakah email sesuai format
    } else if (!filter_var($_POST[$field_name], FILTER_VALIDATE_EMAIL)) {
        $error = "invalid email address";
    } else {
        $error = "";
    }
}
function loginPass(&$error, $field_name)
{
    if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "password is required!";
    } else {
        $error = "";
    }
}

function authacc($email, $password)
{
    include "connect.php";
    $statement = $db->prepare("SELECT * FROM users WHERE email_user = :email and password_user = SHA2(:password,0)");
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();

    return $statement->rowCount() > 0;
}
//fungsi required
function required(&$error, $field_name)
{
    if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "this field is required";
    } else {
        $error = "";
    }
}
//fungsi pada signup

function validEmail(&$error, $field_name)
{
    if (!filter_var($_POST[$field_name], FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address";
    } else if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "this field is required";
    } else {
        $error = "";
    }
}
function validUsername(&$error, $field_name)
{
    if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "this field is required";
    } else if (!ctype_alpha(str_replace(' ', '', $_POST[$field_name]))) {
        $error = "username must be Alphabet";
    } else {
        $error = "";
    }
}

function validPhone(&$error, $field_name)
{
    if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "this field is required";
    } else if (!is_numeric($_POST[$field_name])) {
        $error = " phone number Must be Numeric";
    } else if (!strlen($_POST[$field_name]) > 10 and (!strlen($_POST[$field_name]) < 13)) {
        $error = "must be valid number";
    } else {
        $error = "";
    }
}

function validPassword(&$error, $field_name)
{
    if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "This field is required";
    } else if (!strlen($_POST[$field_name]) > 7) {
        $error = "must be at least 8 characters";
    } else {
        $error = "";
    }
}
function validCpassword(&$error, $field_name, $temp)
{
    if (!isset($_POST[$field_name]) || empty($_POST[$field_name])) {
        $error = "this field is required";
    } else if (($_POST[$field_name] == $_POST[$temp])) {
        $error = "";
    } else {
        $error = "Your password and confirmation password do not match";
    }
}
