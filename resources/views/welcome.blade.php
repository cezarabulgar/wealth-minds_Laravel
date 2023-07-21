@extends('layout')

@include('partials.hero')

@section('content')
<!-- --- Welcome Section --- -->
<section id="welcomeSection" class="welcome-section">
  <div class="image-container">
    <img src="../images/finance.jpeg" alt="">
  </div>
  <div class="text-container">
    <h3>Welcome to WealthMinds, your trusted resource for financial education</h3>
    <p>
      Our mission is to empower individuals like you to take control of their financial futures. With our expertise and commitment to quality education, we provide you with the knowledge and tools necessary to make informed financial decisions.
      <i class="fa-solid fa-arrow-right"></i>
      <a href="aboutus.php">Read more</a>
    </p>
  </div>
</section>

<!-- --- Courses Section --- -->
<section class="coursesSection" id="coursesSection">
  <div class="courses-header">
    <span>Our Services</span>
    <h2>Our Services</h2>
    <p>At WealthMinds, we are dedicated to providing comprehensive financial education and empowering individuals like you to take control of their financial future. <br>Through our range of services, we offer you the knowledge, tools, and resources needed to make informed financial decisions and achieve your goals.</p>
  </div>
  <div class="financial_course">
    <div class="course" onmouseover="toggleCourseClass(this)" onmouseout="toggleCourseClass(this)">
      <div class="icon">
        <i class="fa-solid fa-lines-leaning"></i>
      </div>
      <h3>Financial Courses</h3>
      <p>We offer a wide range of featured courses designed to equip you with the knowledge and skills needed to navigate the complexities of personal finance and wealth management. Whether you're a beginner or an experienced investor, our courses are tailored to meet your needs and empower you to make informed financial decisions. From budgeting and saving to investing and retirement planning, our expert instructors will guide you every step of the way.</p>
      <button class="btn"><span></span>Find more</button>
    </div>
    <div class="course" onmouseover="toggleCourseClass(this)" onmouseout="toggleCourseClass(this)">
      <div class="icon">
        <i class="fa-solid fa-file"></i>
      </div>
      <h3>Learning Resources</h3>
      <p>We provide a wealth of financial resources to supplement your learning and help you further expand your knowledge base. Our collection of resources includes e-books, guides, infographics, and interactive tools, all aimed at providing practical insights and actionable advice. Explore our resource library to access valuable information on various financial topics, such as budgeting, debt management, tax planning, and more.</p>
      <button class="btn"><span></span>Enroll now</button>
    </div>
    <div class="course" onmouseover="toggleCourseClass(this)" onmouseout="toggleCourseClass(this)">
      <div class="icon">
       <i class="fa-solid fa-chalkboard-user"></i>
      </div>
      <h3>Webinars & Workshops</h3>
      <p>We believe in the power of interactive learning experiences, which is why we offer engaging webinars and workshops conducted by industry experts. These live sessions provide an opportunity to dive deeper into specific financial topics, ask questions, and engage in discussions with both instructors and fellow learners. Our webinars and workshops cover a wide range of subjects, from advanced investment strategies to financial planning for major life events. Stay updated with our event calendar to participate in these insightful sessions and gain practical insights from experienced professionals.</p>
      <button class="btn"><span></span>Enroll now</button>
    </div>
  </div>
</section>

<!-- --- Review Section --- -->
  <section class="review-container">
    <div class="review-header"> 
    <h2>Stories of Growth and Success</h2>
    </div>
    <div class="slide-content">
        <div class="review-wrapper" id="slider">
            <div class="review active">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class='review-image'>
                        <img src="{{ asset('/images/emily-johnson.jpg')}}"  alt="" class="review-img" />
                    </div>
                </div>
                <div class="review-content">
                    <h2 class="name">Emily Johnson</h2>
                    <h3 class="job">Project Manager</h3>
                    <p class="description">I can't express enough how grateful I am for this financial education website. Before discovering it, I felt completely lost when it came to managing my money. But the courses provided clear, practical guidance on budgeting, investing, and debt management. Thanks to the knowledge I gained, I've paid off my credit card debt and started saving for my future. The instructors were knowledgeable, the content was engaging, and I highly recommend this website to anyone looking to take control of their finances.</p>
                </div>
            </div>
            <div class="review">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class='review-image'>
                        <img src="{{ asset('/images/emily-johnson.jpg')}}"  alt="" class="review-img" />
                    </div>
                </div>
                <div class="review-content">
                    <h2 class="name">Michael Anderson</h2>
                    <h3 class="job">Business Owner</h3>
                    <p class="description">I can't thank this financial education website enough for the impact it has had on my financial well-being. As a small business owner, I always struggled with understanding financial statements and managing cash flow effectively. The courses provided on this website were a game-changer for me. The instructors broke down complex financial concepts into digestible lessons, and the real-life examples and case studies helped me apply what I learned to my own business. With the knowledge gained, I was able to analyze my financials better, make informed decisions, and ultimately improve my business's profitability. This website is a hidden gem for entrepreneurs looking to strengthen their financial acumen.</p>
                </div>
            </div>
            <div class="review">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class='review-image'>
                        <img src="{{ asset('/images/emily-johnson.jpg')}}"  alt="" class="review-img" />
                    </div>
                </div>
                <div class="review-content">
                    <h2 class="name">Sarah Martinez</h2>
                    <h3 class="job">Developer</h3>
                    <p class="description">I recently went through a major life transition, and I needed to reassess my financial situation. That's when I stumbled upon this amazing financial education website. The resources available were incredible - from practical worksheets to insightful articles. I particularly loved the step-by-step guides on creating a budget and saving for emergencies. The website's blog also provided valuable tips and real-life examples that made the content relatable. Thanks to this website, I now feel more confident in managing my finances and planning for a secure future. I'm truly grateful for the knowledge I gained here.</p>
                </div>
            </div>
            <div class="review">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class='review-image'>
                        <img src="{{ asset('/images/emily-johnson.jpg')}}"  alt="" class="review-img" />
                    </div>
                </div>
                <div class="review-content">
                    <h2 class="name">John Thompson</h2>
                    <h3 class="job">Engineer</h3>
                    <p class="description">As a young professional, I knew I needed to learn more about personal finance, but I didn't know where to start. Thankfully, I found this financial education website, and it has been a game-changer for me. The courses were comprehensive and well-structured, covering everything from basic financial principles to advanced investing strategies. The instructors explained complex concepts in a way that was easy to understand, and the interactive quizzes helped reinforce my learning. I've since made smarter financial decisions, increased my savings, and even started investing. This website is a must for anyone seeking financial empowerment.</p>
                </div>
            </div>
        </div>
        <div class="progress-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
</section>


<section class="contactForm">
  <div class="map"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d182321.8188514326!2d25.92983107585364!3d44.437707259681076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f93abf3cad4f%3A0xac0632e37c9ca628!2sBucharest!5e0!3m2!1sen!2sro!4v1687938321963!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    <div class="form-header">
      <h2>Help us reach out</h2>
      <h3>Let us your contact details</h3>
    <form class="contact-form" action="" method="POST">
      <input type="text" placeholder="Enter First Name">
      <input type="text" placeholder="Enter Last Name">
      <input type="email" placeholder="Enter E-mail (email@gmail.com)">
      <input type="phone" placeholder="Enter Phone Number">
      <input type="text" placeholder="Let us a message">

          <button type="submit">Send</button>
    </form>
  </div>
</section>


<!-- Cookie consent banner -->
  <!-- <div id="cookieConsent" class="cookie-consent">
    This website uses cookies to ensure you get the best experience. By using our site, you consent to our use of cookies.
    <button onclick="dismissCookieConsent()">Got it!</button>
  </div>
 -->

