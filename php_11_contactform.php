
<?php

    if ( isset($_POST['submit']) ) {

        if (!$_POST['name']) {
            $error  = '<br />Please enter your name';
        }

        if (!$_POST['email']) {
            $error .= '<br />Please enter your email address';
        }

        if (!$_POST['comment']) {
            $error .= '<br />Please enter a comment';
        }

        if ($_POST['email'] != '' AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error .= '<br />Please enter a valid email address';
        }

        if ( isset($error) ) {
            $result = '<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>' . $error . '</div>';
        } else {
            if ( mail('test@greenhost.org.uk', 'Comment from Iman Salha!', 'Name: ' . $_POST['name'] . ' Email: ' . $_POST['email'] . ' Comment: ' . $_POST['comment']) ) {
                $result = '<div class="alert alert-success"><strong>Thank you!</strong>I\'ll be in touch.</div>';
            } else {
                $result = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <title>Contact Form</title>

        <style>

            .emailForm {
                border:1px solid grey;
                border-radius:10px;
                margin-top:20px;
                padding-top: 10px;
            }

            textarea {
                height:120px;
            }
            form {
                padding-bottom:20px;
            }
            h1{
                text-align:center;
            }

        </style>

    </head>
    <body> 

        <div class="container">

            <div class="row">
            
                <div class="col-md-6 mx-auto emailForm">

                    <h1>My Email Form</h1>

                    <?php

                        if (isset($result)) {
                            echo $result;
                        }

                        $name = '';
                        $email = '';
                        $comment = '';

                        if (isset($_POST['name'])) {
                            $name = $_POST['name'];
                        }

                        if (isset($_POST['email'])) {
                            $email = $_POST['email'];
                        }

                        if (isset($_POST['comment'])) {
                            $comment = $_POST['comment'];
                        }

                    ?>

                    <p class="lead">Please get in touch - I'll get back to you as soon as i can.</p>

                    <form method="post">
                        
                        <div class="form-group mb-3">
                        
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $name; ?>"  />
                        
                        </div>
                        
                        <div class="form-group mb-3">
                        
                        <label for="email">Your Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" />
                        
                        </div>
                        
                        <div class="form-group mb-3">
                        
                        <label for="comment">Your Comment:</label>
                        <textarea class="form-control" name="comment"><?php echo $comment; ?></textarea>
                        
                        </div>
                        
                        <div class="d-flex justify-content-center">
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
                        </div>   
                    
                    </form>
                </div>

            </div>
        </div>
    
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>