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
                
               
                <a href="viewpage.php"></a>
            </div>
            <div class="about_book">
                <div class="about_book-img">
                    <img class="verybig_img" src="./assets/img/неной.jpg" alt="">
                </div>
                <div class="about_book-text">
                    <div class="about_book-title">
                        <h2>НЕ НОЙ</h2>
                        <a href="#!"><i class='bx bx-heart'></i></a>
                    </div>
                    <h3>Джен Синсеро</h3>
                    <div class="about_book-rateing">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>Сейчас Джен путешествует по всему миру, останавливаясь только в пятизвездочных отелях. Ее книга – это квинтэссенция методик и стратегии по перенастройке финансового мышления. Она не только снимает психологические блоки на пути к достойному доходу, но и отвешивает энергетический пинок, который придает сил для достижения самых смелых целей.</p>
                </div>
            </div>
            <div class="viewbook_downloadbtn">
                
                <a href="assets/books/нисы.pdf" download>Download PDF</a>
               
            </div>
        </div>
    </section>
    <section class="similar-books" style="overflow-x: hidden;">
      <div class="container">
        <div class="similar-books__body">
          <div class="shows__title">
          
          </div>
          <div class="similar-books-slider swiper-container">
            <div class="similar-book-slider__wrapper swiper-wrapper">
              <div class="similar-books-slider__slide swiper-slide">
                <div class="similar-books-slider__image">
                  <a href="#"><img class="slider__book" src="./assets/img/lord .png" alt=""></a>
                </div>
              </div>
              <div class="similar-books-slider__slide swiper-slide">
                <div class="similar-books-slider__image">
                  <a href="#"><img class="slider__book" src="./assets/img/the witchs boy.png" alt=""></a>
                </div>
              </div>
              <div class="similar-books-slider__slide swiper-slide">
                <div class="similar-books-slider__image">
                  <a href="#"><img class="slider__book" src="./assets/img/рождение легенды.png" alt=""></a>
                </div>
              </div>
              <div class="similar-books-slider__slide swiper-slide">
                <div class="similar-books-slider__image">
                  <a href="#"><img class="slider__book" src="./assets/img/harrypotter.jpg" alt=""></a>
                </div>
              </div>
              <div class="similar-books-slider__slide swiper-slide">
                <div class="similar-books-slider__image">
                  <a href="#"><img class="slider__book" src="./assets/img/дары смерти.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
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
