<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sasilka</title>
    <link rel="shortcut icon" href="<?= $page !== "home" ? "." : '' ?>./assets/img/site-logo.webp"
        type="image/x-icon" />
    <link rel="stylesheet" href="<?= $page !== "home" ? "." : '' ?>./assets/css/style.css" />
</head>

<body>
    <!-- Navigation Section -->
    <nav>
        <section class="container">
            <section class="navbar">
                <section class="brand">
                    <a class="brand-logo" href="#">
                        <img src="<?= $page !== "home" ? "." : '' ?>./assets/img/site-logo.webp" alt="Site Logo" />
                    </a>
                    <p class="brand-text">Sasilka Day Care Center</p>
                </section>
                <ul class="nav-links">
                    <li><a class="<?= $page == "home" ? "active" : '' ?>"
                            href="<?= $page !== "home" ? "." : '' ?>./">Home</a></li>
                    <li><a class="<?= $page == "about" ? "active" : '' ?>"
                            href="<?= $page !== "home" ? "." : '' ?>./about">About</a></li>
                    <li><a class="<?= $page == "programs" ? "active" : '' ?>"
                            href="<?= $page !== "home" ? "." : '' ?>./programs">Programs</a></li>
                    <li><a class="<?= $page == "get-involved" ? "active" : '' ?>"
                            href="<?= $page !== "home" ? "." : '' ?>./get-involved">Get Involved</a></li>
                    <li><a class="<?= $page == "contact" ? "active" : '' ?>"
                            href="<?= $page !== "home" ? "." : '' ?>./contact">Contact</a></li>
                </ul>
                <section onclick="toggleMenu()" class="hamburger-menu">
                    <img src="<?= $page !== "home" ? "." : '' ?>./assets/img/hamburger-menu.svg" alt="" />
                </section>
            </section>
        </section>
    </nav>