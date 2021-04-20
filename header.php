<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        <?php 
            if(isset($page_title))
            {
                echo $page_title;
            }
        ?>
    </title>

    <style>
    .logo_image{
        width:8%;
        height:8%;
        padding-right:10px;
    }

    body {
    margin: 0;
    background: #353535;
    font-family: 'Work Sans', sans-serif;
    

    background-image: url('fintech-icon-abstract-financial-technology-background_34663-91.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;

}
.text-center{
    color:#1b1c1f;
    padding-top:100px;
}
    
    
    </style>
</head>
<body>
