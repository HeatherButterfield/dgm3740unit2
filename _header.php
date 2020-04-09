<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo($pageTitle); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

  <div class="headerWrapper">
    <header class="clearfix">
      <figure>
        <img class="logo" src="./images/logo1.png" alt="logo" srcset="./images/logo1.png 1x, ./images/logo2.png 2x, ./images/logo3.png 3x">
      </figure>
      <h1>Cabot Cruises</h1>
      <a id="headerTel" href="tel:123-456-7890">123-456-7890</a>
    </header>
  </div>

  <div class="navWrapper">
    <nav class="clearfix">
      <button id="hamburgerBtn"><span><i>&equiv;</i>OPEN</span> <span><i>&otimes;</i>CLOSE</span></button>
      <ul id="primaryNav">
          <li><a href="#">Home</a></li>
          <li class="current-menu-item"><a href="#">Cruises</a></li>
          <li class="parent"><a href="#">Agents</a>
              <ul>
                  <li><a href="#">Here</a></li>
                  <li><a href="#">There</a></li>
                  <li><a href="#">Everywhere</a></li>
              </ul>
          </li>
          <li><a href="#">Book</a></li>
      </ul>
      <div class="searchBar"><input type="search" id="searchInput" value="Search..."><i class="fas fa-search"></i></div>
    </nav>
  </div>
