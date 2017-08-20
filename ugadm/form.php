<?php
session_start();

if(!$_SESSION['valid']){
	header('Location: index.php');
}
?>

<!DOCTYPE html >
<html>
<head>

  <title>html form</title>


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
     <link rel="stylesheet" href="css/form.css">

    
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
     <script type="text/javascript" src="js/angular.js"></script>

</head>
 

<body ng-app="myApp">
    
<br />
<div class="inner contact" ng-controller='feedback'>
                <!-- Form Area -->
                <div class="contact-form" >
                    <!-- Form -->
                    <form id="contact-us" >
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">

                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Year of Enrollment" ng-model="year" />

                             <input type="text" name="name" id="name" required="required" class="form" placeholder="Branch/stream"
                             ng-model="branch" />



                            <!-- Email -->
                            <input type="text" name="faculty" id="name" required="required" class="form" placeholder="Instructor name"
                            ng-model="faculty" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Course Offered" 
                            ng-model="course"/>
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Feedback" ng-model="feedback"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold" ng-click="send()">SEND FEEDBACK</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->

          <div class="container">
          <div class="row">
    <div class="col-md-12">
    <h1 style="color:#2E86C1; font-family: 'Baloo Bhaijaan', cursive; font-size: 50px;t  font-weight: bold;">Privacy Assured </h1>
      
    </div>
    
    </div>
  <div class="row">
    <div class="col-md-12">
      <h1 style="color:#2E86C1; font-family: 'Baloo Bhaijaan', cursive; font-size: 50px;t  font-weight: bold;">Please give honest feedback for improvement</h1>
    </div>
  </div>

</div>




 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>

  
