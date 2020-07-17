   <?php include ('db_conn.php');
  
   
   
   $message='';
   if(isset($_REQUEST['submit'])){
//       Checking for empty fields
       if(($_REQUEST['Name']=='' )|| ($_REQUEST['Email']=='') ||($_REQUEST['Password']=='' )){
          $message="<div class='alert alert-danger text-center'>Fill all fields</div>";
     } else{
//         checking mail is already exist or not
         
          $sq="SELECT r_email FROM Requester_login_tb WHERE r_email='".$_REQUEST['Email']."' " ;  
           $result=$conn->query($sq);
           if($result->num_rows > 0){
               
               $message="<div class='alert alert-danger text-center'>Email Alerady Registered</div>";
           }  else {
//  inserting data
     $name=$_REQUEST['Name'];
     $email=$_REQUEST['Email']  ;
     $pass=$_REQUEST['Password'];
     
     
       
       $sql="INSERT INTO Requester_login_tb (r_name,r_email,r_password)VALUES ('$name','$email','$pass')";
       
       $result=$conn->query($sql);
        $message="<div class='alert alert-primary text-center'>Inserted Success fully</div>";
      }
        }
       
   }
   
     
   
   ?> 


<section class="container   pt-5 mt-5 border-bottom" id="Registration" >
            <div class="bg-light p-5">
                <h1 class="text-center">REGISTRATION</h1>
                <p class="text-center">Create an Account</p>
            
            <div class="row slideanim">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-12 mx-auto bg-white p-3 ">
                    <?php echo $message?>
                    <form action="" method="post">
         <div class="form-group"><i class="fa fa-user"></i>
    <label for="email">Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Enter name" id="Name" value="">
  </div>
                        <div class="form-group"><i class="fa fa-user"></i>
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="Email" id="email">
  </div>
  <div class="form-group"><i class="fa fa-key"></i>
    <label for="pwd">New Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="Password" id="pwd">
  </div>

                        <button type="submit" class="btn btn-danger btn-block" name="submit" id="Submit">Submit</button>
</form>
            </div>
            
       </div>     
        </div>
                  </section>  