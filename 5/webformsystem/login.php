<?php  
require 'config/config.php';
require 'includes/login_handler/login_handler.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style type="text/css">

        .water{
            width:400px;
            height: 400px;
            background-color: skyblue;
            border-radius: 50%;
            position: relative;
            box-shadow: inset 0 0 30px 0 rgba(0,0,0,.5), 0 4px 10px 0 rgba(0,0,0,.5);
            overflow: hidden;
        }
        .water:before, .water:after{
            content:'';
            position: absolute;
            width:400px;
            height: 400px;
            top:-150px;
            background-color: #fff;
        }
        .water:before{
            border-radius: 45%;
            background:rgba(255,255,255,.7);
            animation:wave 5s linear infinite;
        }
        .water:after{
            border-radius: 35%;
            background:rgba(255,255,255,.3);
            animation:wave 5s linear infinite;
        }
        @keyframes wave{
            0%{
                transform: rotate(0);
            }
            100%{
                transform: rotate(360deg);
            }
        }
    </style>
  </head>
  <body>


  
    <div class="container-fluid" style="background-color: snow;">
      <div class="row" style="padding-top:10%">

        <div class="col-md-4"></div>


        <div class="col-md-4" style="background-color:white;border-radius: 20px;">
          

          <div class="row">

            <div class="col-md-12" style="text-align:center;padding-top: 10px;">
               <span style="font-weight: 100; font-size: 18; "><h1>Welcome to Jaba</h1> </span>
            </div>

            <div class="col-md-12">
              <form method="post" action="">

                <div class="col-md-12" style="text-align: left;font-size: 14px;padding: 10px 20px 10px 20px;">
                  <label>Email</label>
                  <input type="email" name="email" placeholder="Email" class="form-control">
                </div>

                 <div class="col-md-12" style="text-align: left;font-size: 14px;padding: 10px 20px 10px 20px;">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>


                <div class="col-md-12" style="text-align: left;font-size: 14px;padding: 10px 20px 10px 20px;">
                  <button type="submit" name="submit" class="btn btn-primary  btn-block">Login</button>
                </div>

              </form>
            </div>
          
          </div>

        </div>


        <div class="col-md-4" ></div>

      </div>


  </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>