

<?php
include("includes/header.php");
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
                
                Welcome back <?php echo $user['username'];?>
              </span>

              <div class="row mt-5">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="row">

                          <div class="col-md-3" style="text-aligncenter;">
                            <a href="index.php" style="text-decoration:none; font-weight: 100;">
                              <img src="assets/images/dash.png" height="120px"><br>
                              Dashboard
                            </a>
                          </div>

                          <div class="col-md-3" style="text-aligncenter; ">
                            <a href="forms.php" style="text-decoration:none;font-weight: 100;">
                              <img src="assets/images/form.png" height="120px"><br>
                              Forms
                            </a>
                          </div>

                           <div class="col-md-3" style="text-aligncenter;">
                            <a href="form_list.php" style="text-decoration:none;font-weight: 100;">
                              <img src="assets/images/data.png" height="120px"><br>
                              Data
                            </a>
                          </div>

                          <div class="col-md-3" style="text-aligncenter;">
                            <a href="includes/handlers/logout.php" style="text-decoration:none;font-weight: 100;">
                              <img src="assets/images/exit.png" height="120px"><br>
                              Log Out
                            </a>
                          </div>


                        </div>
                    </div>
                </div>
              </div>



            

          </div>

           <div class="container" style="text-align:center;font-weight: 100;font-size: 20px; bottom: 10px; position: fixed;">
                <span>All Rights Reserved</span>
            </div>

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