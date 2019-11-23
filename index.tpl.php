<!DOCTYPE html>

<html lang = "en-us">
    <head>
       <meta charset = "utf-8">
       <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
       <title>PROCOMS</title>
       <link rel = "stylesheet" href = "static/index.css" type = "text/css">
    </head>

    <body>

    <main id = "main">
        <header class = "row">
            <div col = "col-12">
                <h3>Barbados Registration Authority</h3>
                <h3>Vehicle Registration Management System</h3>
            </div>
        </header>

        <section class = "row x">
              <div col = "col-12">
                <div style='color:red'>
                    <?php if(isset($errors)){
                        
                        if(!isset($errors['natl_id']) || !isset($errors['natl_id'])){
                            echo $errors[0];
                        }else{
                            echo $errors['natl_id'];
                            echo '<br />';
                            echo $errors['user_password'];
                        }
                        
                    }
                    ?>
                </div>
                    
                  <form id="form" action="index.php" method="POST" autocomplete = "off">
                   <label class = "label">National ID</label>
                   <input id = "natl_id" type = "text" name="natl_id" class="form_fields" placeholder = "National ID">
                    <br>
                    <p id="error_natlid">adas</p>
                    <br><br>
                   <label class = "label">Password</label>
                   <input id = "user_password" type = "password" name = "user_password"  class="form_fields" required>
                   <br>
                   <p id="error_password"></p>
                   <br><br>

                   <button id = "btn" type = "submit" name = "signIn" value = "Sign In">Sign In</button>  <br><br><br>
                    
                    
                    <p id = "status"></p>
                  
                   <a id = "forgot" href = "#forgot"> Forgot Password</a>

                 </form>
              </div>
        </section>
    </main>
    
    <!-- <script src = "scripts/index.js" type = "text/javascript"></script> -->
    <script src="static/index.js" type = "text/javascript"></script>
</body>
</html>
