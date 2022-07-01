<?php 
include './inc/db.php';
include './inc/form.php';

?>



    <!--Navbar-->
    <div class="container">
    <?php include_once './inc/navbar.php' ?>
     </div>
     <div class="container">
      <?php include_once './inc/header.php'?>
     </div>
    
    <!--End Navbar-->


     <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5 mb-5 bg-dark opacity-50 text-white p-2  mt-5 ">

                        <p class="lead"> <h3 class="text-danger"><strong> PHP_And MY_Sql And_My_Security</strong></h3><br><h4>Skills :</h4></span><br> <span class="mt-5">Html | Css | Java Script | Bootstrap | Sass | PHP | Mysql | Securrity | React | SEO  |<br><br>reiciendis dignissimos ullam provident quasi, odio ut ducimus<br> voluptas at eum amet illo aspernatur sit! Vero exercitationem suscipit aliquid neque perspiciatis! ipsum,<br> dolor sit amet consectetur adipisicing elit. Error in provident quis earum enim sapiente sint obcaecati distinctio inventore deleniti, nihil voluptas eligendi repellendus ab modi facere id? Ad, modi totam molestiae iste animi voluptas molestias  </p>
                        <a href= "#" class="btn mt-3 text-light">More</a>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        
                        <img src= "./images/sas.jpeg" class="img-fluid h-100 w-100" >
                    </div>
                </div>
                

            </div>
        </div>
    </div>




    <!--Start The Form-->
    
           <!--StartBOX-->
           <div class="container">
            <?php include_once './inc/box.php'?>
           </div>
           
           <!--EndBox-->

    <div class="container bac">
      <h1>Contact Me :</h1>
    </div>
    <div class="container bac">
        <div class="row">
          <div class="col-sm">
            
            <form action = "index.php" method = "post">
              <div class="form py-1 mt-3 ms-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label>Enterd To The First Name</label>
               
                <input type="text" class="form-control" name= "firstName" id= "firstName" placeholder="Enter your Name" value = "<?php echo $firstName ?>" >
                 
                <div id="username" class="form-text"><?php echo $errors['firstNameError'] ?></div> 
              
              
              </div>
              </div>
              
              <div class="form py-1 mt-3 ms-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label>Enter The Second Name</label>
                <input type="text" class="form-control" name= "lastName" id= "lastName" placeholder="Enter The Last Name" value = "<?php echo $lastName ?>">
                <div id="emailHelp" class="form-text"><?php echo $errors['lastNameError'] ?></div>
              </div>
              </div>
              <div class="form py-1 mt-3 ms-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="email"  placeholder="Email" value = "<?php echo $email ?>">
                <div id="emailHelp" class="form-text"><?php echo $errors['emailError'] ?></div>
              </div>
              </div>
            
            
              <div class="container py-1 mt-3 ms-1 ">
                
                <button type="submit" class="btn btn-primary" name="submit" value= "send">send</button>
              
              </div>
            </form>
              </div>
          
           <div class="col-md">
           <img src= "./images/—Pngtree—contact our front desk_5412876.png" class="img-fluid w-100 h-100">
           </div>
        </div>
      </div>
         <?php include './inc/section.php'?>
      
          <!--End Form-->

          <!--footer Start-->
           <?php include_once './inc/footer.php'?> 
          
          <!--footer End-->
          

          <!--End Form-->
          <!--
          <form action = "index.php" method = "post">
            <input type= "text" name= "firstName" id= "firstName">
            <input type= "text" name= "lastName" id= "lastName">
            <input type= "text" name= "email" id= "email">
            <input type= "submit" name="submit" value= "send">
          </form>
          -->  
          <!--Start Footer-->
          <!--<div class = "container bg-dark text-light py-5 text-center">
            <h2>Hello In The World ..</h2>
            <h4>Welcome To the PHP_ And Mysql And Security_</h4>
            <h5>0781324406</h5>


          </div>
            

          