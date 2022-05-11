<html>
    <head>
        <title>Form Feedback</title>

</head>
<body>
<?php #Script handle form

if ($_POST["name"] && $_POST["comments"] && $_POST["email"] && $_POST["gender"]) {
    echo "Thank you," .$_POST["name"]. " for the following comments: <br /> <tt>". 
    $_POST["comments"]. " </tt> <p> We will reply you at <i>" . $_POST["email"].
    "</i></p>";
    echo $message;
}


    ?>
    </body>
    </html>