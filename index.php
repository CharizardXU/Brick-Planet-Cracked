<?php include('Includes/header.php') ?>
<?php
if (isset($_COOKIE['brickplanet_login'])) {
  header("Location: /home");
  exit();
}
?>

<div class="position-relative text-center">
  <div class="position-absolute top-0" style="width:100%;height:100%;min-height:700px;opacity:0.75;background-color:#000000;z-index:2;">&nbsp;</div>
  <video id="home-video" autoplay muted loop style="max-height:100%;max-width:100%;min-height:700px;" style="z-index:1;">
    <source src="/cdn/videos/MontageV2.mp4" type="video/mp4">
      Your browser does not support the video tag.
  </video>
  <div class="position-absolute top-0" style="z-index:3;width:100%;">
    <div style="padding-top:15%" class="d-none d-xl-block"></div>
    <div style="padding-top:30%" class="d-block d-xl-none"></div>
    <div class="row justify-content-center" style="margin:0">
      <div class="col-md-6 col-12">
        <div class="text-6xl fw-bold mb-4 text-white" style="text-shadow: 2px 2px 6px #111;">Build and Play Games.</div>
        <div class="text-2xl faded mb-4 fw-semibold" style="text-shadow: 2px 2px 6px #111;">Start Exploring Today!</div>
        <a href="https://www.brickplanet.com/register" class="btn btn-lg btn-primary fw-semibold px-3">Sign Up Now</a>
      </div>
    </div>
  </div>
</div>
<?php include('Includes/footer.php') ?>
