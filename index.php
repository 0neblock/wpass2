<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Silverado Cinemas</title>
    
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />
    </head>
    <body>
    <div id="nav">
        <div id="heading"><a href="/">Silverado Cinemas</a></div>
        <a id="toggleham" class="hamburger" href="#">
                <div class="hamwrapper">
                    <div class="hamline"></div>
                    <div class="hamline"></div>
                    <div class="hamline"></div>
                </div>
        </a>
        <div id="menu">
                <a href="index.html">Home</a>
                <a href="movies.php">Movies</a>
        </div>
    </div>
        <div class="blanknav"></div>
        <div class="margin-top"></div>
        <div class="container" id="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="content">
                    <h3>Exciting new Silverado Experience!</h3>
                <p>Silverado Cinema has been loved and supported by the local Silverville Community for over 20 years. <br />
                The time has come to give back to our loyal cinema-goers, and we think you'll be exciting about our upcoming changes.</p>
                <p>
                    Over the past 3 Months, we've obtained state-of-the-art Projection Services, Including all-new 3D Projectors, 5.1 Dolby Surround Sound, and an amazing lighting installation.<br />
                    Our new seat installation, including gold-class comfortable seating, and Bean bags for the kids up front.<br />
                    This will change your movie watching experience forever!<br /></p>
                <p>
                    We open up with our fresh face in a few months, and we'd love for you to join us.<br />
                    In the mean-time, contact us to ask us anything.
                </p>
                    </div>
                    <br />
                    <div class="content">
                     <h3>Contact Us</h3>
            <p>Use this form to send your words of wisdom, or dismay, to the team at Silverado Cinemas.<br />
                Include your return email and we will do our very best to get back to you as soon as possible.
            </p>

            <hr />

            <form method="post" action='http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php' >
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required class="required"/><br />

                <label for="category">Choose a category: </label>
                <select id="category" name="subject" style="max-width: inherit;">
                    <option>General Enquiry</option>
                    <option>Group and Corporate Bookings</option>
                    <option>Suggestions and/or Complaints</option>
                </select><br /><br />
                <label for="message" >Enter your message: </label><br />
                <textarea style="width: 250px; height: 75px;" id="message" required name="message" class="required"></textarea>
                <br />
                <label for="test-email">Send a copy to yourself? </label>
                <input type='checkbox' name='test-email' id="test-email" value='true' /><br /><br />
                
                <input type="submit" id="contact-submit" value="Send!"/><br />
                <div id="missingParts" style="display: none;">!Missing some required fields!</div>
            </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="row">
                        
                        <div class="col-xs-12">
                            <div class="specialContainer">
                                <div class="special">
                                    <div id="beanbagHeading">Sink in and relax with your family in our brand new beanbags!</div>
                                
                                    <img class="img-responsive center-block" src="images/beanbag.jpg" id="beanbag" alt="Beanbag"/>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
        <span class="footerText"> &copy; Silverado Cinemas | Site design by Aidan Cyr, s3471910 |
      <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;height:31px"
        src="http://www.w3.org/html/logo/downloads/HTML5_Logo_32.png" alt="HTML Validator" /></a> |
      <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0; height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Validator"/></a></span>
        </div>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script>
            var closeDropdown = false;
            $(function(){
                $("#toggleham").click(function(){
                    $("#menu").toggle("fast");
                });
                $(window).resize(function(){
                    if($(window).width() >= 768){
                        $("#menu").show("fast");
                        closeDropdown = true;
                    } else {
                        if(closeDropdown == true){
                            closeDropdown = false;
                            $("#menu").css({display: "none"});
                        }
                    }
                });
            });
        </script>
</body>
</html>