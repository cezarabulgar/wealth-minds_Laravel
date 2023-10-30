<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- External CSS stylesheets -->
  <link rel="stylesheet" href="/financialeducation/c.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>

<title>WealthMinds</title>

<body>
  <!-- Include header -->
  <?php require_once "header.html"?>
  
  <!-- Include hero section -->
  <?php require_once "hero.html"?>
  
  <section id="Container"> 
    <div class="welcomeContainer">
      <div class="row row-grid justify-content-around align-items-center">
        <div class="col-lg-5 order-lg-2">
          <div class="pr-lg-4">
            <h3>Welcome to WealthMinds, your trusted resource for financial education.</h3>
            <p class="lead mt-4 mb-5">Our mission is to empower individuals like you to take control of their financial futures. With our expertise and commitment to quality education, we provide you with the knowledge and tools necessary to make informed financial decisions.
              <i class="fa-solid fa-arrow-right"></i>
              <a class="read-more-link" href="aboutus.php">Read more</a>
            </p>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <img src="../images/finance.jpeg" alt="" class="img-fluid img-center" >
        </div>
      </div>
    </div>
  </section>
  
  <section class="slice slice-lg bg-section-secondary overflow-hidden"> 
    <a href="#courses" class="tongue tonguw-up tongue-section-secondary" data-scroll-to>
      <i class="fa-solid fa-angle-down"></i>
    </a>
  </section>
  
  <section class="slice slice-lg bg-section-secondary overflow-hidden" id="courses"> 
    <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
    </div>
    <div class="courcessContainer position-relative zindex-100">
      <div class="mb-5 px-3 text-center">
        <span class="badge badge-soft-success badge-pill badge-lg"> Courcess</span>
        <h3 class="mt-4">Featured Courses</h3>
        <div class="fluid-paragraph mt-3">
          <p class="lead lh-180">Discover Our Most Popular Courses and Transform Your Financial Future</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card px-3">
            <div class="card-body py-5">
              <div class="d-flex align-items-center">
                <div class="icon bg-gradient-primary text-white round-circle icon-shape shadow-primary">
                  <i class="fa-solid fa-lines-leaning"></i>
                </div>
                <div class="icon-text pl-4">
                  <h5 class="mb-0">Financial Literacy 101</h5>
                </div>
              </div>
              <p class="mt-4 mb-0">Learn the fundamentals of personal finance, budgeting, and debt management.</p>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card px-3">
            <div class="card-body py-5">
              <div class="d-flex align-items-center">
                <div class="icon bg-gradient-primary text-white round-circle icon-shape shadow-primary">
                  <i class="fa-solid fa-lines-leaning"></i>
                </div>
                <div class="icon-text pl-4">
                  <h5 class="mb-0">Investing for Beginners</h5>
                </div>
              </div>
              <p class="mt-4 mb-0">Gain the knowledge and confidence to start investing in stocks, bonds, and mutual funds.</p>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card px-3">
            <div class="card-body py-5">
              <div class="d-flex align-items-center">
                <div class="icon bg-gradient-primary text-white round-circle icon-shape shadow-primary">
                  <i class="fa-solid fa-lines-leaning"></i>
                </div> 
                <div class="icon-text pl-4">
                  <h5 class="mb-0">Retirement Planning Made Easy</h5>
                </div>
              </div>
              <p class="mt-4 mb-0">Plan for a comfortable retirement with strategies for saving, investing, and maximizing your retirement accounts.</p>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="newsContainer">
    <rssapp-carousel id="Lnt0MxyfoGmwa59W"></rssapp-carousel>
    <script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
  </section>
  
  <!-- Include testimonials section -->
  <?php require_once "testimonials.html"?>
  
  <!-- Include contact form -->
  <?php require_once "../contactus/contactForm.php"?>
  
  <!-- Include footer -->
  <?php require_once "footer.html"?>
</body>
</html>
