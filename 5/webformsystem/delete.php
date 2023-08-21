
<?php
include("includes/header.php");






if(isset($_GET['fomid'])){

  $id=$_GET['fomid'];

  $query=mysqli_query($con,"SELECT * FROM form_data WHERE ID='$id'");
  $cat=mysqli_fetch_array($query);
}






if(isset($_POST['submit'])){
  
 $post= new Fom($con,$userLoggedIn);
  $post->delForm($_POST['id'],
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

      <div class="row mt-20" >

          <div class="col-md-12" style="text-align: center;">

              <span style="font-weight: 100; font-size: 30px; padding: 20px 0px 20px 0px;">
                
                 Are you sure you want to Delete form ID :  <?php echo $cat['formID'];?> 
              </span><br>

          </div>

           

      </div>

    </div>


    <div class="container ">
        <div class="row mt-20">
            <div class="col-md-5"></div>

             <div class="col-md-2">
               
              
                <form action="" method="POST">
                  
                <input type="text" name="id"  value="<?php echo $_GET['fomid'];?>" hidden>
                   <a href="form_list.php"><button type="button"  name="submit" class="btn btn-primary">Return</button><a/>
                 <button type="button"  name="submit" class="btn btn-danger">Delete</button>
                </form>


            </div>
             </div>

              <div class="col-md-5"></div>
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