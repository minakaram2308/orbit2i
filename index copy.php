<?php



$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['message']) && $_POST['message'] != '' ){

   
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'info@alpharoar-uae.com';
    // $to = 'a.malek@orbit2i.ca';

    $msg = '
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    </head>
    <body>
     
        <h2 style="display:rlt;">'.$subject.'</h2>
        <h4 style="display:rlt;">From: '.$name.'</h4>

        <p style="text-align:center;">'.$message.'</p>
    </body>
    </html>
    ';
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <minakaramcs@gmail.com>' . "\r\n";  

    mail($to,$subject,$msg,$headers);
    $message_sent = true;
}


?>

<!DOCTYPE html>
<html lang=en-US>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <link rel="shortcut icon" href=wp-content/themes/caleader/Bab.png type="image/x-icon" />
    <title>اتصل بنا | باب ربح</title>
    <link rel=canonical href=index.html />

</head>
<body>

    <section class="contact_us_container">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder">
                    <div>
                        <h5 class="viptitle">
                            راسلنا الان
                        </h5>
                    </div>


                    <?php 
                        if( $message_send ):

                    ?>

                       <h4> Thanks for contection, we will contact u. </h4>
                    
                    <?php 
                       else:
                    ?>
                   
                    <!-- form holder -->
                    <form action="home.php" method="POST" class="contact-form" novalidate="novalidate">
                        <input class="form-control name" type="text" name="name" placeholder="الأسم">
                        <input class="form-control email" type="email" name="email" placeholder="الأيميل">
                        <input class="form-control" type="text" name="subject" placeholder="العنوان">
                        <textarea name="message" placeholder="الرسالة"></textarea>
                        <button type="submit" class="submit">ارسال<i class="fa fa-send"></i></button>
                    </form> <!-- End form holder -->

                    <?php 
                      endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

</body>
</html>