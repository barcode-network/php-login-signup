<?php
/**
 * Create the registration page and functionality for the
 * vehicle registration system
 */

 require 'config.php';
 require 'classes/Page.php';
 require 'classes/Model.php';
 require 'classes/AbstractView.php';
 require 'classes/RegistrationController.php';
 require 'classes/Validator.php';

 // create the registration page object
 $registration = new Registration;
 // view indicates the HTML file to use and display
 $view = $registration->makeView();

 // model stores all of our database queries
 $model = $registration->makeModel();

 // check to see if the user has posted data to the form
 if (empty($_POST)) {
     $view->setTemplate('registration.tpl.php');
     $view->display();
 }
 // data was posted so we must do the following
else {
    // 1. Validate the data if JavaScript didn't do it
    $validator = new Validator($_POST);
    $result = $validator->validate();
    // 2. If the data is invalid, get and display error messages
    if (!$result) { // validation failed, errors were generated
        $errors = $validator->getErrors();  // an array of strings
        $view->setTemplate('registration.tpl.php');
        $view->addVar('errors', $errors);
        $view->addVars($_POST);
        $view->display();
    }
// 3. If the data is valid, update the database and go to next page
    else { 
        $model->add('citizen', $_POST);
        header('Location:process.php');
    } 
}


 
 // set the template file to use
 // $view->setTemplate('registration.html');
 // $view->display();