<?php
     if ($_POST) {
        
        if (!$_POST["email"]) {
            $error .= "An email address is required.<br>";
        }
        if (!$_POST["address"]) {
            $error .= "The address field is required.<br>";
        }
        if (!$_POST["subject"]) {
            $error .= "The subject is required.<br>";
        }
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
        } else {
            $emailTo = "deependra6260@gmail.com";
            $subject = $_POST['subject'];
            $address = $_POST['address'];
            $headers = "From: ".$_POST['email'];
            if (mail($emailTo, $subject, $address, $headers)) {
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
               
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
            }
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Mini porject</title>
</head>
<body>
    <div class="container">
        <h1>Hello world</h1>
    <div id="error"></div>
        <form class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="Subject" class="form-label">Subject</label>
    <input type="text" class="form-control" id="sunject">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="submit">Sign in</button>
  </div>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script type="text/javascript">
         $("form").submit(function(e) {
              var error = "";
              if ($("#email").val() == "") {
                  error += "The email field is required.<br>"
              }
              if ($("#subject").val() == "") {
                  error += "The subject field is required.<br>"
              }
              if ($("#inputAddress").val() == "") {
                  error += "The Address field is required.<br>"
              }
              if (error != "") {
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in  form:</strong></p>' + error + '</div>');
                  return false;
              } else {
                  return true;
              }
          })
    </script>

</body>
</html>