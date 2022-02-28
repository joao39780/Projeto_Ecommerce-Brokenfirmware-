<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style-product.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">
        .navbar a
        {
            text-decoration: none;
        }
        .icons a
        {
            text-decoration: none;
        }
        .icons a:hover
        {
            color: orange;
        }
        .fas.fa-search
        {
        height: 4rem;
        width: 5rem;
        text-align: center;
        line-height: 4rem;
        font-size: 2rem;
        cursor: pointer;
        background: orange;
        color:#fff;
        }
        #img
        {
            height: 130px;
            width: 130px;
        }
        .ptitle{
            color:#ff3300;
            
        }
        .ptitle a{
            text-decoration:none;
            

        }
        .text-muted{
            text-align:center;
        }         
    </style>
</head>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

