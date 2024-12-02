<section class="alumni-section">
    <div class="alumni-parent">
        <div class="alumni-row-1">
            <div class="image-left">
                <img src="./img/right-photo.png" alt="">
            </div>
            <div class="alumni-add-row">
                <div class="alumni-row-title">
                    <p>Simak cerita sukses alumni</p>
                </div>
                <div class="alumni-row-text">
                    <p>Inspirasi Nyata dari Mereka yang Telah Berhasil Berkembang Bersama Luar Sekolah</p>
                </div>
            </div>
            <div class="image-right">
                <img src="./img/right-photo.png" alt="">
            </div>
        </div>
        <div class="alumni-row-2">
            <a href="javascript:void(0);" class="carousel-button prev-btn">&lt;</a>
            <div class="carousel-container">
                <div class="carousel-track">
                    <div class="alumni-card">
                        <img src="./img/card-video.png" alt="Card 1">
                    </div>
                    <div class="alumni-card">
                        <img src="./img/card-video.png" alt="Card 2">
                    </div>
                    <div class="alumni-card">
                        <img src="./img/card-video.png" alt="Card 3">
                    </div>
                    <div class="alumni-card">
                        <img src="./img/card-video.png" alt="Card 4">
                    </div>
                    <div class="alumni-card">
                        <img src="./img/card-video.png" alt="Card 5">
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" class="carousel-button next-btn">&gt;</a>
        </div>
    </div>
</section>
<script>
    // Pilih elemen-elemen penting
const track = document.querySelector('.carousel-track');
const prevButton = document.querySelector('.prev-btn');
const nextButton = document.querySelector('.next-btn');
const cards = document.querySelectorAll('.alumni-card');

// Tentukan variabel untuk mengontrol slide
let currentSlide = 0;
const totalSlides = cards.length;
const visibleCards = 3; // Jumlah kartu yang terlihat sekaligus
const cardWidth = cards[0].getBoundingClientRect().width + 20; // Lebar kartu + margin

// Perbarui posisi carousel
function updateCarousel() {
    const newPosition = -currentSlide * cardWidth;
    track.style.transform = `translateX(${newPosition}px)`;

    // Perbarui status tombol
    prevButton.disabled = currentSlide === 0;
    nextButton.disabled = currentSlide >= totalSlides - visibleCards;
}

// Tombol untuk slide ke kanan
nextButton.addEventListener('click', () => {
    if (currentSlide < totalSlides - visibleCards) {
        currentSlide++;
        updateCarousel();
    }
});

// Tombol untuk slide ke kiri
prevButton.addEventListener('click', () => {
    if (currentSlide > 0) {
        currentSlide--;
        updateCarousel();
    }
});

// Inisialisasi awal
updateCarousel();

</script>