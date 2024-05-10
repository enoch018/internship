<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css">
    <link rel="stylesheet" href="home/css/elegant-icons.css">
    <link rel="stylesheet" href="home/css/nice-select.css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/slicknav.min.css">
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* Custom styling */
        
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!-- Add your preloader HTML here -->

    <!-- Header Section Begin -->
    @include('home.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <!-- Add your hero section HTML here -->
   
    <!-- Latest Product Section Begin -->
   
        @include('home.product')
    
    <!-- Comment Form End -->

    <!-- Comment Section Begin -->
    <!-- Add your comment section HTML here -->
</body>

</html>
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
      var scrollpos = localStorage.getItem('scrollpos');
      if (scrollpos) window.scrollTo(0, scrollpos);
  });

  window.onbeforeunload = function (e) {
      localStorage.setItem('scrollpos', window.scrollY);
  };
</script>
