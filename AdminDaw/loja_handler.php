<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Handler</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--EXTERNAL STYLE-->
    <link rel="stylesheet" href="http://localhost/AdminDaw/style.css">

</head>

<body>
    <main class="flex-container">
        <aside class="sidebar p-4 shadow-sm border-end border-1 sticky-top">
            <div class="my-4">
                <img src="http://localhost/AdminDaw/assets/logo3.png" alt="Admin of Daw" class="d-inline-block align-text-center logo">
                <span class="text-uppercase fw-bold"><span>Admin</span><span class="logo-color">of</span>Daw</span>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/AdminDaw/loja.php"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-list-alt"></i> <span>Orders</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-boxes"></i> <span>Stock</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-chart-bar"></i> <span>Sales</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-question-circle"></i>
                        <span>Helpdesk</span></a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li>
                    <hr class="dropdown-divider opacity-25">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> <span>Settings</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-folder"></i> <span>Files</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-id-badge"></i> <span>License</span></a>
                </li>
            </ul>
        </aside>

        <section class="main-content">
            <header>
                <nav class="navbar bg-white align-items-center shadow-sm">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary btn-sm" type="submit">Search</button>
                        </form>
                        <ul class="nav d-flex justify-content-end main-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="far fa-bell"><span class="position-absolute notif-badge top-2 start-85 translate-middle badge rounded-pill bg-danger">
                                            9
                                            <span class="visually-hidden">unread messages</span>
                                    </i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><span class="fw-bold ps-3">Notifications</span></li>
                                    <li class="opacity-25">
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-3" href="#"><img src="http://localhost/AdminDaw/assets/notif1.jpg" alt="Kiko Admin" id="notif1" class="d-inline-block align-text-center rounded-circle me-2">
                                            Kiko shared a file.</a>
                                    </li>
                                    <li class="opacity-25">
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-3" href="#"><img src="http://localhost/AdminDaw/assets/notif2.jpg" alt="Maggy Admin" id="notif1" class="d-inline-block align-text-center rounded-circle me-2">
                                            Margarida updated a contract.</a>
                                    </li>
                                    <li class="opacity-25">
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-3" href="#"><i class="fas fa-box-open d-inline-block align-text-center rounded-circle p-2 me-2"></i>
                                            New items added to stock!</a>
                                    </li>
                                    <li class="opacity-25">
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-3" href="#"><img src="http://localhost/AdminDaw/assets/notif4.jpg" alt="Maggy Admin" id="notif1" class="d-inline-block align-text-center rounded-circle me-2">
                                            New author acquired!</a>
                                    </li>
                                    <li class="opacity-25">
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="item-green"><a class="dropdown-item text-center fw-bold" href="#">View
                                            all</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-cog"></i> </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="http://localhost/AdminDaw/assets/admin.jpg" alt="Cat Admin" id="admin-img" class="img-fluid rounded-circle">
                                </a>
                                <ul class="dropdown-menu dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="content p-4">
                <h3 class="mb-4">Stock</h3>

                <div class="card mb-5 border-top-0 border-end-0 border-bottom-0 border-2 border-warning">
                    <div class="card-body p-5">
                        <h5 class="card-title">Stock change!</h5>
                        <p class="card-text">You've just made a change in stock, check out what books we're currently storing.</p>
                    </div>
                </div>

                <?php

                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $db = "livrariadaw";


                $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $mysql->error);

                mysqli_select_db($con, "livrariadaw");

                if (isset($_POST["btn-add"])) {
                    $id = $_POST["bookID"];
                    $name = $_POST["bookName"];
                    $author = $_POST["bookAuthor"];
                    $price = $_POST["bookPrice"];
                    $qt = $_POST["bookQuant"];


                    $exists = "SELECT ID FROM livros WHERE ID = $id";
                    $check_exists = mysqli_query($con, $exists);


                    if ($check_exists->num_rows == 0) {
                        $bookadd = "INSERT INTO `livros` (`ID`, `Name`, `Author`, `Price`, `Quantity`) VALUES ('$id', '$name', '$author', '$price', '$qt')";
                        $insert = mysqli_query($con, $bookadd);
                        echo "<b><h4 style='color:green; text-align:center;'>Book added to stock!</h4></b>";
                    } else {
                        echo "<b><h4 style='color:green; text-align:center;'>Book already in stock!</h4></b>";
                    }
                } else if (isset($_POST["btn-remove"])) {

                    $idr = $_POST["bookIDr"];

                    $exists = "SELECT ID FROM livros WHERE ID = $idr";
                    $check_exists = mysqli_query($con, $exists);

                    if ($check_exists->num_rows == 0) {
                        echo "<b><h4 style='color:red; text-align:center;'>Book not in stock!</h4></b>";
                    } else {
                        $bookremove = "DELETE FROM livros WHERE ID = $idr";
                        $delete = mysqli_query($con, $bookremove);
                        echo "<b><h4 style='color:red; text-align:center;'>Book deleted from stock!</h4></b>";
                    }
                }

                $sql = "SELECT * FROM livros ORDER BY ID";


                $result = mysqli_query($con, $sql);
                if (!mysqli_query($con, $sql)) {
                    die('Error: ' . mysqli_error($con));
                }

                ?>

                <div class="card p-3 align-items-center">
                    <div class="card-body ">
                        <?php
                        if ($result->num_rows > 0) {
                            echo "<table id='table'><tr>";
                            $field = $result->fetch_fields();

                            foreach ($field as $col) {
                                echo "<th style='padding-right:20px;'>" . $col->name . "</th>";
                            }
                            echo "</tr>";

                            while ($row = $result->fetch_row()) {
                                echo "<tr>";

                                for ($i = 0; $i < $result->field_count; $i++) {
                                    echo "<td style='padding-right:30px;'>" . $row[$i] . "</td>";
                                }

                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "<b><h6 style='color:red; text-align:center;'>We have no stock :(</h6></b>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-outline-secondary fw-bold ms-4 btn-sm" onclick="window.location.href='http://localhost/AdminDaw/loja.php';"><i class="fas fa-angle-left me-1"></i>Back</button>
            <div class="container">
                <footer class="py-3 my-4">
                    <p class="text-center text-muted border-top pt-3 opacity-75">&copy; Brought to you by Margarida Oliveira, Francisco Grazina, & Catarina Nabais.</p>
                </footer>
            </div>
        </section>
    </main>

    <!--BOOSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>




</body>

</html>