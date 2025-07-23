<?php

    if ($_GET['city']) {
        $data = $_GET['city'];
        $content = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' . $data . '&appid=bdbf42fd3e5ee3f5a5b05fa480dbd54e');
        $weatherArray = json_decode($content, true);
        // print_r($weatherArray);

        if ($weatherArray['cod'] == 200) {
            $weather_data = '<div class="alert alert-success" role="alert">';
            $weather_data .= 'Todays weather is ' . $weatherArray['weather'][0]['description'];
            $weather_data .= 'The weather in ' . $_GET['city'] . " is currently '" . $weatherArray['weather'][0]['description'] . "'. ";
            $weather_data .= 'The Temperature is ' . round(($weatherArray['main']['temp']) - 273.15) . '&#176;C and the wind speed is ' . ($weatherArray['wind']['speed']) . 'm/s.';
            $weather_data .= '</div>';
        } else {
            $weather_data = '<div class="alert alert-danger" role="alert">';
            $weather_data .= 'Could not find that location!';
            $weather_data .= '</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- When Online -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
        
        <!-- When Offline -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <title>Weather Project</title>

        <style>
            
            body {
            background: rgb(254,112,46);
            background-image:linear-gradient(90deg, rgba(254,112,46,1) 0%, rgba(254,112,46,0) 13%, rgba(247,56,97,1) 100%), url(https://greenapis.net/php/images/weather.jpg);
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            }
                
            header {
            text-align: center;
            
            margin-top: 200px;
            }

            header h1 {

            color: #FFFFFF;
            text-shadow: 2px 2px 0 #4074b5, 2px -2px 0 #4074b5, -2px 2px 0 #4074b5, -2px -2px 0 #4074b5, 2px 0px 0 #4074b5, 0px 2px 0 #4074b5, -2px 0px 0 #4074b5, 0px -2px 0 #4074b5;
            color: white;
            }

            div#company_data {
            /* height: 100px; */
            background: #4caf50d1;
            margin-top: 20px;
            border-top: 2px solid white;
            }
            
        </style>
    </head>

    <body>

        <div class="main">
            
            <div class="container">

                <header>
                    <h1>What's the Weather?</h1>
                </header>
                
                <main>
                    <form>
                        <div class="mb-3">
                            <label for="search" class="form-label x">Enter the name of City.</label>
                            <input type="text" required class="form-control" name='city' placeholder="Silwad.." value="">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <div id="company_data">
                            <?php

                            if ($weather_data) {
                                echo $weather_data;
                            }

                            ?>
                        </div>
                    </form>
                </main>

            </div>
            
        </div>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>