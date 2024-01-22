<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KYUDS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.jpg') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script>
        // check for errors and success messages
        @if (session('success'))
            alert("{{ session('success') }}");
            // unset the session after displaying the message
            {{ session()->forget('success') }}
        @endif
        @if (session('error'))
            alert("{{ session('error') }}");
            // unset the session after displaying the message
            {{ session()->forget('error') }}
        @endif
    </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('home') }}">KYUDS</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://kyu.ac.ug">University website</a></li>
              <li><a href="https://myportal.kyu.ac.ug">Student's Portal</a></li>
              <li><a href="https://kelms.kyu.ac.ug">KELMS</a></li>
              <li><a href="https://lib.kyu.ac.ug">library Catologue</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">DebateHub</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Welcome to KYUDS</h1>
      <h2>Explore the world of debates with Kyambogo Debate Society.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <figure class="figure">
              <img src="{{ asset('img/about.jpg') }}" class="figure-img img-fluid rounded" alt="Your Image">
              <figcaption class="figure-caption">Mr. Arinda Saviour - President KYUDS (2023)</figcaption>
            </figure>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About us</h3>
            <p>
              The Kyambogo Debate Society is dedicated to fostering intellectual discussions and promoting critical thinking through engaging debates. Our mission is to provide a platform for students to express their ideas and opinions in a respectful and constructive manner.            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Mission Statement:</h4>
                <p>Empowering Minds, Fostering Dialogue: Our mission is to cultivate a vibrant intellectual community by providing a platform for students to engage in constructive and thought-provoking debates. We aim to develop critical thinking, effective communication, and a deep understanding of diverse perspectives among our members.</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-cube-alt"></i>
                <h4>Vision Statement:</h4>
                <p>Shaping Leaders, Building Bridges: Our vision is to be a leading force in nurturing future leaders who can navigate the complexities of the world through open discourse. We aspire to create an inclusive space where individuals from all backgrounds come together to share ideas, challenge assumptions, and collaboratively work towards positive change in our society.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div> -->

          <div class="col-lg-4 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-4 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Sponsors</p>
          </div>

          <div class="col-lg-4 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Debaters</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Our Services</h2>
          <p>Explore the diverse range of activities and services offered by the Kyambogo Debate Society.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i class="bx bx-message-square-detail"></i>
              </div>
              <h4><a href="#">Debate Sessions</a></h4>
              <p>Engage in structured debates on a variety of topics to enhance your critical thinking and public speaking skills.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <i class="bx bx-trophy"></i>
              </div>
              <h4><a href="#">Competitive Debating</a></h4>
              <p>Represent KYUDS in local, national, and international competitions, showcasing your debating prowess.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <i class="bx bx-chalkboard"></i>
              </div>
              <h4><a href="#">Skill-Building Workshops</a></h4>
              <p>Participate in workshops covering research techniques, case construction, and effective rebuttal strategies.</p>
            </div>
          </div>

          <!-- Add more service items as needed -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Join Us Section ======= -->
    <section id="join-us" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Join Kyambogo Debate Society</h3>
          <p>Enhance your skills, broaden your perspectives, and be part of a vibrant intellectual community. Join us in promoting thoughtful discourse and critical thinking.</p>
          <a class="cta-btn" href="#">Become a Member</a>
        </div>

      </div>
    </section><!-- End Join Us Section -->

    <!-- ======= KYUDS Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Meet the dedicated individuals leading KYUDS to excellence in intellectual discourse and critical thinking.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="President - KYUDS">
                <div class="social">
                  <a title="twitter" href="#"><i class="bi bi-twitter"></i></a>
                  <a title="facebook" href="#"><i class="bi bi-facebook"></i></a>
                  <a title="instagram" href="#"><i class="bi bi-instagram"></i></a>
                  <a title="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>John Doe</h4>
                <span>President</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="Vice President - KYUDS">
                <div class="social">
                  <a title="twitter" href="#"><i class="bi bi-twitter"></i></a>
                  <a title="facebook" href="#"><i class="bi bi-facebook"></i></a>
                  <a title="instagram" href="#"><i class="bi bi-instagram"></i></a>
                  <a title="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jane Smith</h4>
                <span>Vice President</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="Director of Debates - KYUDS">
                <div class="social">
                  <a title="twitter" href="#"><i class="bi bi-twitter"></i></a>
                  <a title="facebook" href="#"><i class="bi bi-facebook"></i></a>
                  <a title="instagram" href="#"><i class="bi bi-instagram"></i></a>
                  <a title="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Alice Johnson</h4>
                <span>Director of Debates</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="Public Relations Officer - KYUDS">
                <div class="social">
                  <a title="twitter" href="#"><i class="bi bi-twitter"></i></a>
                  <a title="facebook" href="#"><i class="bi bi-facebook"></i></a>
                  <a title="instagram" href="#"><i class="bi bi-instagram"></i></a>
                  <a title="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Michael Brown</h4>
                <span>Public Relations Officer</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End KYUDS Team Section -->


    <!-- ======= KYUDS FAQ Section ======= -->
    <section id="kyuds-faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>KYUDS FAQs</h2>
          <p>Explore frequently asked questions about the Kyambogo University Debate Society (KYUDS).</p>
        </div>

        <div class="faq-list">
          <ul>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#kyuds-faq-list-1">What is KYUDS and its mission? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="kyuds-faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  KYUDS, the Kyambogo University Debate Society, is a vibrant community dedicated to fostering intellectual discourse, critical thinking, and effective communication among students. The mission is to provide a platform for students to engage in structured debates, competitions, and skill-building activities.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#kyuds-faq-list-2" class="collapsed">How can I join KYUDS? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="kyuds-faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Joining KYUDS is easy! Attend our orientation sessions at the beginning of each semester or contact the membership coordinator for more information. We welcome students from all disciplines who have a passion for debate and intellectual exploration.
                </p>
              </div>
            </li>

            <!-- Add more KYUDS-specific FAQs as needed -->

          </ul>
        </div>

      </div>
    </section><!-- End KYUDS FAQ Section -->

    <!-- ======= DebateHub FAQ Section ======= -->
    <section id="debatehub-faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>DebateHub FAQs</h2>
          <p>Explore frequently asked questions about DebateHub.</p>
        </div>

        <div class="faq-list">
          <ul>

            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#debatehub-faq-list-1">What is DebateHub and how does it work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="debatehub-faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  DebateHub is an online platform developed by KYUDS to facilitate virtual debates, discussions, and collaborative learning. It provides a space for members to engage in debates, share resources, and participate in online events.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#debatehub-faq-list-2" class="collapsed">How can I participate in a debate on DebateHub? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="debatehub-faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  To participate in a debate, log in to your DebateHub account, browse the upcoming events, and register for a debate of your interest. Follow the provided guidelines and join the discussion during the scheduled time.
                </p>
              </div>
            </li>

            <!-- Add more DebateHub-specific FAQs as needed -->

          </ul>
        </div>

      </div>
    </section><!-- End DebateHub FAQ Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Connect with the Kyambogo University Debate Society! Engage with us through inquiries, suggestions, or by sharing your thoughts.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Kyambogo University | P.O Box 1, Kyambogo | Kampala Uganda </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>debatesociety@kyu.ac.ug</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+256 7 06 083 050</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{ route('submitContactForm') }}" method="post" class="contact-form">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Sending</div>
                <div class="error-message">something went wrong. Please try again later.</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            <!-- Include jQuery library -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                $(document).ready(function () {
                // Function to handle form submission
                $("form.contact-form").submit(function (e) {
                    e.preventDefault(); // Prevent the form from submitting the traditional way

                    // Display loading message
                    $(".loading").css("display", "block");

                    // Perform an AJAX request to handle form submission
                    $.ajax({
                        type: "POST",
                        url: $(this).attr("action"),
                        data: $(this).serialize(),
                        success: function (response) {
                            // Hide loading message
                            $(".loading").css("display", "none");

                            if (response.success) {
                                // If the server returns a success response, display the success message
                                $(".sent-message").css("display", "block");

                                // Clear form fields if needed
                                $("form.contact-form")[0].reset();

                                // Automatically hide success message after 5 seconds (5000 milliseconds)
                                setTimeout(function () {
                                    $(".sent-message").css("display", "none");
                                }, 5000);
                            } else {
                                // If the server returns an error response, display the error message
                                $(".error-message").css("display", "block");

                                // Automatically hide error message after 5 seconds (5000 milliseconds)
                                setTimeout(function () {
                                    $(".error-message").css("display", "none");
                                }, 5000);
                            }
                        },
                        error: function () {
                            // Hide loading message
                            $(".loading").css("display", "none");

                            // Display error message
                            $(".error-message").css("display", "block");

                            // Automatically hide error message after 5 seconds (5000 milliseconds)
                            setTimeout(function () {
                                $(".error-message").css("display", "none");
                            }, 5000);
                        }
                    });
                });
            });
            </script>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KYUDS</h3>
            <p>
              Kyambogo University <br>
              P.O Box 1<br>
              Kyambogo<br>
              Kampala Uganda <br><br>
              <strong>Twitter:</strong> @KYUDebateSociety<br>
              <strong>Email:</strong> debatesociety@kyu.ac.ug<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/terms.html">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/privacy.html">Privacy policy</a></li>
              <script type="text/javascript">
                // Get current year
                var d = new Date();
                var year = d.getFullYear();
                var dbr = "{{ route('login') }}"
                document.write('<li><i class="bx bx-chevron-right"></i> <a href="'+ dbr +'">DebateHub ' + year + '</a></li>');
              </script>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Debate Sessions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Competitive Debating</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Skill-Building Workshops</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Stay Informed with KYUDS</h4>
            <p>Join our newsletter to receive updates, event announcements, and insights into the world of debates and intellectual discourse at Kyambogo University.</p>
            <form action="{{ route('newsletter.subscription') }}" method="post">
                @csrf
              <input title="email" required type="email" name="email" placeholder="Your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>KYUDS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://hollytechsolnz.rf.gd/">Holly Tech Solutions</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" title="twitter" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" title="facebook" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" title="instagram" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" title="google-plus" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" title="linkedin" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a title="back to top" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>