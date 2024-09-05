<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>TixBox Newsletter Signup</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="styles.css"> <!-- Link to the external CSS file -->
</head>
<style>
    @font-face {
    font-family: 'Graphicus DT Bold Oblique';
    src: url('graphicusdt-boldoblique.ttf') format('truetype');
}

@font-face {
    font-family: 'FuturaEF Heavy';
    src: url('FuturaEF-Heavy.otf') format('opentype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Dundee Bold';
    src: url('DundeeBold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Futura No. 2 Medium';
    src: url('futura-no-2-medium-dee.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Futura TS ExtraBold';
    src: url('futura-ts-extrabold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: "Twentieth Century Bold";
    src: url('Twentieth Century Bold.ttf') format('truetype');
}


    /* Content Styles */
.content {
    padding-top: 70px;
    text-align: left;
    padding: auto px;
    max-width: 810px;
    margin: 0 auto;
}

.content h1 {
    font-family: 'FuturaEF Heavy', sans-serif;
    font-size: 38px;
    margin-bottom: 20px;
    color: #333;
    
}

.content p {
    font-family: 'Futura No. 2 Medium', sans-serif;
    font-size: 18px;
    line-height: 1.6;
    color: #333;
}

/* Assistance Section Styles */
.assistance {
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
    background-color: #19DAC9;
    max-width: 700px;
    padding: 60px;
    padding-top: 30px;
    padding-right:60px;
    color: white;
    margin: 28px auto;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    position: relative;
    font-family: 'Futura No. 2 Medium';
    font-family: 'FuturaEF Heavy';
    src: url('futuraef-heavy.ttf') format('truetype'); /* Update the path to the font file */
    font-weight: normal;
    font-style: normal;
}

.assistance h1 {
    font-size: 52px;
    margin-bottom: 10px;
    text-align: justify;
}

.assistance p {
      font-size: 22px;
    margin: 0;
    padding: 0;
    
}

.assistance .contact-btn {
    background-color: white;
    color: #19DAC9;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    font-weight: bold;
    position: absolute;
    right: 200px;
   top: 65%;
    transform: translate(83%, -150%);

    
}

    </style>

<body>
    <div class="container">
        <?php include 'header.php'; ?>

        <div class="content">
            <h1><b>Hello [Recipient's Name]</b>,</h1>
            <p>Thank you for registering for the TixBox newsletter! As one of our early subscribers, you’ll be among the first to access tickets for all upcoming events.</p>
            <p>If you have any questions about your account or need assistance, contact us at <a href="mailto:support@tixbox.com">support@tixbox.com</a></p>
            <p><b>Best regards,</b><br>TixBox Team</p>
        </div>

        <div class="assistance">
       <p><h1 style="color: white;">Need Assistance?</h1></p> 

            <p>For any inquiries or assistance, please contact</p>
            <p>our customer support team at:</p><br>
            <p style="text-align: left;">Phone: +971 4 271 3736<br>
   Email: <a href="mailto:support@tixbox.com" class="text-white">support@tixbox.com</a>
</p>

            <a href="mailto:support@tixbox.com" class="btn btn-light text-info contact-btn mt-3">Contact us</a>
        </div>

        <?php include 'footer.php'; ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
   
</body>
</html>
