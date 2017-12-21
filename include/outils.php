<?php
session_start();
session_regenerate_id();

init_session();

require_once('config.exemple.php');
require_once('basedonner.php');
require_once('Acteurs.php');

// dump and die
function dd($var)
{
    var_dump($var);
    die();
}

function template($nom, $data = array())
{
    extract($data);
    require __DIR__ . '/../templates/' . $nom . '.php';
}

function lien($lien)
{
    return site . $lien;
}

function asset($path) {
    return lien('/public/' . $path);
}

// verifie si un lien contient un string
function lienContient($path = null)
{
    $url = $_SERVER['REQUEST_URI'];
    if($path == null)
        return ($path == '/' || $path == '/index.php');
    else {
        return strpos($url, $path);
    }
}

// pour la bar de naviagtion
// return 'active' c'est le url contient un string
function active($path = null)
{
    if(lienContient($path))
        return 'active';
    return '';
}

// select input
// return 'selected'
function select($param, $str, $default = false)
{
    if(
        (isset($_GET[$param]) && $_GET[$param] == $str)
        || $default
    )
        return 'selected';
    return '';
}


function upload_image($image, $destination) {
    $file_name  = $image['name'];
    $file_size  = $image['size'];
    $file_tmp   = $image['tmp_name'];
    $file_type  = $image['type'];
    
    $file_ext=strtolower(end(explode('.',$image['name'])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
        move_uploaded_file($file_tmp, $destination);
        return true;
    }else{
        return $errors;
    }
}



function pageProteger(){
    // if(isset($_SESSION['connecter']) && $_SESSION['connecter'] && isset($_SESSION['user_id'])){
    //     $employe = new Employers;
    //     $employe = $employe->trouver('id', $_SESSION['user_id']);
    //     return $employe;
    // }else{
    //     $_SESSION['connecter'] = false;
    //     $_SESSION['user_id'] = -1;
    //     header('Location:'. lien('/login.php'));
   
    // }
}

function init_session()
{
    
    
}


if(!lienContient('login.php')){
    $current_user = pageProteger();
}
