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
                        <a href="contact.page.html" class="nav-link">Contacts</a>
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
                    <section class="mb-4">
                        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>
                        <div class="row">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
    </div>
</section>
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