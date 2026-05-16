<?php
$name = "Matt Cannon";
$job = "Branding Identity Designer";
$location = "based in NY";
$whatsapp = "628123456789";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Portfolio</title>

```
<!-- CSS -->
<link rel="stylesheet" href="style.css">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
```

</head>

<body>

<!-- NAVBAR -->

<header>
    <nav>
        <div class="left-menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Portfolio</a>
        </div>

```
    <div class="logo">*</div>

    <div class="social">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-behance"></i>
    </div>
</nav>
```

</header>

<!-- HERO -->

<section class="hero">

```
<div class="hero-image">
    <img src="bdull.jpg" alt="">
</div>

<div class="hero-text">
    <h1>I'm <?= $name ?></h1>

    <h2>
        <?= $job ?> <?= $location ?>
    </h2>

    <p>
        Saya adalah seorang designer dan web developer yang fokus pada
        tampilan modern, elegan, dan user friendly. Saya membuat website
        profesional dengan desain premium.
    </p>

    <!-- BUTTON -->
    <div class="buttons">

        <a href="https://wa.me/<?= $whatsapp ?>" target="_blank"
        class="btn whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
            WhatsApp Me
        </a>

        <a href="6281235552253" class="btn contact">
            Get In Touch
        </a>

    </div>

</div>
```

</section>

<!-- LINE -->

<div class="bottom-line"></div>

<script src="script.js"></script>

</body>
</html>
