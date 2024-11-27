 <?php
    @include './../config.php';

    // Prepare and execute the query
    $query = "SELECT * FROM car_details";
    $result = mysqli_query($conn, $query);
    // Display the results in an HTML table
    if ($result) {
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
               <li>
                      <div class="featured-car-card">
                        <figure class="card-banner">
                          <img src="./../../images/maruti-suzuki-dzire.jpg" alt="maruti suzuki dzire" loading="lazy" 
                          width="30%" height="45%" >
                        </figure>
    
                        <div class="card-content">
    
                          <div class="card-title-wrapper">
                            <h3 class="h3 card-title">
                              <a href="#">' . $row["company"] . ' ' . $row["car"] . '</a>
    
                            </h3>
    
                            <data class="" class="year" value="2021">' . $row["year"] . '</data>
                          </div>
    
                            <ul class="card-list">
    
                              <li class="card-list-item">
                                <ion-icon name="people-outline"></ion-icon>
                                <span class="card-item-text">' . $row["people"] . ' People</span>
                              </li>
    
                              <li class="card-list-item">
                                <ion-icon name="flash-outline"></ion-icon>
                                <span class="card-item-text">' . $row["car_type"] . '</span>
                              </li>
    
                              <li class="card-list-item">
                                <ion-icon name="speedometer-outline"></ion-icon>
                                <span class="card-item-text">' . $row["mileage"] . 'km / 1-litre
                                </span>
                              </li>
    
                              <li class="card-list-item">
                                <ion-icon name="hardware-chip-outline"></ion-icon>
                                <span class="card-item-text">' . $row["gear_type"] . '
                                </span>
                              </li>

                               
                            </ul>
                        </div>
                      </div>
                    </li>
               ';
        }
      } else {
        echo "0 results";
      }
    }
    ?>