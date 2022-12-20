<?php 
  include "libs.php"
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link
      rel="stylesheet"
      href="assets/css/style.css?jwewgf=dasdasd"
    />
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
    
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
  
    <title>JIHC</title>
  </head>
  <body>
    <!--========== HEADER ==========-->
    <header class="header">
      <div class="header__container">
        <div class="user">
          <?php
            if (check()) {
              echo ' <a class="header__user" href="#">'.$_COOKIE['username'].'</a>';
            } else {
              echo ' <a class="header__user" href="login.php">Log in</a>';
            }


          ?>
         
        </div>

        <a href="index.php" class="header__logo"><span>inno</span>Book</a>

        <div class="header__search">
          <input
            type="search"
            placeholder="Search for books or authors..."
            class="header__input"/>
          <i class="bx bx-search header__icon"></i>
        </div>

        <div class="header__toggle">
          <i class="bx bx-menu" id="header-toggle"></i>
        </div>
      </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
      <nav class="nav__container">
        <div>
          <a href="index.php" class="nav__link nav__logo">
            <i class="bx bx-book-open nav__icon"></i>
            <span class="nav__logo-name">
              <span class="logo_inno">inno</span>Book
            </span>
          </a>

          <div class="nav__list">
            <div class="nav__items">
              <h3 class="nav__subtitle">Discover</h3>

              <a href="index.php" class="nav__link active">
                <i class="bx bx-home nav__icon"></i>
                <span class="nav__name">Home</span>
              </a>

              

              <a href="#" class="nav__link">
                <i class="bx bx-search nav__icon"></i>
                <span class="nav__name">Browse</span>
              </a>
              <a href="coffee.php" class="nav__link">
              <i class="fa-solid fa-mug-hot nav__icon" id="coff"></i>
                <span class="nav__name">Coffee</span>
              </a>
            </div>

            <div class="nav__items">
              <h3 class="nav__subtitle">Library</h3>

              <a href="allbooks.php" class="nav__link">
                <i class="bx bx-book-alt nav__icon"></i>
                <span class="nav__name">All books</span>
              </a>
              <a href="newbooks.php" class="nav__link">
                <i class="bx bx-plus-circle nav__icon"></i>
                <span class="nav__name">New books</span>
              </a>
            </div>
          </div>
        </div>
        <?php   
          if (check()) {
            echo '<a href="logout.php" class="nav__link nav__logout">
          <i class="bx bx-log-out nav__icon"></i>
          <span class="nav__name">Log Out</span>
        </a>';
          }
         ?>
        
      </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <scetion class="genre">
      <div class="container">
        <div class="top_title">
          <h3>Subject books</h3>
        </div>
        <div class="genre_items">
          <div class="genre_top-row">
            <a href="psychology.php" class="item">
              <i class="bx bx-brain"></i>
              <h4>Psychology</h4>
            </a>
            <a href="it.php" class="item">
              <i class="fas fa-desktop"></i>
              <h4>IT</h4>
            </a>
            <a href="marketing.php" class="item">
              <i class="bx bxl-instagram"></i>
              <h4>Marketing</h4>
            </a>
            <a href="business.php" class="item">
              <i class="bx bx-dollar"></i>
              <h4>Business</h4>
            </a>
          </div>
          <div class="genre_bottom-row">
            <a href="detective.php" class="item">
              <i class="bx bx-search-alt"></i>
              <h4>Detective</h4>
            </a>
            <a href="fantasy.php" class="item">
              <i class="bx bx-ghost"></i>
              <h4>Fantasy</h4>
            </a>
            <a href="foreignliterature.php" class="item">
              <i class="fab fa-fort-awesome"></i>
              <h4>Foreign literature</h4>
            </a>
            <a href="allbooks.php" class="item">
              <i class="bx bx-list-ul"></i>
              <h4>Others</h4>
            </a>
          </div>
        </div>
      </div>
    </scetion>

    <section class="newbooks">
      <div class="container">
      <div class="newbooks_items">
        <a href="viewpage.php" class="newbook_item">
          <img class="big_book" src="./assets/img/harrypotter.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Harry Potter</h5>
            <h6>J.K.ROWLING</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button>View</button>  
          </div>
        </a>
        <a href="#!" class="newbook_item">
          <img class="big_book" src="./assets/img/sherlockholmes.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Sherlock Holmes</h5>
            <h6>Joseph Delaney</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button>View</button>  
          </div>
        </a>
        <a href="hobbit.php" class="newbook_item">
          <img class="big_book" src="./assets/img/thehobbit.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The Hobbit</h5>
            <h6>J.R.R. TOLKIEN</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button>View</button>
          </div>
        </a>
        <a href="christmas.php" class="newbook_item">
          <img class="big_book" src="./assets/img/achristmascarol.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>A Christmas Carol</h5>
            <h6>CHARLES DICKENS</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>  
          </div>
        </a>
        <a href="christmas.php" class="newbook_item">
          <img class="big_book" src="./assets/img/christmasinprague.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Christmas In Prague</h5>
            <h6>JOYCE HANNAM</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>              
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>  
          </div>
        </a>
        <a href="flowers.php" class="newbook_item">
            <img class="big_book" src="./assets/img/цветыдляэлджернона.jpg" alt="">
            <div class="newbook_item-overlay">
              <h5>Цветы для Элджернона</h5>
              <h6>Дэниел Киз</h6>
              <div class="newbook_item-rateing">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>              
                <i class='bx bx-star'></i>
              </div>  
              <button>View</button>
            </div>
          </a>
        <a href="percey.php" class="newbook_item">
           <img class="big_book" src="./assets/img/перси.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>Перси Джексон и лабиринт смерти</h5>
             <h6>Рик Риордан</h6>
             <div class="newbook_item-rateing">
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
             </div>  
             <button>View</button>
           </div>
         </a>
         <a href="steven.php" class="newbook_item">
            <img class="big_book" src="./assets/img/побег.jpg" alt="">
            <div class="newbook_item-overlay">
              <h5>РИТА ХЕЙУОРТ ИЛИ ПОБЕГ ИЗ ШОУШЕНКА</h5>
              <h6>Стивен Кинг</h6>
              <div class="newbook_item-rateing">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
              </div>  
              <button>View</button>
            </div>
          </a>
          <a href="arthur.php" class="newbook_item">
            <img class="big_book" src="./assets/img/этюд.jpg" alt="">
            <div class="newbook_item-overlay">
              <h5>Этюд в багровых тонах</h5>
              <h6>Артур Конан Дойл</h6>
              <div class="newbook_item-rateing">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
              </div>  
              <button>View</button>
            </div>
          </a>
          <a href="it1.php" class="newbook_item">
          <img class="big_book" src="./assets/img/javascriptдлядетей.png" alt="">
          <div class="newbook_item-overlay">
            <h5>JavaScript для детей</h5>
            <h6>Ник Морган</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="jihc/it1.php">View</button>
            
          </div>
        </a>
      </div>
      </div>
    </section>

    <section class="page_numbers">  
      <div class="container">
        <div class="page_items">
          <div class="page_back">
            <a href="#!"><i class="fas fa-chevron-left"></i></a>
          </div>
          <div class="page_number">
            <a class="active" href="index.php">1</a>
            <a href="psychology.php">2</a>
            <a href="it.php">3</a>
            <a href="marketing.php">4</a>
            <a href="#!">...</a>
            <a href="business.php">23</a>
          </div>
          <div class="page_forward">
            <a href="#!"><i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <div class="footer">
      <div class="container">
        <a href="index.php"><span>inno</span>Book</a>
      </div>
    </div>
    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
