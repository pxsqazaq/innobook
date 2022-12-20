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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
  
    <link rel="stylesheet" href="assets/css/style.css?dsfsadf=afasfsadaafas" />
    <script src="assets/js/main.js"></script>
    
    <link rel="stylesheet" href="coffee.css?daddadsdasd=cwcsadw">
    <!-- <link rel="stylesheet" href="psychology.css?jhkjhk=ghmghgh"> -->
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

              <a href="index.php" class="nav__link">
                <i class="bx bx-home nav__icon"></i>
                <span class="nav__name">Home</span>
              </a>

              <a href="#" class="nav__link">
                <i class="bx bx-heart nav__icon"></i>
                <span class="nav__name">For you</span>
              </a>

              <a href="#" class="nav__link">
                <i class="bx bx-search nav__icon"></i>
                <span class="nav__name">Browse</span>
              </a>
              <a href="coffee.html" class="nav__link active">
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
    <div class="video-bg">
      <img src="https://i.gifer.com/3Pz9.gif" style="height: auto;">
      <div class="effects"></div>
      <div class="video-bg__content">
         <h2 class="black">coffee</h2>
      </div>
   </div>
    
    <div class="coffeeMap">
        <div class="all">
    <div class="containerr">
      <div class="all_items">

      <div class="photos">
        
        <img   id="arrow" class=sizeOfCoffee src="https://restolife.kz/upload/information_system_6/2/5/3/item_25320/small_information_items_property_32253.jpg" style="border-radius: 20px;">
       <div class="text">
            <a class="header__user" href>Bluecat Coffee</a>
            <div class="newbook_item-rateing yellow" >
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star'></i>

          </div> 
          <div class="color">
            
            <i class="fa-solid fa-phone"><a href="https://2gis.kz/almaty/firm/70000001057893132/76.962507%2C43.224981?m=76.96257%2C43.225373%2F18.47" target="_blank">    Adress</a></i>
          </div>
          <div class="header__user">
            <a><i class="fa-solid fa-location-dot"></i> г. Алматы, пр. Достык, 232</a>
            <br>
            <a><i class="fa-solid fa-clock"></i> пн-пт 08:00–22:00, сб-вс 09:00-23:00</a>
          </div>
          <div class="blue">
          
          <div class="part">
            КОКТЕЙЛИ
          </div>
          <div class="part">
        ДЕСЕРТЫ
          </div>
          <div class="part">
            ПР.ДОСТЫК
          </div>
</div>
<hr style="width:380px;background-color: #339999;border-width: 0px;height: 1px;">
        </div>
        
        
    </div>

    <div class="photos">
        <img   id="arrow" class="sizeOfCoffee" src="https://restolife.kz/upload/information_system_6/2/4/6/item_24688/small_information_items_property_31348.jpg" style="border-radius: 20px;">
        <div class="text">
            <a class="header__user">Coffee Boom Гоголя</a>
            <div class="newbook_item-rateing yellow" >
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star'></i>

          </div> 
          <div class="color">
          <i class="fa-solid fa-phone"><a href="https://2gis.kz/almaty/firm/70000001054629845" target="_blank">    Adress</a></i>
          </div>
          <div class="header__user">
            <a><i class="fa-solid fa-location-dot"></i> г. Алматы, ​ул. Гоголя, 15 (уг. Каирбекова)</a>
            <br>
            <a><i class="fa-solid fa-clock"></i> пн-вс 09:00–00:00</a>
          </div>
          <div class="blue">
          
          <div class="part">
            КОКТЕЙЛИ
          </div>
          <div class="part">
        ДЕСЕРТЫ
          </div>
          <div class="part">
            ПР.ДОСТЫК
          </div>
</div>
<hr style="width:380px;background-color: #339999;border-width: 0px;height: 1px;">
        </div>
        
        
    </div>
    <div class="photos">
       <img   id="arrow" class=sizeOfCoffee src="https://restolife.kz/upload/information_system_6/2/4/5/item_24546/small_information_items_property_31092.jpg" style="border-radius: 20px;">
       <div class="text">
            <a class="header__user">Six Coffee Wine</a>
            <div class="newbook_item-rateing yellow" >
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star'></i>

          </div> 
          <div class="color">
          <i class="fa-solid fa-phone"><a href="https://2gis.kz/almaty/firm/70000001052408859?m=76.953818%2C43.243281%2F16" target="_blank">    Adress</a></i>
          </div>
          <div class="header__user">
            <a><i class="fa-solid fa-location-dot"></i> г. Алматы, пр. Абая, 17 (ул. Пушкина)</a>
            <br>
            <a><i class="fa-solid fa-clock"></i> пн-вс 08:00–00:00</a>
          </div>
          <div class="blue">
          
          <div class="part">
            КОКТЕЙЛИ
          </div>
          <div class="part">
        ДЕСЕРТЫ
          </div>
          <div class="part">
            ПР.ДОСТЫК
          </div>
</div><hr style="width:380px;background-color: #339999;border-width: 0px;height: 1px;">
        </div>
        
        
        
    </div>
    
    <div class="photos">
        <img   id="arrow" class=sizeOfCoffee src="https://restolife.kz/upload/information_system_6/2/4/4/item_24487/small_information_items_property_31019.jpg" style="border-radius: 20px;">
        <div class="text">
            <a class="header__user">Avocado & Coffee</a>
            <div class="newbook_item-rateing yellow" >
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star'></i>

          </div> 
          <div class="color">
          <i class="fa-solid fa-phone"><a href="https://2gis.kz/almaty/search/avocado%20coffee/firm/70000001050239861/76.948113%2C43.24568/tab/info?m=76.948113%2C43.24568%2F16" target="_blank">    Adress</a></i>
          </div>
          <div class="header__user">
            <a><i class="fa-solid fa-location-dot"></i> г. Алматы, пр. Назарбаева, 152​</a>
            <br>
            <a><i class="fa-solid fa-clock"></i> пн-вс 09:00-22:00</a>
          </div>
          <div class="blue">
          
          <div class="part">
            КОКТЕЙЛИ
          </div>
          <div class="part">
        ДЕСЕРТЫ
          </div>
          <div class="part">
            ПР.ДОСТЫК
          </div>
</div><hr style="width:380px;background-color: #339999;border-width: 0px;height: 1px;">
        </div>
        
        
    </div>
  </div>
    </div>

   </div>

    </div>
    
    

</body>
</html>