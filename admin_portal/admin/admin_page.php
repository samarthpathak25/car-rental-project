<?php

@include './../config.php';

if (isset($_POST['submit'])) {
  $company = mysqli_real_escape_string($conn, $_POST['company']);
  $car_name = mysqli_real_escape_string($conn, $_POST['car_name']);
  $years = mysqli_real_escape_string($conn, $_POST['years']);
  $num_person = mysqli_real_escape_string($conn, $_POST['num_person']);
  $car_type = mysqli_real_escape_string($conn, $_POST['car_type']);
  $mileage = mysqli_real_escape_string($conn, $_POST['mileage']);
  $gear_type = mysqli_real_escape_string($conn, $_POST['gear_type']);

  $select = "INSERT INTO `car_details`
   (`company`, `car`, `year`, `people`, `car_type`, `mileage`, `gear_type`) VALUES 
   ('$company', '$car_name','$years','$num_person','$car_type','$mileage','$gear_type')";
  $result = mysqli_query($conn, $select);
}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin page</title>

  <!-- custom css file link  -->
<link rel="stylesheet" href="style1.css">

</head>

<body>

  <form action="" method="post">
    <h3>Welcome Admin</h3>

  
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
                      <img src="./../../images/maruti-suzuki-dzire.jpg" alt="maruti suzuki dzire" loading="lazy" 
                      width="440" height="300" class="w-100">
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
                            <!-- <button class =" btn fav-btn" aria-label="Add to favourite list"> -->
                              <!-- <ion-icon name="heart-outline"></ion-icon> -->
                            <!-- </button> -->

                            <!-- <button class="btn">Rent now</button> -->
                          </div>
                        </ul>
                    </div>
                  </div>
                </li>

<!-- car 2 -->
                
                <li>
                  <div class="featured-car-card">
                    <figure class="card-banner">
                      <img src="./../../images/car-2.jpg" alt="BMW 3 Series 2019" loading="lazy" 
                      width="440" height="300" class="w-100">
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
                            <!-- <button class =" btn fav-btn" aria-label="Add to favourite list"> -->
                              <!-- <ion-icon name="heart-outline"></ion-icon> -->
                            <!-- </button> -->

                            <!-- <button class="btn">Rent now</button> -->
                          </div>
                        </ul>
                    </div>
                  </div>
                </li>

<!-- car 3 -->

                <li>
                  <div class="featured-car-card">
                    <figure class="card-banner">
                      <img src="./../../images/car-3.jpg" alt="Volkswagen T-Cross 2020
                      " loading="lazy" 
                      width="440" height="300" class="w-100">
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
                            <!-- <button class =" btn fav-btn" aria-label="Add to favourite list"> -->
                              <!-- <ion-icon name="heart-outline"></ion-icon> -->
                            <!-- </button> -->

                            <!-- <button class="btn">Rent now</button> -->
                          </div>
                        </ul>
                    </div>
                  </div>
                </li>


<!-- car 4 -->

                <li>
                  <div class="featured-car-card">
                    <figure class="card-banner">
                      <img src="./../../images/car-6.jpg" alt="BMW 5 Series GTI 2021" loading="lazy" 
                      width="440" height="300" class="w-100">
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
                            <!-- <button class =" btn fav-btn" aria-label="Add to favourite list"> -->
                              <!-- <ion-icon name="heart-outline"></ion-icon> -->
                            <!-- </button> -->

                            <!-- <button class="btn">Rent now</button> -->
                          </div>
                        </ul>
                    </div>
                  </div>
                </li>


<!-- car 5 -->

                <li>
                  <div class="featured-car-card">
                    <figure class="card-banner">
                      <img src="./../../images/car-5.jpg" alt="BMW 4 Series 2019" loading="lazy" 
                      width="440" height="300" class="w-100">
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
                            <!-- <button class =" btn fav-btn" aria-label="Add to favourite list"> -->
                              <!-- <ion-icon name="heart-outline"></ion-icon> -->
                            <!-- </button> -->

                            <!-- <button class="btn">Rent now</button> -->
                          </div>
                        </ul>
                    </div>
                  </div>
                </li>

<!-- car 6 -->

                <li>
                  <div class="featured-car-card">
                    <figure class="card-banner">
                      <img src="./../../images/car-4.jpg" alt="Cadillac Escalade 2020" loading="lazy" 
                      width="440" height="300" class="w-100">
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
                            <!-- <button class =" btn fav-btn" aria-label="Add to favourite list"> -->
                              <!-- <ion-icon name="heart-outline"></ion-icon> -->
                            <!-- </button> -->

                            <!-- <button class="btn">Rent now</button> -->
                          </div>
                        </ul>
                    </div>
                  </div>
                </li>
                
              </ul>
              </div>
            </section>




    <input type="text" name="company" required placeholder="Enter company name">
    <input type="text" name="car_name" required placeholder="Enter car name">
    <input type="text" name="years" required placeholder="Enter the year of car">
    <input type="text" name="num_person" required placeholder="Enter your total perons">
    <select name="car_type">
      <option value="Hybrid">Hybrid</option>
      <option value="Gasoline">Gasoline</option>
    </select>
    <input type="text" name="mileage" required placeholder="Enter Your car mileage">
    <select name="gear_type">
      <option value="Manual">Manual</option>
      <option value="Automatic">Automatic</option>
    </select>
    <input type="submit" name="submit" value="Add Car" class="form-btn">
   
  </form>



</body>


</html>