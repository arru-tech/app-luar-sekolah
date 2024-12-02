<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Alumni</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="carousel-container">
    <h1>Simak cerita sukses alumni</h1>
    <p>Inspirasi Nyata dari Mereka yang Telah Berhasil Berkembang Bersama Luar Sekolah</p>
    <div class="carousel">
      <button class="carousel-btn prev" id="prevBtn">&lt;</button>
      <div class="carousel-track-container">
        <ul class="carousel-track">
          <li class="carousel-item">
            <img src="./img/card-video.png" alt="Galang Saputra">
            <div class="caption">
              <h3>Galang Saputra</h3>
              <p>UI/UX Designer</p>
            </div>
          </li>
          <li class="carousel-item">
            <img src="./img/card-video.png" alt="Fanny Thia">
            <div class="caption">
              <h3>Fanny Thia</h3>
              <p>Graphic Designer</p>
            </div>
          </li>
          <li class="carousel-item">
            <img src="./img/card-video.png" alt="Abimanyu Fahri">
            <div class="caption">
              <h3>Abimanyu Fahri</h3>
              <p>Web Developer</p>
            </div>
          </li>
          <li class="carousel-item">
            <img src="./img/card-video.png" alt="Abimanyu Fahri">
            <div class="caption">
              <h3>Abimanyu Fahri</h3>
              <p>Web Developer</p>
            </div>
          </li>
        </ul>
      </div>
      <button class="carousel-btn next" id="nextBtn">&gt;</button>
    </div>
    <div class="carousel-indicators">
      <span class="indicator active"></span>
      <span class="indicator"></span>
      <span class="indicator"></span>
    </div>
  </section>
  <script src="test.js"></script>
</body>
</html>
