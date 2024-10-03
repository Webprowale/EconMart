<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EconMart -Control Room</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .badger {
            border-radius: 25px;
            background-color: #489988;
            color: #fff;
            padding: 0px 5px;
        }

        .btn-social {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            align-items: center;
            text-align: center;
            padding: 10px;
            margin: 5px;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper {
            display: flex;
        }

        footer {
            margin-top: auto;
            padding: 10px;
        }

        .main {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;

            min-width: 0;
        }

        #sidebar {
            width: 70px;
            min-width: 70px;
            z-index: 1000;
            transition: all .25s ease-in-out;
            background-color: #0e2238;
            display: flex;
            flex-direction: column;
        }

        #sidebar.expand {
            width: 260px;
            min-width: 260px;
        }

        .toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
            padding: 1rem 1.5rem;
        }

        .toggle-btn i {
            font-size: 1.5rem;
            color: #FFF;
        }

        .sidebar-logo {
            margin: auto 0;
        }

        .sidebar-logo a {
            color: #FFF;
            font-size: 1.15rem;
            font-weight: 600;
        }

        #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span {
            display: none;
        }

        #sidebar.expand .sidebar-logo,
        #sidebar.expand a.sidebar-link span {
            animation: fadeIn .25s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .sidebar-nav {
            padding: 2rem 0;
            flex: 1 1 auto;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #FFF;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i,
        .dropdown-item i {
            font-size: 1.1rem;
            margin-right: .75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, .075);
            border-left: 3px solid #3b7ddd;
        }

        .sidebar-item {
            position: relative;
        }

        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 70px;
            background-color: #0e2238;
            padding: 0;
            min-width: 15rem;
            display: none;
        }

        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
            display: block;
            max-height: 15em;
            width: 100%;
            opacity: 1;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;
        }

        .navbar {
            box-shadow: 0 0 2rem 0 rgba(33, 37, 41, .1);
        }

        .navbar-expand .navbar-collapse {
            min-width: 200px;
        }

        .avatar {
            height: 40px;
            width: 40px;
        }



        @media (min-width: 768px) {}
    </style>
</head>
<body class="tertiaryB">
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?=base_url() ?>">EconMart</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a class="sidebar-link nav" href="<?=base_url('control/product') ?>">
                    <i class="lni lni-producthunt"></i>
                        <span>All Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?=base_url('control/message') ?>">
                        <i class="lni lni-popup"></i>
                        <span>Message</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a class="sidebar-link" href="<?=base_url('control/logout') ?>">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="navbar-collapse collapse">
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputGroupFile04">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"><i class="lni lni-search-alt"></i></button>
                        </div>
                    </form>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <div class="card border-0  text-bg-danger bg-opacity-25">
                                    <div class="card-body py-4 text-dark">
                                        <h5 class="mb-2 fw-bold">
                                            User Progress
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                          <?= esc($userCount) ?>
                                        </p>
                                        <div class="mb-0">
                                            <span class="badger me-2">
                                                +9.0%
                                            </span>
                                            <span class=" fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4  my-2">
                                <div class="card  border-0  text-bg-warning bg-opacity-25">
                                    <div class="card-body py-4 text-dark">
                                        <h5 class="mb-2 fw-bold">
                                            Product Uploaded
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?= esc($productCount) ?>
                                        </p>
                                        <div class="mb-0">
                                            <span class="badger me-2">
                                                +9.0%
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4  my-2">
                                <div class="card border-0  text-bg-success bg-opacity-25">
                                    <div class="card-body py-4 text-dark">
                                        <h5 class="mb-2 fw-bold">
                                            Wallet balance
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        ₦<?= esc($walletBalance)?>
                                        </p>
                                        <div class="mb-0">
                                            <span class="badger me-2">
                                                +9.0%
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?= $this->renderSection('control') ?>
                    </div>
                </div>
            </main>
            <footer class="footer tertiaryB shadow text-center">
                <div class="text-center p-3 fw-semibold" style="background-color: rgba(0, 0, 0, 0.05);">
                    &copy;<span id="year"></span> Copyright:
                    <a class="text-body" href="https://webprowale.netlify.app/">Webprowale</a>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
        let year = document.getElementById('year');
        let date = new Date().getFullYear();
        year.innerHTML = date;


       

       
    </script>

</body>
</html>