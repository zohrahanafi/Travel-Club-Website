<!--
      JavaScript Travel Club Website Project

      Author: ZOHRA HANAFI
      Date:   2/17/2023

      Filename: index.html
   -->

<body>
  <header id="header">
    <div class="nav_content container" id="header">
      <h1>Get ready to explore the <span> USA </span>.</h1>
      <div class="text_p">
        <p> Ready to embark on an unforgettable journey? Look no further than our travel website, where you can explore
          a world of incredible destinations in the USA, exciting activities, and unforgettable experiences. Whether
          you're dreaming of
          a tropical escape, an urban adventure, or a scenic road trip, we've got everything you need to plan your
          perfect getaway. So why wait? Let's <span>start planning your next trip today!</span></p>
      </div>
      <a href="#">Plan my Next trips</a>
    </div>
  </header>

  <main>
    <!-- Deals section -->
    <section class="container" id="deals">
      <div class="row ">
        <div class="row header">
          <h1>Recent Deals</h1>
        </div>
        <div class="row">
          <!-- card: -->
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="img/new york city.jpg" class="card-img-top img-fluid" alt="new york">
                <div class="card-body">
                  <h5 class="card-title">New York City, NY</h5>
                  <p class="card-text">10 Days for <span class="previous_price">$2,500</span> <span
                      class="new_price">$2,000</span></p>
                  <a href="plan.html">More Info!</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/San Framcisco, CA.jpg" class="card-img-top img-fluid" alt="California">
                <div class="card-body">
                  <h5 class="card-title">San Francisco, CA</h5>
                  <p class="card-text">4 Days for <span class="previous_price">$1,700</span> <span
                      class="new_price">$1,200</span></p>
                  <a href="plan.html">More Info!</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/Manhattan Beach, United States.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Manhattan Beach, CA</h5>
                  <p class="card-text">8 Days for <span class="previous_price">$2,200</span> <span
                      class="new_price">$1,840</span></p>
                  <a href="plan.html">More Info!</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/Seven Mile Bridge, Key West, United States.jpg" class="card-img-top img-fluid"
                  alt="Key West">
                <div class="card-body">
                  <h5 class="card-title">Key West, Florida</h5>
                  <p class="card-text">5 Days for <span class="previous_price">$1,300</span> <span
                      class="new_price">$999.99</span></p>
                  <a href="plan.html">More Info!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- how it works section -->
    <section class="container" id="how_it_works">
      <div class="row">
        <div class="row header">
          <h1>How it works</h1>
        </div>
        <div class="row">
          <div class="col-md-4 g-4">
            <i class="fa-solid fa-mountain-sun"></i>
            <h3>Discover</h3>
            <p>Explore unique and thrilling travel experiences that will leave you with unforgettable memories.</p>
          </div>
          <div class="col-md-4 g-4">
            <i class="fa-solid fa-dollar-sign"></i>
            <h3>Save</h3>
            <p>Unlock exclusive deals and discounts to save big on flights, hotels, activities, and more.</p>
          </div>
          <div class="col-md-4 g-4">
            <i class="fa-solid fa-plane-departure"></i>
            <h3>Personalize</h3>
            <p>Let us help you create the trip of your dreams with personalized recommendations for destinations,
              accommodations, and activities.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular Destinations section -->
    <section class="container" id="popular_destination">
      <div class="row">
        <div class="row header">
          <h1>Popular Destinations</h1>
        </div>
        <div class="row">
          <div class="col-md-8 clo">
            <img src="img/San Framcisco, CA.jpg">
            <div class="des">
              <h2>Explore</h2>
              <h3>San Framcisco</h3>
            </div>
          </div>
          <div class="col-md-4 clo">
            <img src="img/new york city.jpg">
            <div class="des">
              <h2>Uncover</h2>
              <h3>New York</h3>
            </div>
          </div>
        </div>
        <!-- 2nd row -->
        <div class="row row_2">
          <div class="col-md-4 clo">
            <img src="img/california ca.jpg">
            <div class="des">
              <h2>Discover</h2>
              <h3>San Framcisco</h3>
            </div>
          </div>
          <div class="col-md-4 clo">
            <img src="img/pexels-leah-kelley-3935702.jpg">
            <div class="des">
              <h2>Paradise</h2>
              <h3>New York</h3>
            </div>
          </div>
          <div class="col-md-4 clo">
            <img src="img/Seven Mile Bridge, Key West, United States.jpg">
            <div class="des">
              <h2>Adventure</h2>
              <h3>New York</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  

  <script src="js/bootstrap.js"></script>

</body>

</html>