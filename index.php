<?php
/**
 * Create the registration page and functionality for the
 * vehicle registration system
 */
session_start();

 require 'config.php';
 require 'classes/Page.php';
 require 'classes/Model.php';
 require 'classes/AbstractView.php';
 require 'classes/IndexController.php';
 require 'classes/Validator.php';

 // create the Login/Index page object
 $login = new Index;
 // view indicates the HTML file to use and display
 $view = $login->makeView();

 // model stores all of our database queries
 $model = $login->makeModel();

 // check to see if the user has posted data to the form
 if (empty($_POST)) {
     //Check if user is logged in
    if(isset($_SESSION["authenticated_user"])){
        header('Location:console.php');
    }
     //Else display the login page
     $view->setTemplate('index.tpl.php');
     $view->display();
 }
 // data was posted so we must do the following
else {

    // die(
    // 'something happened'
    // );

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit();
    // 1. Validate the data if JavaScript didn't do it
    $validator = new Validator($_POST);
    $result = $validator->validate();
    // echo $result;
    // $result = false;
    // 2. If the data is invalid, get and display error messages
    if (!$result) { // validation failed, errors were generated
        $errors = $validator->getErrors();  // an array of strings
        // echo '<pre>';
        //                 print_r($errors);
        //                 echo '</pre>';
        //                 exit();
        $view->setTemplate('index.tpl.php');
        $view->addVar('errors', $errors);
        $view->addVars($_POST);
        $view->display();
    }
// 3. If the data is valid, update the database and go to next page
    else { 

        // echo 'data is valid';
        // header('Location:console.php');
        // exit();
        //Be sure to login the user by matching both national_id AND password
        if ($model->find('citizen', $_POST)) {
            
            // $_SESSION["natl_id"] = $_POST['natl_id']; 
            // $_SESSION["Name"] = "Ajay"; 
            header('Location:console.php');
        }
        else {
            // echo 'display an error';
            // exit();
            $view->setTemplate('index.tpl.php');
            //Display to the user that an error occurred
            // $view->addVar('errors', 'Invalid national id or password');
            $view->addVar('errors', array('Invalid national id or password'));

            $view->addVars($_POST); //Display to the user the incorrect they entered
            $view->display();            
        }
        
    } 
}


 
 // set the template file to use
 // $view->setTemplate('registration.html');
 // $view->display();