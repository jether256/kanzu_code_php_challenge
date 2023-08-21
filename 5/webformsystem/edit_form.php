

<?php
include("includes/header.php");






if(isset($_GET['fomid'])){

  $id=$_GET['fomid'];

  $query=mysqli_query($con,"SELECT * FROM form_data WHERE ID='$id'");
  $cat=mysqli_fetch_array($query);
}






if(isset($_POST['submit'])){
  
 $post= new Fom($con,$userLoggedIn);
  $post->upDateForm($_POST['org_nem'],$_POST['loc'],$_POST['f_nem'],$_POST['l_nem'],$_POST['age'],$_POST['children'],$_POST['married'],$_POST['tv'],$_POST['rad'],$_POST['car'],$_POST['fa_nem'],$_POST['ma_nem'],$_GET['fomid']
);
}
?>




        <!----navbar-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JBC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="forms.php">Forms</a>
        </li>

         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form_list.php">Data</a>
        </li>


         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="includes/handlers/logout.php">LogOut</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
    <!---navbar---->



    <div class="container">

      <div class="row">

          <div class="col-md-12" style="text-align: center;">

              <span style="font-weight: 100; font-size: 30px; padding: 20px 0px 20px 0px;">
                
                 Form ID: <?php echo $cat['formID'];?>   
              </span><br>

              Date completed: <?php echo $cat['date'];?> 


          </div>

           

      </div>

    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>

             <div class="col-md-8">
               
               <form action="" method="post" enctype="multipart/form-data">

                  <div class="row">


                      <div class="col-md-6 mb-3">
                        <label><strong>Organisation Name </strong></label>
                        <input type="text" name="org_nem" class="form-control" placeholder ="name"  value="<?php echo $cat['organisation'];?>">
                      </div>



                      <div class="col-md-6 mb-3">
                        <label><strong>Location</strong></label>
                        <input type="text" name="loc" class="form-control" placeholder ="location"  value="<?php echo $cat['location'];?>">
                      </div>




                     <div class="col-md-12 mb-3" style="text-align: center;">

                        <span style="font-weight: 100; font-size: 30px; padding: 20px 0px 20px 0px;">
                          
                            Personal Questions
                        </span>


                    </div>


                    <div class="col-md-6 mb-3">
                        <label><strong>First Name</strong></label>
                        <input type="text" name="f_nem" class="form-control" placeholder ="first name" value="<?php echo $cat['f_nem'];?>">
                      </div>


                      <div class="col-md-6 mb-3">
                        <label><strong>Last Name</strong></label>
                        <input type="text" name="l_nem" class="form-control" placeholder ="last name" value="<?php echo $cat['l_nem'];?>">
                      </div>


                        <div class="col-md-6 mb-3">
                        <label><strong>Age</strong></label>
                        <select name="age" class="input" required>
                          <option value="<?php echo $cat['age'];?>" selected><?php echo $cat['age'];?></option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                              </select>
                      </div>


                      <div class="col-md-6 mb-3">
                        <label><strong>Number of children</strong></label>
                        <select name="children" class="input" required>
                          <option value="<?php echo $cat['kids'];?>" selected><?php echo $cat['kids'];?></option>
                                  <option value="0">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                              </select>
                      </div>
                      


                  

                      <div class="col-md-6 mb-3">
                        <label><strong>Are you married?</strong></label>
                        <br>
                        <input type="checkbox" name="married" value="yes" <?php if($cat['mary']=='yes')echo 'checked';?>>
                      </div>


                       <div class="col-md-6 mb-3">
                        <label><strong>Do you have a Tv?</strong></label>
                        <br>
                        <input type="checkbox" name="tv" value="yes" <?php if($cat['mary']=='yes')echo 'checked';?>>
                      </div>


                       <div class="col-md-6 mb-3">
                        <label><strong>Do have a radio?</strong></label>
                        <br>
                        <input type="checkbox" name="rad" value="yes" <?php if($cat['mary']=='yes')echo 'checked';?>>
                      </div>


                       <div class="col-md-6 mb-3">
                        <label><strong>Do you have a car?</strong></label>
                        <br>
                        <input type="checkbox" name="car" value="yes" <?php if($cat['mary']=='yes')echo 'checked';?>>
                      </div>





                      <div class="col-md-6 mb-3">
                        <label><strong>Fathers Name</strong></label>
                        <input type="text" name="fa_nem" class="form-control" placeholder ="fathers name" value="<?php echo $cat['father'];?>">
                      </div>



                      <div class="col-md-6 mb-3">
                        <label><strong>Mothers Name</strong></label>
                        <input type="text" name="ma_nem" class="form-control" placeholder ="mothers name" value="<?php echo $cat['mother'];?>">
                      </div>




                      <div class="col-md-6 mb-3">
                     
                     <button type="submit" name="submit" class="btn btn-success  btn-block">update</button>
                      </div>




                  </div>
               </form>

                    <div class="container" style="text-align:center;font-weight: 100;font-size: 20px; bottom: 10px; position: fixed;">
                <span>All Rights Reserved</span>
            </div>
             </div>

              <div class="col-md-2"></div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>