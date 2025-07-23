<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Post Variables</title>
    </head>
    <body>
        <div>
            <?php

                $names = array('Fred', 'Rob', 'Ian');

                // print_r($_POST);

                if (isset($_POST['submit'])) {
                    if ($_POST['name']) {
                        $knowYou = 0;

                        foreach ($names as $name) {
                            if ($_POST['name'] == $name) {
                                echo 'I Know you! Your name is ' . $name;
                                $knowYou = 1;
                            }
                        }

                        if (!$knowYou)
                            echo 'I dont know you, ' . $_POST['name'];
                    } else {
                        echo 'Please enter your name';
                    }
                }

            ?>
            <form method="post">
                <label for="name">Name</label>
                <input name="name" type="text">
                <input type="submit" name="submit" value="Submit Your Name">
            </form>
        </div>
    </body>
</html>
