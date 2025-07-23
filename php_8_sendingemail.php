<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>ٍSending Email</title>

    </head>
    <body>      

		<?php			

			$emailTo = "test@greenhost.gov.uk"; 
			$subject = "I hope this works!";
			$body = "I think you're great";
			$headers = "From: imansalha2025@gmail.com";

			if (mail($emailTo, $subject, $body, $headers)) {
				echo "Mail sent successfully!";
			} else {
				echo "Mail not sent!";
			}

		?>              

    </body>

</html>