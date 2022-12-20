<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>JIHC</title>
  </head>
  <body class="green">
    <!--========== HEADER ==========-->
    <header class="headergreen">
      <div class="header__container">
        <div class="user">
          <?php   
            include "libs.php"; 
            if (check()) {
              echo ' <a class="headergreen__user" href="#">'.$_COOKIE['username'].'</a>';
            } else {
              echo ' <a class="headergreen__user" href="login.php">Log in</a>';
            }
          ?>
        </div>

        <a href="index.php" class="headergreen__logo"><span>inno</span>Book</a>

        <div class="headergreen__search">
          <input
            type="search"
            placeholder="Search for books or authors..."
            class="headergreen__input"
          />
          <i class="bx bx-search header__icon"></i>
        </div>

        <div class="header__toggle">
          <i class="bx bx-menu" id="header-toggle"></i>
        </div>
      </div>
    </header>

    <!--========== NAV ==========-->
    <div class="navwhite" id="navbar">
      <nav class="nav__container">
        <div>
          <a href="index.php" class="navwhite__link nav__logo">
            <i class="bx bx-book-open nav__icon"></i>
            <span class="navwhite__logo-name">
              <span class="whitelogo_inno">inno</span>Book
            </span>
          </a>

          <div class="nav__list">
            <div class="nav__items">
              <h3 class="navwhite__subtitle">Discover</h3>

              <a href="index.php" class="navwhite__link active">
                <i class="bx bx-home nav__icon"></i>
                <span class="navwhite__name">Home</span>
              </a>

              <a href="#" class="navwhite__link">
                <i class="bx bx-search nav__icon"></i>
                <span class="navwhite__name">Browse</span>
              </a>
              <a href="coffee.html" class="nav__link">
              <i class="fa-solid fa-mug-hot nav__icon" id="coff"></i>
                <span class="nav__name">Coffee</span>
              </a>
            </div>

            <div class="nav__items">
              <h3 class="navwhite__subtitle">Library</h3>

              <a href="allbooks.php" class="navwhite__link">
                <i class="bx bx-book-alt nav__icon"></i>
                <span class="navwhite__name">All books</span>
              </a>
              <a href="newbooks.php" class="navwhite__link">
                <i class="bx bx-plus-circle nav__icon"></i>
                <span class="navwhite__name">New books</span>
              </a>
            </div>
          </div>
        </div>
            <?php   
          if (check()) {
            echo '<a href="logout.php" class="navwhite__link nav__logout">
          <i class="bx bx-log-out nav__icon"></i>
          <span class="navwhite__name">Log Out</span>
        </a>';
          }
         ?>
      </nav>
    </div>
      <!--========== CONTENTS ==========-->
      <section class="viewbook">
        <div class="container">
            <div class="viewbook_link">
                <a href="newbooks.php">New Books</a>
                <span>/</span>
                <a href="christmas.php">Рождество в Праге</a>   
            </div>
            <div class="about_book">
                <div class="about_book-img">
                    <img class="verybig_img" src="./assets/img/christmasinprague.jpg" alt="">
                </div>
                <div class="about_book-text">
                    <div class="about_book-title">
                        <h2>Рождество в Праге</h2>
                        <a href="#!"><i class='bx bx-heart'></i></a>
                    </div>
                    <h3>Джойс Ханнам</h3>
                    <div class="about_book-rateing">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                <p>Ян Влах родился в Чехословакии, но переехал в Англию со своим отцом много лет назад. Его мать умерла в канун Рождества в 1957 году. Сейчас Ян живет в Англии и преподает чешский язык в Оксфордском университете. Его жена Кэрол получает предложение сыграть в оркестре в Праге в это Рождество. Она просит Яна и его отца Иосифа пойти с ней. Кэрол летит туда раньше, так как у нее есть репетиции. После первой репетиции она ходит по магазинам на Рождество. Вдруг Кэрол видит своего мужа на улице. Но почему он уже приехал в Прагу? Что он здесь делает? Она звонит ему. Но он не останавливается. Он смотрит на нее и затем уходит. Кэрол в шоке. Она бежит к нему, но попадает в аварию. Женщина доставлена в больницу. Когда Ян и Йозеф наконец прибывают в Прагу, Йозеф все объясняет. Оказывается, это еще не все из истории того, что произошло в 1957 году.</p>
                </div>
            </div>
      
            <div class="viewbook_downloadbtn">
                <a href="./assets/books/christmas.pdf" download>Download PDF</a>
            </div>
        </div>
    </section>

    <div class="footerwhite">
      <div class="container">
        <a href="index.php"><span>inno</span>Book</a>
      </div>
    </div>
    <!--========== MAIN JS ==========-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

