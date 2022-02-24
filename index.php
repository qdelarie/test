<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Practice</title>
</head>
<body>
    <nav class="nav-bg navbar navbar-expand-lg navbar-light" 
    style="background-color: rgb(207, 204, 204);">
        <div class="container">
            <a href="index.php" class="navbar-brand">Web Practice</a>
            <button class="navbar-toggler" 
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.page.php" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.page.php" class="nav-link">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse navmenu" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <?php
                        if(isset($_SESSION["userid"]))
                        {
                    ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><?php echo $_SESSION["useruid"]; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="includes/login.inc.php" class="nav-link">LOGOUT</a>
                        </li>
                    <?php
                        }
                        else
                        {
                    ?>
                        <li class="nav-item">
                            <a href="signup.page.php" class="nav-link">SIGN UP</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.page.php" class="nav-link">LOGIN</a>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>       
    </nav>
    <section class="text-dark p-5 text-center text-sm-start" style="background-color:rgb(250, 240, 240);">
        <div class="container">
            <div class="d-sm-flex">
                <div>
                    <h1>The Prices are <span class="text-danger">Low</span>, 
                    <span class="text-danger">Now</span> Don't be 
                    <span class="text-danger">Slow</span></h1>
                    <p class="lead my-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        In recusandae temporibus autem nam cum dolore neque, dolor, 
                        fugit libero ab quo quae distinctio illo atque impedit ex dignissimos. At, fugit.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container mb-5 mt-5">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/macbook.jpg" alt="" class="rounded" width="160">
                            <h5>MacBook Pro M1</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$1,599</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/corsair.jpg" alt="" class="rounded" width="210">
                            <h5>Corsair K55 RGB</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$79.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/logitech.jpg" alt="" class="rounded" width="120">
                            <h5>Logitech G300S</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$49.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/asus.jpg" alt="" class="rounded" width="170">
                            <h5>ASUS ROG Strix G15</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$1,199.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/samsung.jpg" alt="" class="rounded" width="75">
                            <h5>Samsung Odyssey G7</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$799.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/ram.jpg" alt="" class="rounded" width="160">
                            <h5>G.SKILL Trident Z RGB</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$111.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/ssd.jpg" alt="" class="rounded" width="120">
                            <h5>ADATA Ultimate SU650</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$26.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/power.jpg" alt="" class="rounded" width="180">
                            <h5>Corsair CX Series 750 Watt</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$99.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="align-items-center p-2 text-center">
                            <img src="images/headset.jpg" alt="" class="rounded" width="110">
                            <h5>Corsair Gaming Void RGB</h5>
                            <div class="mt-3 info">
                                <span class="text1 d-block">
                                    Lorem ipsum dolor sit, amet consectetur
                                </span>
                                <span class="text1">
                                    Lorem ipsum, dolor
                                </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span>$129.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center text-white mt-3 cursor" style="background-color:rgb(250, 240, 240);"> 
                            <button type="submit" name="addtocart" class="text-uppercase" style="background-color:rgb(250, 240, 240);" >Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="p-2 text-dark text-center position-relative" style="background-color:rgb(207, 204, 204);">
        <div class="container">
            <p class="lead">Copyright &copy; 2002 Web Practice</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>  
</body>
</html>