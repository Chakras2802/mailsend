<?php

    if(isset($_POST['submit']))

    {

        $fname = $_POST['firstname']; // Get Name value from HTML Form

        $lname = $_POST['lastname']; // Get Email Value

        $country = $_POST['country']; // Get Mobile No

        $msg = $_POST['message']; // Get Message Value

         

        $to = "sakkaravarthi96@gmail.com"; // You can change here your Email

        $subject = "'$fname' has been sent a mail"; // This is your subject

         

        // HTML Message Starts here

        $message ="

        <html>

            <body>

                <table style='width:600px;'>

                    <tbody>

                        <tr>

                            <td style='width:150px'><strong>First Name: </strong></td>

                            <td style='width:400px'>$fname</td>

                        </tr>

                        <tr>

                            <td style='width:150px'><strong>Last Name: </strong></td>

                            <td style='width:400px'>$lname</td>

                        </tr>

                        <tr>

                            <td style='width:150px'><strong>Country: </strong></td>

                            <td style='width:400px'>$country</td>

                        </tr>

                        <tr>

                            <td style='width:150px'><strong>Message: </strong></td>

                            <td style='width:400px'>$msg</td>

                        </tr>

                    </tbody>

                </table>

            </body>

        </html>

        ";

        // HTML Message Ends here

         

        // Always set content-type when sending HTML email

        $headers = "MIME-Version: 1.0" . "\r\n";

        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

 

        // More headers

        $headers .= 'From: Admin <admin@websapex.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id

        $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc

        $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc

         

        if(mail($to,$subject,$message,$headers)){

            // Message if mail has been sent

            echo "<script>

                    alert('Mail has been sent Successfully.');

                </script>";

        }

 

        else{

            // Message if mail has been not sent

            echo "<script>

                    alert('EMAIL FAILED');

                </script>";

        }

    }

?>






<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>


<body>

<h2>Responsive Contact Section</h2>
<p>Resize the browser window to see the effect.</p>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
     
      <form action="submit.php">
        
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
   
      </form>
    </div>
  </div>
</div>

</body>
</html>
