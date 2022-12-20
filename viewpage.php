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
                <a href="viewpage.php">Harry Potter</a>
            </div>
            <div class="about_book">
                <div class="about_book-img">
                    <img class="verybig_img" src="./assets/img/harrypotter.jpg" alt="">
                </div>
                <div class="about_book-text">
                    <div class="about_book-title">
                        <h2>Harry Potter</h2>
                        <a href="#!"><i class='bx bx-heart'></i></a>
                    </div>
                    <h3>J.K.ROWLING, 1997</h3>
                    <div class="about_book-rateing">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>Harry Potter's life is miserable. His parents are dead and he's stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he's a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry.</p>
                </div>
            </div>
            <div class="viewbook_downloadbtn">
                <a href="./assets/books/Гарри Поттер и философский камень.pdf" download>Download PDF</a>
            </div>
        </div>
    </section>

    <div class="footerwhite">
      <div class="container">
        <a href="index.php"><span>inno</span>Book</a>
      </div>
    </div>
    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
