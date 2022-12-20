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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    /><link rel="stylesheet" href="it.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <title>JIHC</title>
  </head>

  <body>
    
      <style>
            html {
            height: 100%; 
            width: 100%;
            background: rgb(255, 255, 255) url(https://saugnix.myqnapcloud.com/wp-content/uploads/2022/01/matrix_weiss.gif) 
           center;  
         
            }
        </style>
   
    
    
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
            class="header__input"
          />
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
              <a href="coffee.html" class="nav__link">
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

        <a href="#" class="nav__link nav__logout">
          <i class="bx bx-log-out nav__icon"></i>
          <span class="nav__name">Log Out</span>
        </a>
      </nav>
    </div>

    <div>
     
    </div>
    <!--========== CONTENTS ==========-->
    <section class="newbooks">
      <div class="container">
      <div class="top_title">
       
      </div>
      <div class="newbooks_items">
        <a href="it2.php" class="newbook_item">
          <img class="big_book" src="./assets/img/изучаемjava.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Изучаем Java</h5>
            <h6>Кэти Сьерра</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="jihc/it2.php">View</button>
            
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
        <a href="it3.php" class="newbook_item">
          <img class="big_book" src="https://habrastorage.org/r/w1560/getpro/habr/post_images/070/bea/082/070bea0827a6592222ab27e3944d8ab2.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The Complete Software Developer's Career Guide</h5>
            <h6>Джон Сонмез</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="it3.php">View</button>
           

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
            <button href="jihc/it4.php">View</button>
           
          </div>
        </a>
        <a href="it5.php" class="newbook_item">
          <img class="big_book" src="https://media.proglib.io/posts/2021/08/20/64e5a7b47f34588935fc9e8f26d8945b.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Программист-прагматик</h5>
            <h6> Э. Хант</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="jihc/it5.php" >View</button>
           
          </div>
        </a>
        <a href="it6.php" class="newbook_item">
          <img class="big_book" src="https://habrastorage.org/r/w1560/getpro/habr/post_images/f41/6ae/203/f416ae2033070d6749d77fffc8d7405b.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Hacking: The Art of Exploitation, 2nd Edition</h5>
            <h6>Jon Erickson</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="jihc/it6.php">View</button>
            
          </div>
        </a>
        <a href="it7.php" class="newbook_item">
          <img class="big_book" src="https://habrastorage.org/r/w1560/getpro/habr/post_images/713/fdb/b0c/713fdbb0ce247bc76974ad695de1152c.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Make Your Own Neural Network</h5>
            <h6>Tariq Rashid</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="jihc/it7.php">View</button>
           
          </div>
        </a>
        <a href="it8.php" class="newbook_item">
          <img class="big_book" src="https://habrastorage.org/r/w1560/getpro/habr/post_images/7fd/8bc/213/7fd8bc213133888acada1ceb3f76ff9a.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The Art of Invisibility</h5>
            <h6>Кевин Митник</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
            </div>  
            <button href="it8.php">View</button>
          
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
            <a class="active" href="#!">1</a>
            <a href="#!">2</a>
            <a href="#!">3</a>
            <a href="#!">4</a>
            <a href="#!">...</a>
            <a href="#!">23</a>
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
