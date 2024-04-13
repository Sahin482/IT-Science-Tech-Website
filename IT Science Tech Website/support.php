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

    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">

    <!-- font-awesome.min.css linking here  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  </head>
  <body>


    <header class="header-top">
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="video.php">Tech Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Buy Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.php">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="client_review.php">Client Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="support.php">Support Team</a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
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
    </header>

<!-- contact us section start -->

<section class="contact-us" id="contact">
  <div class="container">
    <d class="row">
      <div class="col-lg-12">
        <div class="inner-contact">
          <div class="tittle-contact">
            <h1>Support Team</h1>
          </div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="comunication">
          <img src="./img/phone-call.png" alt="" class="img-fluid">
          <p>Phone: +8801791337482 <br>
            Fax: (412) 123-8290</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="comunication">
          <img src="./img/gps.png" alt="" class="img-fluid">
          <p>Begum Rokeya soroni <br>
            Shawrapara <br>
            Dhaka 1207</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="comunication">
          <img src="./img/mail.png" alt="" class="img-fluid">
          <p>support@itscience.com</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="registration">
  <div class="container">
    <form action="support.php" method="POST" id="my-form" class="main-form">

      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName">
      </div>

      <div class="form-group">
        <label for="latsName">Last Name</label>
        <input type="text" id="lastName" name="lastName">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="massage">Massage</label>
        <textarea name="massage" id="massage" cols="30" rows="6"></textarea>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>
  <div id="status"></div>
</section>

<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58410.69506433816!2d90.3666431!3d23.79481830000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b5821033bd%3A0x472751305a52300b!2sBegum%20Rokeya%20soroni%20Dhaka%201207!5e0!3m2!1sen!2sbd!4v1683710846469!5m2!1sen!2sbd" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- contact us section end -->

<!-- footer section strat -->
<footer class="footer">
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
         <p>© Copyright by IT-Science All right Reserved 2023.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer section end -->



     <!-- script.js linking here -->
     <script type="text/javascript" src="./js/script.js"></script>

     <!-- bootstrap.bundle.min.js linking here -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 

  </body>
</html>
<?php



$conn = mysqli_connect("localhost","root","","registrationdb");




// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security (to prevent SQL injection)
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $massage = $conn->real_escape_string($_POST['massage']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO support_team (first_name, last_name, user_email, massage)
            VALUES ('$firstName', '$lastName', '$email', '$massage')"; // Assuming 'Subject' for the subject column, update as needed

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>