<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Admin</title>

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
                    <a class="nav-link" href="http://localhost/AdminDaw/loja_handler.php"><i class="fas fa-boxes"></i> <span>Stock</span></a>
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
                <h3 class="mb-4">Dashboard</h3>

                <div class="card mb-5 border-top-0 border-end-0 border-bottom-0 border-2 border-info">
                    <div class="card-body p-5">
                        <h5 class="card-title">Welcome, admin!</h5>
                        <p class="card-text">Welcome to Admin of Daw, your go-to administrator app for all things.</p>
                    </div>
                </div>


                <div class="row stat-cards mb-4">
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <p class="text-muted">Total Sales</p>
                                <h5 class="card-title">€2,000</h5>
                                <p class="card-text ct-green">↑ 70%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <p class="text-muted">Expenses</p>
                                <h5 class="card-title">€500</h5>
                                <p class="card-text ct-green">↓ 10%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <p class="text-muted">Contracts</p>
                                <h5 class="card-title">34</h5>
                                <p class="card-text ct-green">Open</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <p class="text-muted">Invoices</p>
                                <h5 class="card-title">30</h5>
                                <p class="card-text ct-green">New</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container px-4 mb-5">
                <div class="row">
                    <div class="col">
                        <div class="card border-1 shadow-sm">
                            <div class="card-header"><i class="fas fa-plus-circle me-2 text-muted"></i><span class="text-muted">Add books</span></div>
                            <div class="card-body text-success">
                                <h5 class="card-title">Add books to stock</h5>
                                <p class="card-text">
                                <form action="loja_handler.php" method="POST">
                                    <div class="mb-3">
                                        <label for="bookID" class="form-label">ID</label>
                                        <input type="number" class="form-control" id="bookID" name="bookID">
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="bookName" name="bookName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookAuthor" class="form-label">Author</label>
                                        <input type="text" class="form-control" id="bookAuthor" name="bookAuthor">
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookPrice" class="form-label">Price</label>
                                        <input type="number" step="0.01" class="form-control" id="bookPrice" name="bookPrice">
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookQuant" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="bookQuant" name="bookQuant">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-sm" name="btn-add">Submit</button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-1 shadow-sm">
                            <div class="card-header"><i class="fas fa-times-circle me-2 text-muted"></i><span class="text-muted">Remove books</span>

                            </div>
                            <div class="card-body text-danger">
                                <h5 class="card-title">Remove books from stock</h5>
                                <p class="card-text">
                                <form action="loja_handler.php" method="POST">
                                    <div class="mb-3">
                                        <label for="bookIDr" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="bookIDr" name="bookIDr">
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger btn-sm" name="btn-remove">Submit</button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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