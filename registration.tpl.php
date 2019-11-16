<!DOCTYPE html>

<html lang = "en-us">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>PROCOMS</title>
        <link rel = "stylesheet" href = "static/new.css" type = "text/css">
    </head>

    <body id = "body" >

        <main id = "main">

        <header class = "row ">
            <div class = "col-10 title">
                <h3>Barbados Revenue Authority</h3>   
            </div>
             <!--Hamburger Menu -->
            <div class = "col-2"> 
                <div class = "nav">
                    <label id = "label" for = "toggle">&#9776;</label>
                    <input type = "checkbox" id = "toggle">
                    <div class = "hlinks">
                       <a href="#">Account</a>
                       <a href="#">Settings</a>
                       <a id = "logout" href="#">Logout</a>
                    </div>
                </div>     
            </div>

         </header>
                    
        <div class = "row user">
            <div class = "col-6">
                <h4 id = "userHeader"> </h4>
            </div>

            <div class = "col-6">
                <h4 id = "userRole"> </h4>
            </div>
        </div>

        <div class = "row user">
            <div class = "col-12">
                <h4>New Driver</h4>
            </div>
        </div>


        <section class = "row">
           <div class = "col-12">
             <form id = "form" action = "registration.php" method = "POST" autocomplete = "off">
              <h5>All fields required</h5>
              <?php
              if (isset($errors) && !empty($errors)): ?>
                <ul>
              <?php
                foreach ($errors as $err_msg): ?>
                   <li><?php echo $err_msg ?></li>
              <?php 
                endforeach; ?>
                </ul>
            <?php
            endif; ?>
              <label>National ID:</label>
              <input id = "sid" type = "text" name = "natl_id" 
                value = "<?php if (isset($natl_id)): echo $natl_id; endif; ?>"
               <?php 
                if (isset($errors['natl_id'])): ?>
                     class = "err" 
                <?php endif; ?> > &nbsp;
        <span class = "result" id = "id">
    <?php if (isset($errors['natl_id'])): echo $errors['natl_id']; endif; ?></span>
              <br><br>

              <label>License Number:</label>
              <input id = "license_num" type = "text" name = "license_num"
               value = "<?php if (isset($license_num)): echo $license_num; endif; ?>"
               <?php 
                if (isset($errors['license_num'])): ?>
                     class = "err" 
                <?php endif; ?> > &nbsp;
        <span class = "result" id = "license_id">
    <?php if (isset($errors['license_num'])): echo $errors['license_num']; endif; ?></span>
              <br><br>
              
              <label>Firstname:</label>
              <input id = "fname" type = "text" name = "first_name"> &nbsp;
              <span class = "result" id = "firstName"></span>
              <br><br>

              <label>Lastname:</label>
              <input id = "lname" type = "text" name = "last_name">&nbsp; 
              <span class = "result" id = "lastName"></span>
              <br><br>

              <label>Email:</label>
              <input id = "eMail" type = "email" name = "email" value = "<?php if (isset($email)): echo $email; endif; ?>"> &nbsp;
              <span class = "result" id = "email"></span>
              <br><br>

              <label>Telephone:</label>
              <input id = "tel1" type = "text" size="3" maxlength="3" name = "telephone[]"> &nbsp; - &nbsp;
              <input id = "tel2" type = "text" size ="6" maxlength="4" name = "telephone[]">
              <span class = "result" id = "tel12"></span>
              <br><br>
              
              <label>Address 1:</label>
              <input id = "Address" class = "add" type = "text" name = "addr[]">&nbsp;
              <span class = "result" id = "address"></span> 
              <br><br>
              <label>Address 2:</label>
              <input id = "Address2" class = "add" type = "text" name = "addr[]">&nbsp;
              <span class = "result" id = "address"></span> 
              <br><br>
              <input type="hidden" name="validation_done_by_js" value="">
              <label>Parish:</label>
               <select id = "parish">
                   <option value = "St. Michael">St. Michael</option>
                   <option value = "St. George">St. George</option>
                   <option value = "St. Thomas">St. Thomas</option>
               </select>
              <br><br>

              <p id = "status"></p>

              <button id = "add" class = "btn" type = "submit" name = "add_driver" value = "add">Add</button> &nbsp; &nbsp;

              <button class= "btn" type = "submit" name = "cancel_add" value = "cancel">Cancel</button>

            </form>

           </div>
        </section>
        </main>

        <script src = "../scripts/new.js"></script>

    </body>
</html>