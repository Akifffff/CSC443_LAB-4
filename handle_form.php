<html>
    <head>
        <title>Form Feedback</title>

</head>
<body>
<?php #Script handle form

if (isset ($_POST["gender"])) {
    if($_POST["gender"] == 'M') {

        $message = '<b><p>Good Day, Sir </b></p>' ;
    }
    if($_POST["gender"] == 'F' ) {
        $message = '<b><p>Good Day, Madam </b></p>' ;
    }
}else{
    $_POST["gender"] = null;
    
    echo '<p><b> You Forgot to Choose Your Gender! </b></p>' ;
}


    ?>
    </body>
    </html>