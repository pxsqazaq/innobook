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
              <a href="coffee.html" class="nav__link">
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
        <a href="#!" class="newbook_item">
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
            <button>Download now</button>
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
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
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
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
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
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
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
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
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
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
          <img class="big_book" src="./assets/img/thecallofthewild.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The Call of the Wild</h5>
            <h6>JACK LONDON</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
          <img class="big_book" src="./assets/img/theprisonerofzenda.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The prisoner of Zenda</h5>
            <h6>anthony hope</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
          <img class="big_book" src="./assets/img/thejunglebook.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>The Jungle Book</h5>
            <h6>rudyard kipling</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half'></i>
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>
            <button>Download now</button>
          </div>
        </a>
        <a href="#!" class="newbook_item">
          <img class="big_book" src="./assets/img/richdad.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>Rich Dad Poor Dad</h5>
            <h6>Robert T.Kiyosaki</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>
            <button>Download now</button>
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
