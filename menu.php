<?php

$user = 'root';
$pass = '';
$db = 'foodest';

$conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect")

// QUERY FOR DISHES ON THE MENU
$sql = 'SELECT * FROM menu_items ORDER BY id';
$result = mysqli_query($conn, $sql);
$menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="it" dir="Itr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">

  <!-- SELECTION MENU -->
  <scrpt src="https://kit.fontawesome.com/a076d05399.js"></scrpt>

  <!-- SOCIAL ICONS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- SCROLL TOP BUTTON  -->
  <script src="https://kit.fontawesome.com/be7a8437a1.js" crossorigin="anonymous"></script>

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="favicon.ico"/><title>Foodest Menu</title>
</head>

<body>

  <!-- HEADER -->

  <nav>
    <input type="checkbox" id="check">
    <!-- LOGO -->
    <label class="logo">
    <a href="index.html"><img src="logo.jpg" alt="" width="130px"></a>
    </label>
    <!-- SITE SECTIONS -->
    <ul class="site__sections">
      <li><a href="index.html">Home</a></li>
      <li><a class="active" href="menu.php">Menu</a></li>
      <li><a href="galleria.html">Galleria</a></li>
      <li><a href="contact.html">Contatti</a></li>
    </ul>
    <!-- MENU ICON -->
    <label for="check" class="checkbtn">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </nav>

  <div id="titolo">
    <h1>Scopri il nostro menu!</h1>
  </div>

  <!-- MENU FILTERS -->

  <div class="filters__component" id="filters__component">
    <div class="menu__filter activefilter" onclick="filterSelection('all')">all</div>
    <div class="filter__separator"> | </div>
    <div class="menu__filter" onclick="filterSelection('burger')">burger</div>
    <div class="filter__separator"> | </div>
    <div class="menu__filter" onclick="filterSelection('fritture')">fritture</div>
    <div class="filter__separator"> | </div>
    <div class="menu__filter" onclick="filterSelection('toast')">toast</div>
    <div class="filter__separator"> | </div>
    <div class="menu__filter" onclick="filterSelection('beer&wine')">beer & wine</div>
    <div class="filter__separator"> | </div>
    <div class="menu__filter" onclick="filterSelection('drink')">drink</div>
  </div>

  <!-- MENU  -->

  <div class="menu__component">

    <!-- MENU ITEMS  -->
    <div class="menu__container" id="menu__container">
      <?php foreach ($menu as $piatto) { ?>
        <div class="menu__content all show <?php echo htmlspecialchars($piatto['category']); ?>">
          <div class="menu__card">
            <img src="menu/<?php echo htmlspecialchars($piatto['name']); ?>.jpg" alt="<?php echo htmlspecialchars($piatto['name']); ?>" data-original="menu/<?php echo htmlspecialchars($piatto['name']); ?>.jpg" class="menu__img">
            <div>
              <h3 class="menu__name"><?php echo htmlspecialchars($piatto['name']); ?> </h3>
              <p class="menu__detail"><?php echo htmlspecialchars($piatto['ingredients']); ?></p>
              <p class="menu__price">€ <?php echo htmlspecialchars($piatto['price']); ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- SCRIPT FILTERED MENU  -->

  <script src="menu.js"></script>

  <!-- FOOTER -->

  <footer>
    <div class="footer-content">
      <h3>FoodEst</h3>
      <p>Mangiare in compagnia, sorseggiare del buon vino e ridere del nulla</p>
      <ul class="socials">
        <li><a href="https://it-it.facebook.com/andrea.basciani1"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/bascen_/?hl=it"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.tripadvisor.it/Restaurant_Review-g1467527-d7934486-Reviews-Beer_Condicio-Molfetta_Province_of_Bari_Puglia.html"><i class="fa fa-tripadvisor"></i></a></li>
        <li><a href="https://github.com/domenicodg783"><i class="fa fa-github"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>&copy2021 FOODEST | powered by WEB UNITED</p>
    </div>
  </footer>

  <!-- SCROLL TOP BUTTON  -->

  <a href="#" class="gotopbtn"><i class="fas fa-angle-up"></i></a>

</body>

</html>
