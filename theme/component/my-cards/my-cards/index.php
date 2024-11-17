<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--=============== REMIXICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="theme/css/swiper-bundle.min.css">
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="theme/css/style.css">
  <link rel="stylesheet" href="theme/component/navbar/navbar.css">
  <link rel="stylesheet" href="theme/component/sidenav/sidenav.css">
  <link rel="stylesheet" href="theme/component/wallet-card/wallet-card.css">
  <link rel="stylesheet" href="theme/component/app-bottom-menu/appBottomMenu.css">
  <link rel="stylesheet" href="theme/component/stats-card/stats.css">
  <link rel="stylesheet" href="theme/component/transactions/transactions.css">
  <link rel="stylesheet" href="theme/component/my-cards/my-cards.css">
  <title>Finapp</title>
</head>

<body>

<?php include('theme/component/navbar/navbar.php'); ?>
  <!-- loader -->
  <?php include('theme/component/sidenav/sidenav.php'); ?>
  <?php include('theme/component/wallet-card/wallet-card.php'); ?>
  <!-- stats -->
  <?php include('theme/component/stats-card/stats.php'); ?>
  <!-- stats -->
  <!-- transactions. -->
  <?php include('theme/component/transactions/transactions.php'); ?>
  <!-- transactions. -->
  <!-- App Bottom Menu -->
  <?php include('theme/component/app-bottom-menu/appBottomMenu.php'); ?>


  <?php include('theme/component/my-cards/my-cards.php'); ?>
  <!-- App Bottom Menu -->
   




  <script src="theme/js/swiper-bundle.min.js"></script>
  <script src="theme/js/main.js"></script>




     
  <script src="theme/js/balance.js"> </script>
  <script src="theme/js/mySidenav.js"></script>
  </script>
</body>

</html>