<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="web-assets/css/styles.css">
</head>
<body>
<div class="main__body">

    <div class="head__section">
        <nav>
            <div class="navigation__logo">
                <h2>LOGO</h2>
            </div>
            <div class="navigation__items">
                <ul>
                    <li><a href="home.php">Home </a> </li>
                    <li><a href="about.php">About us </a> </li>
                    <li><a href="faq.php">FAQ's </a> </li>
                    <li><a href="contactUs.php">Contact Us </a> </li>
                    <li><a href="#" class="btn">Become a supplier </a> </li>
                    <li><a href="#" class="btn active">Post a FAQ </a> </li>
                    <li><a href="#" class="btn">Sign In </a> </li>
                </ul>
            </div>
            <div class="hambergMenu" onclick="navMenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="nav__items__mob">
                <div style="position : relative">
                    <ul>
                        <li><a href="home.php">Home </a> </li>
                        <li><a href="about.php">About us </a> </li>
                        <li><a href="faq.php">FAQ's </a> </li>
                        <li><a href="contactUs.php">Contact Us </a> </li>
                    </ul>
                    <ul id="mob">
                        <li><a href="#" class="btn btn-header">Become a supplier </a> </li>
                        <li><a href="#" class="btn btn-header active">Post a FAQ </a> </li>
                        <li><a href="#" class="btn btn-header">Sign In </a> </li>
                    </ul>
                    <div class="close" onclick="navMenu()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </nav>
