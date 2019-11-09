<?php
include 'XOMA.php';
$LAN = new XOMA;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <link href="https://fonts.googleapis.com/css?family=Anton|Fascinate+Inline|Modak|Open+Sans+Condensed:300|Playfair+Display&display=swap" rel="stylesheet">
                <meta charset="UTF-8">
                <link href="https://fonts.googleapis.com/css?family=Lora|Rajdhani|Titillium+Web&display=swap" rel="stylesheet">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <style>
                body{
                    font-family: 'Playfair Display', serif;

                };
                .result-text{
                    font-family: 'Titillium Web', sans-serif;

                }
            </style>
            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
            <script>
            $( document ).ready(function() {
                $('.result-text').hide();
                setTimeout(function (){
                $('.result-text').show();
                $('.result-text2').hide();
            }, 1000);
            });
            </script>

    </head>

<body>
    <div class="container">
        <div class="h1 text-center m-4">
            TEXT ENCRYPTER TO PROTECT DATA
        </div>
    <div class="card p-4">
        <form method="post" action="">
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <textarea value="<?php if( isset($_POST["mytext"]) ){ echo $_POST["mytext"];};?>" name="mytext" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Some text to ENCRYPT"></textarea>
            </div>
            <input type="submit" class="btn btn-warning" value="CRYPT" name="crypt">
            <input type="submit" class="btn btn-success" value="DECRYPT" name="decrypt">
        </form>
    </div>

    <div class="card ">
        <div class="result bg-dark text-white d-flex">
            <p class="result-text2 m-2 p-1">Loading...</p>
            <div class="spinner-border result-text2 spinner-border-sm m-3" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <p class="m-2 result-text w-100">
            
                <?php

                if (isset($_POST["crypt"]) && !empty($_POST["crypt"])) {

                    $T = $_POST["mytext"];

                    echo $LAN::CONVERT_STRING($T);

                }elseif (isset($_POST["decrypt"]) && !empty($_POST["decrypt"])) {

                    $T = $_POST["mytext"];

                    echo $LAN::DECRYPT_STRING($T);

                }else{
                    echo "No text Entered";
                }

                ?>
            </p>
        </div>
    </div>
    </div>

</body>
</html>
   
    

