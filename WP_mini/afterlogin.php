<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitnessFreak - Fitness & Nutrition</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets\css\style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        FitnessFreak<span class="span">.</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-toggle-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li class="navbar-item">
            <a href="#course" class="navbar-link" data-nav-link>Courses</a>
          </li>

          <li class="navbar-item">
            <a href="#blog" class="navbar-link" data-nav-link>Healthy recipes</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>

      <!--<img src="./assets/images/about-banner.jpg" alt="Favicon" class="circular-image">-->



      <button class="nav-toggle-btn" aria-label="open manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="hero" id="home" data-section
        style="background-image: url('./assets/images/WhatsApp Image 2023-10-26 at 2.26.02 AM.jpeg')">
        <div class="container">

          <p class="hero-subtitle">Fitness & Nutrition</p>

          <h1 class="h1 hero-title">Building a healthier body.</h1>

          <p class="hero-text">
            Welcome to our fitness website,<?php session_start(); $data=$_SESSION['fitness']; echo $data['name'];?> your one-stop destination for all things related to health and wellness. 
            We have analyzed your data like gender:<?php echo $_COOKIE['gender'];?> and other parameters to customise workouts for a better experimence. You can Chat with our AI coach by clickining on the bottom-right icon.
           </p>

          <a href="#" class="btn btn-secondary">Start Course</a>

          <div class="social-wrapper">

            <p class="social-title">Connect with us:</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-skype"></ion-icon>
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

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-label="service" data-section>
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-1.svg" width="60" height="60" loading="lazy" alt="Beginners Course">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Beginners Course</a>
                </h3>

                <p class="card-text">
                  ur basic courses are meticulously crafted to provide newcomers with a solid foundation in the subject matter, ensuring they grasp fundamental concepts and principles. 
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card active">

                <div class="card-icon">
                  <img src="./assets/images/service-2.svg" width="60" height="60" loading="lazy" alt="Intermediate Course">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Intermediate Course</a>
                </h3>

                <p class="card-text">
                  . Intermediate courses are designed to take learners a step further, delving deeper into the intricacies of the topic and honing their skills.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-3.svg" width="60" height="60" loading="lazy" alt="Advanced Course">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Advanced Course</a>
                </h3>

                <p class="card-text">
                  Our advanced courses cater to seasoned learners, challenging them with the most complex and specialized aspects of the subject
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" id="about" data-section>
        <div class="container">

          <div class="about-banner img-holder" style="--width: 470; --height: 580;">
            <img src="assets\images\coach.webp" width="470" height="580" loading="lazy" alt="about banner"
              class="img-cover">

            <a href="#" class="btn btn-secondary">Meet Instructor</a>
          </div>

          <div class="about-content">

            <p class="section-subtitle">25+ Years Of Experience</p>

            <h2 class="h2 section-title">Meet our expert instructors.</h2>

            <p class="section-text">
              
Our expert instructors are highly qualified professionals with extensive experience and expertise in their respective fields. They are dedicated to providing valuable guidance, knowledge, and support to help learners achieve their goals and excel in their chosen subjects.
            </p>

            <h3 class="about-h3">100+ Courses</h3>

            <p class="section-text">
              Our courses are thoughtfully designed to provide comprehensive and engaging learning experiences. They cover a wide range of topics and skill levels, catering to beginners and advanced learners alike. With up-to-date content and practical applications, our courses empower students to acquire new knowledge and skills that are relevant in today's ever-changing world.

            </p>

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course" aria-label="course" id="course" data-section>
        <div class="container">

          <div class="title-wrapper">
            <p class="section-subtitle">100+ Courses Available</p>

            <h2 class="h2 section-title">Fitness & Nutrition Courses</h2>
          </div>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-1.jpg" width="350" height="300" loading="lazy"
                    alt="Children Nutrition and Cooking" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="98">$98</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Siddharth Singh</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="https://youtu.be/IT94xC35u6k?si=6LtRE0gnApj4LjTO" class="card-title">Children Nutrition and Cooking</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT8H20M">07 hr 30 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">24 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-2.jpg" width="350" height="300" loading="lazy"
                    alt="Introduction to Food and Health." class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="72">$72</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Riya thapar</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="https://youtu.be/IT94xC35u6k?si=6LtRE0gnApj4LjTO" class="card-title">Introduction to Food and Health.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT9H25M">08 hr 45 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">15 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-3.jpg" width="350" height="300" loading="lazy"
                    alt="Nutrition and Lifestyle in Pregnancy" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="68">$68</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">David Laid</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="https://youtu.be/IT94xC35u6k?si=6LtRE0gnApj4LjTO" class="card-title">Nutrition and Lifestyle in Pregnancy</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT3H38M">04 hr 28 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">21 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-4.jpg" width="350" height="300" loading="lazy"
                    alt="Expertise on Fitness, Nutrition and Health" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="98">$98</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Siddharth Singh</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="https://youtu.be/IT94xC35u6k?si=6LtRE0gnApj4LjTO" class="card-title">Expertise on Fitness, Nutrition and Health</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT2H16M">02 hr 16 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">14 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-5.jpg" width="350" height="300" loading="lazy"
                    alt="Hacking exercise for health new science of fitness" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="72">$72</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Riya Thapar</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="https://youtu.be/IT94xC35u6k?si=6LtRE0gnApj4LjTO" class="card-title">Hacking exercise for health new science of fitness</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT6H12M">06 hr 12 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">35 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-6.jpg" width="350" height="300" loading="lazy"
                    alt="Designing Your Personal Weight Loss Plan" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="68">$68</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">David Laid</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="https://youtu.be/IT94xC35u6k?si=6LtRE0gnApj4LjTO" class="card-title">Designing Your Personal Weight Loss Plan</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT9H34M">09 hr 34 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">28 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-label="blog" id="blog" data-section>
        <div class="container">

          <div class="title-wrapper">
            <p class="section-subtitle">Our Blog Post</p>

            <h2 class="h2 section-title">Latest Article of Nutrition</h2>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2023-10-15">
                    <span class="span">15</span> Oct
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Smit Thakare</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">92 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">38 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Push-Pull-Legs Workout</a>
                </h3>

                <p class="card-text">
                  The push-pull-legs (PPL) workout routine is a highly effective and popular training method that divides exercises into three main categories: pushing movements, pulling movements, and leg exercises. This well-balanced approach promotes muscle growth, strength development, and overall fitness by targeting different muscle groups on different days, allowing for efficient recovery and progression.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2023-10-20">
                    <span class="span">20</span> Oct
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Tanya Thapar</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">93 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">43 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Intermittent Fasting</a>
                </h3>

                <p class="card-text">
                  Intermittent fasting is a dietary approach that alternates between periods of eating and fasting. It has gained significant attention for its potential health benefits, including weight management, improved metabolic health, and even potential longevity advantages. By controlling the timing of food intake, intermittent fasting offers a flexible and sustainable way to support overall well-being and achieve specific health goals.

                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2023-10-22">
                    <span class="span">22</span> Oct
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Mihir Subramaniam</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">83 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">31 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Carb cycling</a>
                </h3>

                <p class="card-text">
                  Carb cycling is a nutritional strategy that involves varying the intake of carbohydrates on different days of the week or during different phases of a fitness or dietary plan. This approach is often used by athletes and individuals seeking to manage their body composition effectively. By cycling between high and low carbohydrate days, it aims to optimize energy levels, support muscle growth, and promote fat loss while providing some flexibility in dietary choices.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #APP
      -->

      <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-card">

            <p class="section-subtitle">Mobile App Available</p>

            <h2 class="h2 section-title">
              Download our mobile app.<br>
              and start coaching anytime.
            </h2>

            <div class="wrapper">
              <a href="#" class="app-link" aria-label="play store">
                <img src="./assets/images/play-store.jpg" width="134" height="38" loading="lazy" alt="Play Store"
                  class="img">
              </a>

              <a href="#" class="app-link" aria-label="app store">
                <img src="./assets/images/app-store.jpg" width="132" height="38" loading="lazy" alt="App Store"
                  class="img">
              </a>
            </div>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section" data-section>
      <div class="container">

        <div class="footer-list">

          <p class="footer-list-title">Subscribe Newsletter</p>

          <p class="footer-list-text">
            Lorem Ipsum has been them an industry printer took a galley make book.
          </p>

          <form action="" class="footer-form">
            <input type="email" name="email_address" aria-label="email" placeholder="Enter email" required
              class="email-field">

            <button type="submit" class="btn btn-secondary">Subscribe Now</button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">All Courses</p>
          </li>

          <li>
            <a href="#" class="footer-link">Daily Exercise</a>
          </li>

          <li>
            <a href="#" class="footer-link">Find Your Balance</a>
          </li>

          <li>
            <a href="#" class="footer-link">Personal Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">Natural Process</a>
          </li>

          <li>
            <a href="#" class="footer-link">Immune System</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gives You Energy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Discussion</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Customer Support</a>
          </li>

          <li>
            <a href="#" class="footer-link">Course FAQ’s</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Classes</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Opening Hours</p>
          </li>

          <li>
            <a href="#" class="footer-link">Mon-Fri: 9 AM – 6 PM</a>
          </li>

          <li>
            <a href="#" class="footer-link">Saturday: 9 AM – 4 PM</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sunday: Closed</a>
          </li>

          <li>
            <p class="footer-list-title address-title">Location</p>
          </li>

          <li>
            <address class="address">
              K J Somaiya College Of Engineering<br>
              Ghatkopher
            </address>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 by
          <a href="#" class="copyright-link">Siddharth&Riya</a>
        </p>

        <ul class="footer-bottom-list">

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Terms of Service</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Security</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>






  <a href="http://127.0.0.1:7860" class="back-top-btn" data-back-top-btn>
    <img src="assets\images\3602674.png" alt="Chatbot Icon" style="width: 65px; height: 65px;">
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>