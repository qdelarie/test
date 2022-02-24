<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
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
            <div class="d-sm-flex justify-content-center">
                <div class="p-3" style="background-color: white;">
                    <form action="includes/signup.inc.php" method="post">
                        <table class="text-center">
                            <tr>
                                <td><input type="text" name="uid" placeholder="Username"></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="pwd" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="pwdrepeat" placeholder="Reapet Password"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="email" placeholder="E-mail"></td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="submit">SIGN UP</button></td>
                            </tr>
                        </table>
                    </form>
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