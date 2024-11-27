<?php
session_start();
$user_name = '';
$href = './login_system/login';
$payment_path = './login_system/login';
if (isset($_SESSION["user_name"])) {
  // Redirect the user to the login page
  $user_name = $_SESSION["user_name"];
  if ($_SESSION['user_type'] == 'user') {
    $href = './user_portal/user_dashboard';
  }else{
    $href = './admin_portal/dashboard/adminindex.php';
  }
  $payment_path = './payment/pindex.html';
  // header("Location: ./admin_portal/dashboard/adminindex.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rent your favourite car</title>
  <!-- 
    - favicon
      -->
  <link rel="shortcut icon" href="./images/logofinal.png" type="image/svg+xml">

  <!-- this is logo show at hte top of search  -->
  <!-- link css  -->
  <link rel="stylesheet" href="style.css">
  <!-- google font -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- header -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <!-- logo has changed -->
        <img src="./images/logofinal.png" alt="logo1.png" width="90" height="75">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#featured car" class="navbar-link" data-nav-link>Explore cars</a>
          </li>
          <li>
            <a href="instruction.html" class="navbar-link" data-nav-link>Terms and Condition</a>
          </li>

          <li>
            <a href="#footer" class="navbar-link" data-nav-link>About us</a>
          </li>


        </ul>
      </nav>

      <div class="header-contact">
        <a href="tel:7405541541" class="contact-link">Call us on: 7405541541</a>

        <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
      </div>

      <a href="#featured car" class="btn" aria-labelledby="aria-label-txt">
        <ion-icon name="car-outline"></ion-icon>

        <span id="aria-label-txt">Explore cars</span>
      </a>
      <!-- ./login/index.html -->

      <a href="<?php echo $href; ?>" class="btn user-btn" aria-label="Profile">
        <!-- <a href="" class="btn user-btn" aria-label="Profile"> -->
        <ion-icon name="person-outline"></ion-icon>
        <h6><?php if ($user_name) {
          echo $user_name;
        } ?></h6>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <span class="one"></span>
        <span class="two"></span>
        <span class="three"></span>
      </button>

    </div>

    </div>
  </header>







  <main>
    <article>
      <!-- HERO -->

      <section class="section hero" id="home">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title">The easy way to takeover a lease</h2>

            <p class="hero-text">Live in INDIA and Explore the beauty of INDIA !

          </div>

          <div class="hero-banner"></div>

          <form action="" class="hero-form">

            <div class="input-wrapper">
              <label for="input-1" class="input-label">Car, model, or brand</label>

              <input type="text" name="car-model" id="input-1" class="input-field"
                placeholder="What car are you looking?">
            </div>

            <div class="input-wrapper">
              <label for="input-2" class="input-label">Max. monthly payment</label>

              <input type="text" name="monthly-pay" id="input-2" class="input-field"
                placeholder="Add an amount in &#8377">
            </div>

            <div class="input-wrapper">
              <label for="input-3" class="input-label">Make Year</label>

              <input type="text" name="year" id="input-3" class="input-field" placeholder="Add a minimal make year">
            </div>

            <button type="submit" onclick="location.href = 'http://127.0.0.1:5500/car-rental-project/error.html' "
              class="btn">Search</button>

          </form>

        </div>
      </section>





      <!-- feature car -->

      <section class="section featurecar" id="featured car">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Featured cars</h2>

            <a href="#" class="featured-car-link">

              <span>View more</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-car-list">
            <!-- car 1 -->
            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="./images/maruti-suzuki-dzire.jpg" alt="maruti suzuki dzire" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Maruti Suzuki Dzire</a>

                    </h3>

                    <data class="" class="year" value="2021">2023</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">5 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">22km / 1-litre
                      </span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Manual
                      </span>
                    </li>


                    <div class="card-price-wrapper">

                      <p class="card-price">
                        <strong>&#8377 1000</strong> / Per day
                      </p>
                      <button class=" btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn"
                        onclick="location.href = '<?php echo htmlspecialchars($payment_path, ENT_QUOTES, 'UTF-8'); ?>'">
                        Rent now
                      </button>
                    </div>
                  </ul>
                </div>
              </div>
            </li>

            <!-- car 2 -->

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="./images/car-2.jpg" alt="BMW 3 Series 2019" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW 3 Series</a>

                    </h3>

                    <data class="" class="year" value="2019">2019</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">5 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">8.2km / 1-litre
                      </span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic
                      </span>
                    </li>


                    <div class="card-price-wrapper">

                      <p class="card-price">
                        <strong>&#8377 5500</strong> / Per day
                      </p>
                      <button class=" btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn"
                        onclick="location.href = '<?php echo htmlspecialchars($payment_path, ENT_QUOTES, 'UTF-8'); ?>'">
                        Rent now
                      </button>
                    </div>
                  </ul>
                </div>
              </div>
            </li>

            <!-- car 3 -->

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="./images/car-3.jpg" alt="Volkswagen T-Cross 2020
                      " loading="lazy" width="440" height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Volkswagen Polo</a>

                    </h3>

                    <data class="" class="year" value="2020">2020</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">5 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">12.3km / 1-litre
                      </span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic
                      </span>
                    </li>


                    <div class="card-price-wrapper">

                      <p class="card-price">
                        <strong>&#8377 1500</strong> / Per day
                      </p>
                      <button class=" btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn"
                        onclick="location.href = '<?php echo htmlspecialchars($payment_path, ENT_QUOTES, 'UTF-8'); ?>'">
                        Rent now
                      </button>
                    </div>
                  </ul>
                </div>
              </div>
            </li>


            <!-- car 4 -->

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="./images/car-6.jpg" alt="BMW 5 Series GTI 2021" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW 5 Series</a>

                    </h3>

                    <data class="" class="year" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">5 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">7.6km / 1-litre
                      </span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic
                      </span>
                    </li>


                    <div class="card-price-wrapper">

                      <p class="card-price">
                        <strong>&#8377 4000</strong> / Per day
                      </p>
                      <button class=" btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn"
                        onclick="location.href = '<?php echo htmlspecialchars($payment_path, ENT_QUOTES, 'UTF-8'); ?>'">
                        Rent now
                      </button>
                    </div>
                  </ul>
                </div>
              </div>
            </li>


            <!-- car 5 -->

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="./images/car-5.jpg" alt="BMW 4 Series 2019" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW 4 Series</a>

                    </h3>

                    <data class="" class="year" value="2019">2019</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">5 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">7.2km / 1-litre

                      </span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic
                      </span>
                    </li>


                    <div class="card-price-wrapper">

                      <p class="card-price">
                        <strong>&#8377 2500</strong> / Per day
                      </p>
                      <button class=" btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn"
                        onclick="location.href = '<?php echo htmlspecialchars($payment_path, ENT_QUOTES, 'UTF-8'); ?>'">
                        Rent now
                      </button>
                    </div>
                  </ul>
                </div>
              </div>
            </li>

            <!-- car 6 -->
            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="./images/car-4.jpg" alt="Cadillac Escalade 2020" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Cadillac Escalade</a>

                    </h3>

                    <data class="" class="year" value="2020">2020</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">8 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">14km / 1-litre


                      </span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic
                      </span>
                    </li>


                    <div class="card-price-wrapper">

                      <p class="card-price">
                        <strong>&#8377 8000</strong> / Per day
                      </p>
                      <button class=" btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn"
                        onclick="location.href = '<?php echo htmlspecialchars($payment_path, ENT_QUOTES, 'UTF-8'); ?>'">
                        Rent now
                      </button>
                    </div>
                  </ul>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </section>

      <!-- get start -->

      <section class="section get-start" id="Instruction">
        <div class="container">

          <h2 class="h2 section-title">Get started with 4 simple steps</h2>

          <ul class="get-start-list">

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-1">
                  <ion-icon name="person-add-outline"></ion-icon>
                </div>

                <h3 class="card-title">Create a profile</h3>

                <p class="card-text">
                  If you are going to use a passage of Lorem Ipsum, you need to be sure.
                </p>

                <a href="./login_system/login" class="card-link">Get started</a>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-2">
                  <ion-icon name="car-outline"></ion-icon>
                </div>

                <h3 class="card-title">Tell us what car you want</h3>

                <p class="card-text">
                  Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                </p>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-3">
                  <ion-icon name="person-outline"></ion-icon>
                </div>

                <h3 class="card-title">Read the Instruction</h3>

                <p class="card-text"> Read the information about car and instruction that to be fallow by the driver
                  <a href="instruction.html" class="card-link">Read Instruction</a>

                </p>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-4">
                  <ion-icon name="card-outline"></ion-icon>
                </div>

                <h3 class="card-title">Make a deal</h3>

                <p class="card-text">
                  There are many variations of passages of Lorem available, but the majority have suffered alteration
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>



      <!-- instruction blog-->

      <!-- <section class="section blog" id="blog">

            <div class=" blog-container">

              <h2 class="h2 section-title">Term & condition </h2>
               
                <ul class="blog-list has-scrollbar">

                  <li>
                    <div class="blog card">
                      <figure class="card-banner">

                         <a href="#"> -->

      <!-- <img src="./images/blog-1.jpg" alt="Opening of new offices of the company
                          " loading="lazy"  class="w-100">

                          <a href="#" class="btn card-badge"></a> 
                      </figure> -->


      </div>
      </li>


      </ul>

      </div>

      </div>

      </section>
    </article>
  </main>



  <!-- FOOTER -->


  <footer class="footer" id="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="./images/logofinal.png" alt="logo.png">
          </a>

          <p class="footer-text">
            Search for cheap rental cars in India.
          </p>
        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pricing plans</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our blog</a>
          </li>

          <li>
            <a href="7405541541" class="footer-link">Contacts</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help center</a>
          </li>

          <li>
            <a href="#" class="footer-link">Ask a question</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy policy</a>
          </li>

          <li>
            <a href="instruction.html" class="footer-link">Terms & conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title"> In INDIA Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Gujarat</a>
          </li>

          <li>
            <a href="#" class="footer-link">Goa</a>
          </li>

          <li>
            <a href="#" class="footer-link">Maharashtra</a>
          </li>

          <li>
            <a href="#" class="footer-link">Madhya Pradesh</a>
          </li>

          <li>
            <a href="#" class="footer-link">Karnataka</a>
          </li>

          <li>
            <a href="#" class="footer-link">Kerala</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tamil Nadu</a>
          </li>

          <li>
            <a href="#" class="footer-link">Telangana</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/samarth_pathak_25126/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-skype"></ion-icon>
            </a>
          </li>

          <li>
            <a href="samarthpathak25126@gmail.com" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <p class="copyright">
          &copy; 2024 <a href="https://github.com/samarthpathak25/car-rental-project">Samarth</a>. All Rights Reserved
        </p>

      </div>

    </div>
  </footer>


  <!-- custom js link -->
  <script src="script.js"></script>



  <!-- Ionicon -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>