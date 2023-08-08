
  <!DOCTYPE html>
  <html>     
    <head>

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
    
    
    
      <div class="container-fluid">
        <!-- Navigation row -->
        <div class="row" style="border: 6px blue solid;" >
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container">
              <a class="navbar-brand" href="#">My Website</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="Home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Profile.html">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Hobbies.html">Hobbies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Contact.html">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
          
                </ul>
              </div>
            </div>
          </nav>      
        </div>
       
        </div>
       
        </div>
        <div class = "row" style="border: 4px greenyellow solid;" >
          <div class="col-md-6">
            <div class="row justify-content-center">                  
              <h2>Contact Us</h2>
              <form action="formhandler.php" method="post">
                <div class="mb-3">
                  <label>First Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="firstName">
                  
                </div>
                <div class="mb-3">
                  <label>Second Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="secondName">
                  
                </div>
                

                <div class="mb-3"> 
                  <label>Email</label>
                  <div>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="email">
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
  

