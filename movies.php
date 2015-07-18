<?php 
    function getOptions($number){
        for($i = 0; $i < $number; $i++){
            echo "<option>" . $i . "</option>";
        }
    }

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Silverado Cinemas - Movies</title>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="container">
            <div class="row">
        <div id="movies">
            <?php
    $movies = array();
$sponge = array("genre" => "Children", "id" => "CH", "img" => "sponge.jpg", "title" => "Sponge out of water", "desc" => "When a diabolical pirate above the sea steals the secret Krabby Patty formula, SpongeBob and his nemesis Plankton must team up in order to get it back.", "classification" => "g","times" => array(13, 13, 18, 18, 18, 12, 12));
$love = array("genre" => "Romantic Comedy", "id" => "RC", "img" => "love.jpg", "title" => "Love Actually", "desc" => "Follows the lives of eight very different couples in dealing with their love lives in various loosely interrelated tales all set during a frantic month before Christmas in London, England.", "classification" => "r", "times" => array(21, 21, 13, 13, 13, 18, 18));
$jurassic = array("genre" => "Action", "id" => "AC", "img" => "jurassic.jpg", "title" => "Jurassic World", "desc" => "Twenty-two years after the events of Jurassic Park (1993), Isla Nublar now features a fully functioning dinosaur theme park, Jurassic World, as originally envisioned by John Hammond. After 10 years of operation and visitor rates declining, in order to fulfill a corporate mandate, a new attraction is created to re-spark visitor's interest, which backfires horribly.", "classification" => "m", "times" => array(0, 0, 21, 21, 21, 21, 21));
$orphanage = array("genre" => "Foreign", "id" => "AF", "img" => "orphanage.jpg", "title" => "The Orphanage", "desc" => "A woman brings her family back to her childhood home, which used to be an orphanage for handicapped children. Before long, her son starts to communicate with an invisible new friend.", "classification" => "r", "times" => array(18, 18, 0, 0, 0, 15, 15));

    array_push($movies, $sponge);
    array_push($movies, $love);
    array_push($movies, $jurassic);
    array_push($movies, $orphanage);

    $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    for($i = 0; $i < sizeof($movies); $i++){ ?>
            <div class="col-xs-12 col-md-6">
            <div class="genre"><?php echo $movies[$i]["genre"]; ?>:</div>
            <div class="movie" data-movie="<?php echo $movies[$i]["id"]; ?>" id="<?php echo $movies[$i]["id"]; ?>">
                <div class="info">
                    <img class="image" src="images/<?php echo $movies[$i]["img"];?>" alt="Movie Image"/>
                    <div class="title"><?php echo $movies[$i]["title"];?></div>
                    <div class="desc"><?php echo $movies[$i]["desc"];?></div>
                    <img class="classification" src="images/<?php echo $movies[$i]["classification"]; ?>.png" alt="Classification"/>
                    <a href="#"><div  data-genre="Family" class="showtimes">Showing Times</div></a>
                </div>
                <div class="times">
                    <div class="legend"><div class="cheapTix">Cheap Tickets</div><div class="noTix">No Showings</div></div>
                    <br />
                    <div class="days">
                        <?php
                        for($j = 0; $j < 7; $j++){
                            $time = $movies[$i]["times"][$j] ? ($movies[$i]["times"][$j] <= 12 ? $movies[$i]["times"][$j] . "am" : ($movies[$i]["times"][$j] - 12) . "pm" ) : "No session";
                            $cheap = ($time != "No session") ? (($time == "1pm" || $j == 0 || $j == 1) ? "cheap": "") : "";
                            $nosesh = ($time == "No session") ? "nosesh" : "";
                            echo "<div class='day " . $cheap . " " . $nosesh . "'>" . $days[$j] . "<div class='time' data-day='" . $days[$j] . "'>";
                            
                            echo $time . "</div></div>";
                        }   ?></div>
                    <div class="tickets" data-movie="<?php echo $movies[$i]["title"]; ?>">
                    <h3>Book tickets for: <i><span class="movieTitle"></span></i> at <span class="bookingTime"></span> on <span class="bookingDay"></span></h3>
                        <form action="//titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post" target="_blank">
                            <input type="hidden" name="film" class="formFilm" />
                            <input type="hidden" name="day" class="formDay" />
                            <input type="hidden" name="time" class="formTime" />
                            
                            <div class="selectors">
                                <div class="sub"><span>Adults</span>
                                    
                                <label>Standard: <select name="SA" class="SA"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                <label>First Class: <select name="FA" class="FA"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                </div>
                                <div class="sub"><span>Children/Concession</span>
                                <label>Child Standard: <select name="SC" class="SC"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                <label>Child First Class: <select name="FC" class="FC"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                <label>Concession Standard: <select name="SP" class="SP"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                
                                </div>
                                <div class="sub"><span>Beanbags!</span>
                                    <label>For One: <select name="B1" class="B1"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                    <label>For Two: <select name="B2" class="B2"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                    <label>For Three: <select name="B3" class="B3"><?php getOptions(5); ?></select> $<span class="price"></span></label>
                                </div>
                            </div>
                            <div class="total"><span class="totalText">Total:</span> $<span class="rawTotal">0.00</span><input type="hidden" name="price" class="rawTotal" value="0.00"/></div>
                            <br />
                            <input type="submit" class="go" value="Book!" />
                            
                        </form>
                    </div>
                </div>
            </div>
            </div>
<?php } ?>
                </div>
        </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script>
            var closeDropdown = false;
            var prices = {cheap: [
                {"SA": 12},
                {"SP": 10},
                {"SC": 8},
                {"FA": 25},
                {"FC": 20},
                {"B1": 20},
                {"B2": 20},
                {"B3": 20}
            ], normal: [
                {"SA": 18},
                {"SP": 15},
                {"SC": 12},
                {"FA": 30},
                {"FC": 25},
                {"B1": 30},
                {"B2": 30},
                {"B3": 30}
            ]}
            $(function(){
                $("select").change(function(){
                    var total = 0.0;
                    var day = $(this).parents("form").find(".formDay").val();
                    var time = $(this).parents("form").find(".formTime").val();
                    var cheap = false;
                    if(day == "Monday" || day == "Tuesday" || time == "1pm"){
                        cheap = true;
                    }
                    $(this).parents(".selectors").find("select").each(function(index, option){
                        var temp = cheap ? prices.cheap : prices.normal;
                        for(var i = 0; i < temp.length; i++){
                            if($(this).attr("name") in temp[i]){
                                
                                total += temp[i][$(this).attr("name")] * $(this).val();
                            }
                        }
                    });
                    $(this).parents("form").find(".rawTotal").html(total + ".00");
                    $(this).parents("form").find(".rawTotal").val(total + ".00");
                });
                $(".showtimes").click(function(e){
                    e.preventDefault();
                    if($(this).parents(0).children(".times").css("display") == "none"){
                        $(this).parents(0).children(".times").show("fast");
                        $(this).html("Hide Times");
                    } else {
                        $(this).parents(0).children(".times").hide("fast");
                        $(this).html("Show Times");
                    }
                });
                $(".day").click(function(){
                    $(".day").removeAttr("style");
                    $(this).attr("style", "background-color: #efefef;");
                    var tickets = $(this).parents(1).children(".tickets");
                    if($(this).find(".time").html() === "No session"){
                        tickets.hide("fast");
                        return false;
                    }
                    
                    // Setting all the dynamic variables ja
                    tickets.find(".movieTitle").html(tickets.attr("data-movie"));
                    tickets.find(".bookingTime").html($(this).find(".time").html());
                    tickets.find(".formFilm").val(tickets.parents(".movie").attr("data-movie"));
                    tickets.find(".formDay").val($(this).find(".time").attr("data-day"));
                    tickets.find(".formTime").val($(this).find(".time").html());
                    tickets.find(".bookingDay").html($(this).find(".time").attr("data-day"));
                    
                    var cheap = false;
                        if(tickets.find(".bookingDay").html() == "Monday" || tickets.find(".bookingDay").html() == "Tuesday" || tickets.find(".formTime").val() == "1pm"){
                            cheap = true;
                        }
                    var temp = cheap ? prices.cheap : prices.normal;
                    tickets.find("select").each(function(){
                        for(var i = 0; i < 8; i++){
                            if($(this).attr("name") in temp[i]){
                                $(this).parents("label").find(".price").html(temp[i][$(this).attr("name")]);
                            }
                        }
                    });
                    tickets.find("form").each(function(){
                        var total = 0.0;
                    var day = $(this).find(".formDay").val();
                    var time = $(this).find(".formTime").val();
                    var cheap = false;
                    if(day == "Monday" || day == "Tuesday" || time == "1pm"){
                        cheap = true;
                    }
                    $(this).find(".selectors").find("select").each(function(index, option){
                        var temp = cheap ? prices.cheap : prices.normal;
                        for(var i = 0; i < temp.length; i++){
                            if($(this).attr("name") in temp[i]){
                                
                                total += temp[i][$(this).attr("name")] * $(this).val();
                            }
                        }
                    });
                    $(this).find(".rawTotal").html(total + ".00");
                    $(this).find(".rawTotal").val(total + ".00");
                    });
                    tickets.show("fast");
                });
                $(".movie").hover(function(){
                    // In
                    $(this).find(".showtimes").show();
                }, function(){
                    // Out
                    $(this).find(".showtimes").hide();
                });
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
        <div class="footer">
        <span class="footerText"> &copy; Silverado Cinemas | Site design by Aidan Cyr, s3471910 |
      <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;height:31px"
        src="http://www.w3.org/html/logo/downloads/HTML5_Logo_32.png" alt="HTML Validator" /></a> |
      <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0; height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Validator"/></a></span>
        </div>
</body>
</html>