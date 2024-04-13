<!--
Into this file, we write a code for display user information.
-->

<?php
include_once('link.php');
include_once('header1.php');

?>
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="img/user.svg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $fname." ".$lname; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          <?php

// Assuming you have a database connection established


$conn = mysqli_connect("localhost","root","","registrationdb");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Assume you have a variable $data_id that you want to check
if (!isset($data_id)) {
    // $data_id is not set, so pull data from the database
    $sql = "SELECT * FROM tbluser where `Email`='$email' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row in a table
       

        while ($row = $result->fetch_assoc()) {
            // Assign values to variables
            $data_id = $row["ID"];
            $first_name = $row["Firstname"];
            $last_name = $row["Lastname"];
            $user_email = $row["Gender"];
          
            // Display data in table rows
            echo "
                    <tr>
                    <td>First Name: </td>
                    <td>$first_name</td></tr>

<tr>                   
<td>Last Name: </td>
 <td>$last_name</td>
 </tr>
 <tr><td>Gender: </td>
                    <td>$user_email</td>
                
                  </tr>";
        }

    
    } else {
        echo "No results found";
    }
}

// Close the database connection
$conn->close();

// Rest of your code
?>
          	
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
   