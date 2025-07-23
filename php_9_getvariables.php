<!-- This is some text -->
<?php

    // print_r($_GET);

?>
<!-- This is some more text -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Get Variables</title>
    </head>
    <body>        
        
        <?php

            if ($_GET["submit"]) {

                if ($_GET["name"]) {
                    echo "Your name is " . $_GET['name'];
                } else {
                    echo "Please enter your name";
                }

            }
        ?>

        <form>
            <label for="name">Name</label>
            <input name="name" type="text" />

            <input type="submit" name="submit" value="Submit Your Name" />
        </form>

    </body>
</html>





