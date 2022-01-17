<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<!-- <Navbar> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid d-flex flex-row flex-lg-row-reverse">

    <!-- <Searchbar-&-Button> -->
    <div class="d-flex flex-row justify-content-around col-10 col-md-11 col-lg-6">
      <form class="w-75">
        <input class="form-control me-2" type="search" placeholder="Typ om te zoeken in de website" aria-label="Search">
      </form>
      <button type="button" class="btn tickets-knop">Koop Tickets</button>
    </div>
    <!-- </Searchbar-&-Button> -->

    <!-- <Menu-items> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-2 col-md-1 col-lg-6" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 d-flex flex-lg-row justify-content-lg-around w-100">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bezoek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentoonstelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
    <!-- </Menu-items> -->

  </div>
</nav>
<!-- </Navbar> -->
