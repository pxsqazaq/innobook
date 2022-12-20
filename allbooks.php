<?php
include "libs.php"
?>


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
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>JIHC</title>
  </head>
  <body>
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
            class="header__input"
          />
          <i class="bx bx-search header__icon"></i>
        </div>

        <div class="header__toggle">
          <i class="bx bx-menu" id="header-toggle"></i>
        </div>
      </div>
    </header>
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

              <a href="index.php" class="nav__link">
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

              <a href="allbooks.php" class="nav__link active">
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

        <a href="#" class="nav__link nav__logout">
          <?php   
          if (check()) {
            echo '<a href="logout.php" class="nav__link nav__logout">
          <i class="bx bx-log-out nav__icon"></i>
          <span class="nav__name">Log Out</span>
        </a>';
          }
         ?>
        </a>
      </nav>
    </div>
    <section class="newbooks">
      <div class="container">
      <div class="top_title">
        <h3>All books</h3>
      </div>
      <div class="newbooks_items">
        <a href="harry.php" class="newbook_item">
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
        <a href="witcher.php" class="newbook_item">
           <img class="big_book" src="./assets/img/witcher.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>Ведьмак</h5>
             <h6>Анджей Сапковский</h6>
             <div class="newbook_item-rateing">
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
        <a href="tolkien.php" class="newbook_item">
           <img class="big_book" src="./assets/img/братствокольца.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>Братство кольца</h5>
             <h6>Джон Рональд Руэл Толкин</h6>
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
        <a href="princess.php" class="newbook_item">
          <img class="big_book" src="./assets/img/alittleprincess .jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>A Little Princess</h5>
            <h6>FRANCES HODGSON BURNETT</h6>
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
        <a href="ps5.php" class="newbook_item">
          <img class="big_book" src="./assets/img/пофигизм.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Тонкое искусство пофигизма</h5>
            <h6>Марк Мэнсон</h6>
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
        <a href="ps8.php" class="newbook_item">
          <img class="big_book" src="https://cv3.litres.ru/pub/c/audiokniga/cover_415/49652437-tatyana-muzhickaya-mne-vse-lzya-49652437.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Мне все льзя</h5>
            <h6>Татьяна Мужицкая</h6>
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
        <a href="it4.php" class="newbook_item">
          <img class="big_book" src="https://habrastorage.org/r/w1560/getpro/habr/post_images/c32/d97/037/c32d970370d8732049e9a0e97f86d2e6.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The Definitive Guide to Programming Professionally
            </h5>
            <h6>Кори Алтофф</h6>
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
        <a href="agatha1.php" class="newbook_item">
  <img class="big_book" src="./assets/img/десятьнегритят.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>Десять негритят</h5>
    <h6>Агата Кристи</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
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
            <a class="active" href="#!">1</a>
            <a href="#!">2</a>
            <a href="#!">3</a>
            <a href="#!">4</a>
            <a href="#!">...</a>
            <a href="#!">11</a>
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
    
    <script src="assets/js/main.js"></script>
  </body>
</html>
