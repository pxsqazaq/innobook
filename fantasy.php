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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="fantasy.css?saads=asdasdsasds" />
    <title>JIHC</title>
  </head>
  <body>
  <body style="background-image: url(fantasy-castle-david-griffith.jpg); background-size: cover; background-repeat: no-repeat;">
    <!--========== HEADER ==========-->
    <header class="header">
      <div class="header__container">
                <span class="nav__name">For you</span>
              </a>

              <a href="#" class="nav__link">
                <i class="bx bx-search nav__icon"></i>
                <span class="nav__name">Browse</span>
              </a>
              <a href="coffee.html" class="nav__link">
              <i class="fa-solid fa-mug-hot" id="coff"></i>
              <i class="fa-solid fa-mug-hot nav__icon" id="coff"></i>
                <span class="nav__name">Coffee</span>
              </a>
            </div>

                <i class="bx bx-book-alt nav__icon"></i>
                <span class="nav__name">All books</span>
              </a>
              <a href="#" class="nav__link">
                <i class="bx bx-list-ul nav__icon"></i>
                <span class="nav__name">Top books</span>
              </a>
              <a href="#" class="nav__link">
                <i class="bx bx-user nav__icon"></i>
                <span class="nav__name">Authors</span>
              </a>
              <a href="newbooks.php" class="nav__link">
                <i class="bx bx-plus-circle nav__icon"></i>
                <span class="nav__name">New books</span>
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

    <div class="gif">
         <div class="column_f">
          <p ><img src="./assets/img/dr_transparent.gif"  alt=""></p>
        </div>
          <div class="column_f">
          <p><img src="./assets/img/dr_tr2.gif"  alt=""></p></div>
          <div class="column_f">
          <p><img src="./assets/img/dr-tr4.webp"  alt=""></p>
         </div>
         </div>
    <!--========== CONTENTS ==========-->
    <section class="newbooks">
      <div class="container">
      <div class="top_title">
        <h3>Fantasy</h3>
      </div>
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

      </div>
      </div>
    </section>

     <div class="newbooks_items">
       <a href="viewpage.html" class="newbook_item">
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
           <img class="big_book" src="./assets/img/thehobbit.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>The Hobbit</h5>
             <h6>J.R.R. TOLKIEN</h6>
             <div class="newbook_item-rateing">
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
             </div>  
             <button>View</button>
             <button>Download now</button>
           </div>
         </a>
         <a href="viewpage.html" class="newbook_item">
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
             <button>Download now</button>
           </div>
         </a>
         <a href="#!" class="newbook_item">
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
             <button>Download now</button>
           </div>
         </a>
         <a href="viewpage.html" class="newbook_item">
           <img class="big_book" src="./assets/img/колдун.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>Колдун и кристалл</h5>
             <h6>Стивен Кинг</h6>
             <div class="newbook_item-rateing">
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
           <img class="big_book" src="./assets/img/шестеркаворонов.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>Шестерка воронов</h5>
             <h6>Ли Бардуго</h6>
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
         <a href="viewpage.html" class="newbook_item">
           <img class="big_book" src="./assets/img/пир.jpg" alt="">
           <div class="newbook_item-overlay">
             <h5>Пир стервятников</h5>
             <h6>Джордж Мартин</h6>
             <div class="newbook_item-rateing">
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>
               <i class='bx bxs-star'></i>

             </div>  
             <button>View</button>
             <button>Download now</button>
           </div>
         </a>
         <a href="#!" class="newbook_item">
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