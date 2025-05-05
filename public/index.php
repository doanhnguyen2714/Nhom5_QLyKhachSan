<?php
require_once("./config.php");
include("./includes/header.php");
?>
<body>
  <header id="home-header">
    <div id="home-header--bg-image">
      <?php include("./includes/navbar.php"); ?>
      <div class="home-header--title">
        <div class="container p-5">
          <h1>Find the best deals</h1>
          <h3 id="reservation-form">for your next trip</h3>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section id="home-form">
      <div class="wrapper">
        <form id="find-available-rooms-form">
          <div class="form-group check-in-group">
            <label for="check-in">Check in</label>
            <button id="check-in-button" class="btn input-button">
              <span class="button-text">Check in date</span>
            </button>
            <input type="hidden" id="check-in" name="check-in" />
          </div>
          <div class="form-group check-out-group">
            <label for="check-out">Check out</label>
            <button id="check-out-button" class="btn input-button">
              <span class="button-text">Check out date</span>
            </button>
            <input type="hidden" id="check-out" name="check-out" />
          </div>
          <div class="form-group">
            <label for="form-dropdown">Guests</label>
            <button
              class="btn dropdown-toggle"
              id="form-dropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              >
              Add guests
            </button>
            <ul class="dropdown-menu" aria-labelledby="form-dropdown">
              <li class="dropdown-menu-item">
                <div class="form-group form-group-nested">
                  <label for="count-adults">Adults</label>
                  <input
                    type="number"
                    class="form-control"
                    name="count-adults"
                    id="count-adults"
                    placeholder="Ages 13 or above"
                    min="0"
                    />
                </div>
                <div class="form-group form-group-nested">
                  <label for="count-children">Children</label>
                  <input
                    type="number"
                    class="form-control"
                    name="count-children"
                    id="count-children"
                    placeholder="Ages 1-12"
                    min="0"
                    />
                </div>
              </li>
            </ul>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="find-rooms">
              Search
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- Featured Rooms -->
    <section id="featured-rooms">
      <div class="container my-5 py-5">
        <div class="section-title">
          <h2>Today's best deals</h2>
        </div>
        <div class="row custom-room-cards">
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/1.jpg" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Diamond Suite</div>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/2.jpg" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Diamond Suite</div>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/3.jpg" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Diamond Suite</div>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/4.jpg" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Diamond Suite</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="decoration-accomodation">
      <div class="container my-5 py-5">
        <div class="row">
          <div class="col-md-5">
            <div class="content">
              <div class="section-title">
              <h2>Choose the perfect accommodation</h2>
                </div>
                <p>
                  Discover a range of luxurious rooms and suites tailored to your needs. Whether you're seeking a cozy retreat or a spacious family stay, our hotel offers the perfect blend of comfort, style, and convenience for an unforgettable experience.
                </p>
            </div>
          </div>
          <div class="col-md-7 card-container">
          <div class="card">
                <div class="card-body">
                  <img src="./media/images/backgrounds/home-1.jpg" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">$120/day</div>
                  </div>
                  <div class="footer-body">Diamond Suite</div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/backgrounds/home-2.jpg" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">$120/day</div>
                  </div>
                  <div class="footer-body">Diamond Suite</div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section id="premium-section">
      <div class="container my-5 py-5">
        <div class="row">
          <div class="col-md-7">
            <div class="card-container">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/backgrounds/home-1.jpg" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">$120/day</div>
                  </div>
                  <div class="footer-body">Diamond Suite</div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/backgrounds/home-2.jpg" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">$120/day</div>
                  </div>
                  <div class="footer-body">Diamond Suite</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="content">
              <div class="section-title">
              <h2>Premium deals for your premium needs</h2>
                </div>
                <p>
                  Elevate your stay with our exclusive premium offers, featuring luxurious suites, personalized services, and special discounts designed for discerning travelers. Experience unparalleled comfort and sophistication at unbeatable rates.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="home-banner">
      <div class="banner">
        <div class="container">
          <div class="jumbotron">
            <h6>Our newsletter</h6>
            <h2>Become a member and enjoy flat 25% discounts on Booking.</h2>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include("./includes/footer.php"); ?>
  <!-- Include Flatpickr CSS and JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    $(document).ready(function () {
      // Initialize Flatpickr for check-in button
      const checkInPicker = flatpickr("#check-in-button", {
        dateFormat: "Y-m-d",
        minDate: "today",
        onChange: function (selectedDates, dateStr) {
          $("#check-in-button .button-text").text(dateStr);
          $("#check-in").val(dateStr); // Update hidden input
          const minCheckoutDate = new Date(selectedDates[0]);
          minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
          checkOutPicker.set("minDate", minCheckoutDate);
          if (checkOutPicker.selectedDates[0] && checkOutPicker.selectedDates[0] < minCheckoutDate) {
            checkOutPicker.clear();
            $("#check-out-button .button-text").text("Check out date");
            $("#check-out").val("");
          }
        }
      });


      // Initialize Flatpickr for check-out button
      const checkOutPicker = flatpickr("#check-out-button", {
        dateFormat: "Y-m-d",
        minDate: "tomorrow",
        onChange: function (selectedDates, dateStr) {
          $("#check-out-button .button-text").text(dateStr);
          $("#check-out").val(dateStr); // Update hidden input
        }
      });


      // Make the entire check-in and check-out sections clickable
      $(".check-in-group").on("click", function (e) {
        e.preventDefault();
        checkInPicker.open();
      });


      $(".check-out-group").on("click", function (e) {
        e.preventDefault();
        checkOutPicker.open();
      });


      // Prevent the click event from bubbling up when clicking the button directly
      $("#check-in-button, #check-out-button").on("click", function (e) {
        e.stopPropagation(); // Prevent the parent form-group click event from firing
      });


      // Form submission logic
      $("#find-available-rooms-form").submit(function (event) {
        event.preventDefault();
        const indate = $("#check-in").val();
        const outdate = $("#check-out").val();
        const adults = $("#count-adults").val();
        const children = $("#count-children").val();


        if (!indate || !outdate) {
          alert("Please select both check-in and check-out dates.");
          return;
        }


        const checkInDate = new Date(indate);
        const checkOutDate = new Date(outdate);
        const minCheckoutDate = new Date(checkInDate);
        minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);


        if (checkOutDate < minCheckoutDate) {
          alert("Check-out date must be at least one day after check-in date.");
          return;
        }


        if (adults === "" || adults === null) {
          alert("Please specify the number of adults.");
          return;
        }


        window.location.href = `reservation.php?check_in_date=${indate}&check_out_date=${outdate}&adults=${adults}&children=${children || 0}`;
      });
    });
  </script>
</body>
</html>