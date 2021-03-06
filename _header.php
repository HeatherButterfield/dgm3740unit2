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
          <li class="navItem home"><a href="index.php">Home</a></li>
          <li class="navItem cruise"><a href="cruise.php">Cruises</a></li>
          <li class="parent agentMain"><a href="#">Agents</a>
              <ul>
                  <li class="navItem agent"><a href="agent1.php">Max Donoghue</a></li>
                  <li class="navItem agent"><a href="agent2.php">Kelly Green</a></li>
              </ul>
          </li>
          <li class="navItem book"><a href="book.php">Book</a></li>
      </ul>
      <div class="searchBar"><input type="search" id="searchInput" value="Search..."><i class="fas fa-search"></i></div>
    </nav>
  </div>
