<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Protocol Shop</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link href='https://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>-->
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
    <link href="custom_css.css" rel="stylesheet">
    <link href="slippry/dist/slippry.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <!-- first navbar with general categories -->
      <nav class="navbar navbar-default first-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img class="brand-img" src="myimages/vertical.jpg" alt="Smiley face"> </a>
          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">About us</a></li>
            </ul>
            <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
              <hr>
              <li><a href="#">Male</a></li>
              <li><a href="#">Female</a></li>
              <li><a href="#">Boy</a></li>
              <li><a href="#">Girl</a></li>
            </ul>
            <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
              <hr>
              <li>
                <form class="navbar-left container">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <!--<button type="submit" class="btn btn-default">Submit</button>-->
                </form>
              </li>
              <li><a href="#">Top Sellers</a></li>
              <li><a href="#">New Products</a></li>
              <li><a href="#">Hot Deals</a></li>
              <hr>
            </ul>
            <ul class="nav navbar-nav first-nav-right">
              <li><div class="popover__wrapper2">  <!-- Account-Login pop-up window -->
                    <a class="acc-log-link" href="#">Account/Login</a>
                    <div class="popover__content2 hidden-xs">
                     <p class="popover__message2">Log in</p>
                     <form>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                       </div>
                       <div class="checkbox">
                         <label>
                           <input type="checkbox"> Remain logged in
                         </label>
                       </div>
                       <button type="submit" class="btn btn-default">Login</button>
                      </form>
                      <br>
                      <div>
                        If you're not a member and want to buy, review or compare some of our fantastic products, please hit the button below.
                      </div>
                      <br>
                      <!-- Button trigger modal -->
                      <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#registerModal">Register</button>
                    </div>
                 </div> <!-- /Account-Login pop-up window -->
               </li>  <!-- Language pop-up window -->
              <li><div class="popover__wrapper3">  <!-- Language pop-up window -->
                    <a href="#"><img class="img-responsive uk-flag" src="myimages/uk-flag.png" alt="" /></a>
                    <div class="popover__content3 hidden-xs">
                     <p class="popover__message3">Choose Language</p>
                     <div class="item-in-cart">
                     <div>Greek</div>
                     <div>France</div>
                     <div>Belgium</div>
                     <div>Polska</div>
                     <div>Portugal</div>
                   </div>
                   </div>
                 </div> <!-- /Language pop-up window -->
               </li>  <!-- Language pop-up window -->
              <li><div class="popover__wrapper">  <!-- Cart pop-up window -->
                    <a href="#"><img class="img-responsive" src="myimages/cart.png" alt="" /></a>
                    <div class="popover__content hidden-xs">
                     <p class="popover__message">In the Cart</p>
                     <div class="item-in-cart">
                       <img src="myimages/shoe12.jpg" alt="Best-buy-shoe" class="img-responsive">
                       <p><b>Adidas</b></p>
                       <p>Gazelle Edition</p>
                       <p><b>80 &#8364;</b></p>
                       <hr>
                    </div>
                   </div>
                  </div>
               </li>  <!-- /Cart pop up window -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <!-- second navbar width product categories -->
      <nav class="navbar navbar-default second-navbar hidden-xs hidden-xs">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-11" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-11">
            <ul class="nav navbar-nav second-navbar-nav">
              <li><a href="#">Male<span class="sr-only">(current)</span></a></li>
              <li><a href="#">Female</a></li>
              <li><a href="#">Boy</a></li>
              <li><a href="#">Girl</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <!-- third navbar with general categories -->
      <nav class="navbar navbar-default third-navbar hidden-xs">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-111" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-111">
            <ul class="nav navbar-nav third-navbar-nav">
              <li>
                <form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <!--<button type="submit" class="btn btn-default">Submit</button>-->
                </form>
              </li>
              <li><a href="index.php">Top Sellers <span class="sr-only">(current)</span></a></li>
              <li><a href="#">New Products</a></li>
              <li><a href="#">Hot Deals</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <!-- hidden Modal -->
      <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Registration</h4>
            </div>
            <div class="modal-body">
              <h4>Personal Details</h4>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="E-mail*">
                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="Repeat E-mail*">
                </div>
              </div> <!-- /.row -->
              <div class="row register-space">
                <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="Password*">
                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="Repeat Password*">
                </div>
              </div> <!-- /.row -->
              <div class="row register-space" style="color:#808080;">
                <div class="col-lg-12">
                  <label class="control-label">Salutation* :</label>
                  <label class="radio-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Mr
                  </label>
                  <label class="radio-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option2"> Ms
                  </label>
                </div>
              </div> <!-- /.row -->
                <div class="row register-space">
                  <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Firstname*">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Lastname*">
                  </div>
                </div> <!-- /.row -->
                <div class="row register-space">
                  <div class="col-lg-12">
                    <input type="text" class="form-control" placeholder="Company/Organization">
                  </div>
                </div> <!-- /.row -->
                <div class="row register-space">
                  <div class="col-lg-12">
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div> <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12" style="text-align:justify;">
                    To ensure the prompt and safe delivery of your order and to avoid delivery problems, we need a telephone number that reaches you during the daytime.
                  </div>
                </div> <!-- /.row -->
                <div class="row register-space" style="color:#808080;">
                  <div class="col-lg-12">
                    Date of Birth:
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <select class="form-control">
                    <option value="" disabled selected>Day</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  </div>
                  <div class="col-lg-4">
                    <select class="form-control">
                    <option value="" disabled selected>Month</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                  </select>
                  </div>
                  <div class="col-lg-4">
                    <select class="form-control">
                    <option value="" disabled selected>Year</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                  </select>
                  </div>
                </div> <!-- /.row -->
                <div class="row register-space">
                  <div class="col-lg-9">
                    <input type="text" class="form-control" placeholder="Street*">
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Street Number*">
                  </div>
                </div> <!-- /.row -->
                <div class="row register-space" style="color:#808080;">
                  <div class="col-lg-12">
                  <select class="form-control">
                    <option value="" disabled selected>Land</option>
                    <option>France</option>
                    <option>Spain</option>
                    <option>Belgium</option>
                    <option>Greece</option>
                    <option>Bulgaria</option>
                  </select>
                  </div>
                </div> <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I want to subscribe to the Newsletter
                      </label>
                    </div>
                  </div>
                </div> <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12" style="text-align:justify;">
                    The newsletter informs you about new products and changes on Nintendo eShop. It may be cancelled at any time!
                  </div>
                </div> <!-- /.row -->
            </div> <!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div> <!-- / Modal -->


      <!-- Main Page Container -->
      <div class="container index-page-main">
      <div class="row">
