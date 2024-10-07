<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <!-- Include Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <style>
        .slider {
            width: 80%;
            margin: auto;
        }
        .slick-slide img {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="slider">
    <div><img src="image1.jpg" alt="Image 1"></div>
    <div><img src="image2.jpg" alt="Image 2"></div>
    <div><img src="image3.jpg" alt="Image 3"></div>
    <!-- You can use PHP to dynamically generate these images -->
    <?php
    $images = ['image4.jpg', 'image5.jpg', 'image6.jpg']; // Example array of images
    foreach ($images as $image) {
        echo "<div><img src='$image' alt='$image'></div>";
    }
    ?>
</div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Slick JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true, // Enable auto-play
                dots: true,     // Show navigation dots
                infinite: true, // Infinite loop sliding
                speed: 500,     // Transition speed
                slidesToShow: 1,// Number of slides to show
                slidesToScroll: 1 // Number of slides to scroll
            });
        });
    </script>
</body>
</html>
