<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IT Science</title>

    <!-- style.css linking here  -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- bootstrap.min.css linking here -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- fonts.google linking here  -->

    <link
      href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- font-awesome.min.css linking here  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <body>
    <!-- <header class="header-top">
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
             <h4 style="color:white">IT Science</h4>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="video.html"">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.html">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.html">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="client_review.html">Client Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="support.html">Support</a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Type Here"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header> -->

    <!-- registration start -->

    <section class="registration">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form  action="process.php" method="POST"  class="r-form">
              <div class="container">
                <div class="form-content">
				<div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
					    <a href="index.php">Home</a></div><br>
                  <h1><span style=color:white;>REGISTER<span> <span style=color:white;>Here<span></h1>                           
                  <br />
                  <p><span style=color:white;>Please fill in this form to enroll this course.<span></p>
                  <br />

                  <div class="main-group">
                    <div class="form-group">
                      <label for=" Name"> Name</label>
                      <input
                        type="text"
                        placeholder="Name"
                        name="Name"
                        class="form-control"
                        required
                      />
                    </div>

                    <div class="form-group">
                      <label for="email"> Email</label>
                      <input
                        type="text"
                        placeholder=" Enter Email"
                        name="email"
                        class="form-control"
                        required
                      />
                    </div>
                    <div class="form-group">
                      <label for="email"> Phone Number</label>
                      <input
                        type="number"
                        placeholder=" Enter Phone Number"
                        name="Number"
                        class="form-control"
                        required
                      />
                    </div>

                    
                    <div class="form-group">
                      <label for="birthday"> Date Of Birth </label>
                      <input
                        type="date"
                        id=" birthday"
                        name=" birthday"
                        class="birth-control"
                      />
                    </div>


                  

                    <div class="form-group">
                      <label for="course"> Course</label>
                      <select name="course" class="form-control">
                        <option value="none" selected>Select</option>
                        <option value="Video Editing">Video Editing</option>
                        <option
                          value="Graphic
                        Design"
                        >
                          Graphic Design
                        </option>
                        <option
                          value="SEO
                        Optimaize"
                        >
                          SEO Optimaize
                        </option>
                        <option
                          value="Youtube
                        Monetization"
                        >
                          Youtube Monetization
                        </option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input
                        type="submit"
                        value="Register"
                        class="btn-submit"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- aregistration end -->

    <!-- footer section strat -->
    <!-- <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="icon">
         <ul>
          <li><a href="#">
            <i class="fa-brands fa-behance"></i>
          </a></li>
          <li><a href="#">
            <i class="fa-brands fa-dribbble"></i>
          </a></li>
          <li><a href="#">
            <i class="fa-brands fa-twitter"></i>
          </a></li>
          <li><a href="#">
            <i class="fa-brands fa-facebook-f"></i>
          </a></li>
          <li><a href="#">
            <i class="fa-brands fa-linkedin-in"></i>
          </a></li>
         </ul>
         <p>© Copyright by <span>IT-Science</span> All right Reserved 2023.</p>
        </div>
      </div>
    </div>
  </div>
</footer> -->
    <!-- footer section end -->

    <!-- script.js linking here -->
    <script type="text/javascript" src="./js/script.js"></script>

    <!-- bootstrap.bundle.min.js linking here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
