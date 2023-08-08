
  <!DOCTYPE html>
  <html>     
    <head>
    <?php
include "nav.html";
?>
         <style>
      .grid{
        width: 500px;
        height:500px;
        float:right;
        margin-bottom: 160px;
        margin-top: 10px;
      
      }
      img{
         width: 500px;
        height:500px;
        float:right;
        margin-bottom: 160px;
        margin-top: 10px;
        
      }
      </style>
      <link rel="stylesheet" href="C:\Users\STUDENT\Documents\Day2\Bootstrap\css\bootstrap.min.css"/>
        <link rel="stylesheet" href="C:\Users\STUDENT\Desktop\Timothy\Assignment 1\Bootstrap\css\bootstrap.min.css"/>
    </head>
    <body >
            <?php
            if(isset($GET["id"])&& is_numeric($GET["id"])){
              $id = $GET["id"];
               require_once "connecting.php";
              $question = "SELECT * FROM registration WHERE id = ?";
              $statement = mysqli_prepare($dbconnect,$question);
              mysqli_stmt_bind_param($statement, "i", $id);
              mysqli_stmt_execute($statement);
              $result = mysqli_stmt_get_result($statement);
              $data = mysqli_fetch_assoc($result);
  
              echo $data["firstName"];
           
          

         ?>
    
        <div class = "row" style="border: 4px greenyellow solid;" >
          <div class="col-md-6">
            <div class="row justify-content-center">                  
              <h2>Contact Us</h2>
              <form action="formhandler.php" method="post">
                <div class="mb-3">
                 
                  <label>First Name</label>
                  <input type="text" class="form-control" id="name" 
                  placeholder="Enter your name" name="firstName" value="<?php echo $data["firstName"];?>" />
                  
                </div>
                <div class="mb-3">
                  <label>Second Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="secondName"value = "<?php echo $data["secondName"];?>" >
                  
                </div>
                

                <div class="mb-3"> 
                  <label>Email</label>
                  <div>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="email" value = "<?php echo $data["email"];?>">
                  </div> 
                </div>
                
                <div class="mb-3">
                  
                  <label>Telephone</label>
                  <div>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="telephone">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-success">Send Message</button>       
              </form>

              <?php
            }
?>
            </div>
          </div>
          <div class="col-md-6">
            <!-- <div class="grid" style="border: 1px black solid;"> -->
              <img src="C:\Users\STUDENT\Desktop\Timothy\Assignment 1\travel3.jpeg" alt="My image"/>
            <!-- </div> -->

          </div>

              
              
             
              
            </div>
          </div>
        </div>
       
        <!-- Footer-row -->
        <div class="row" style="border: 4px red solid;">
          <footer class="bg-dark text-light py-3">
            <div class="container text-center">
              <p> &copy;2023 My website. All rights reserved.</p>
            </div>
          </footer>
        </div>
      </div>
    </body>
</html>
  






