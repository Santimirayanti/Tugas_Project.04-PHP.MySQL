var typed = new Typed(".typing", {
  strings: ["NI KETUT", "SANTI", "MIRAYANTI"],
  typeSpeed: 100,
  backSpeed: 60,
  loop: true,
});

// Function untuk memuat konten blog secara dinamis menggunakan AJAX
function loadBlogContent() {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Jika AJAX berhasil
      const response = xhr.responseText;
      const blogSection = document.querySelector("#blog .kolom");
      // Menambahkan efek animasi fade in pada konten blog
      blogSection.innerHTML = response;
      fadeIn(blogSection); // Panggil fungsi fadeIn untuk memberikan efek animasi
      animateTextColors(); // Panggil fungsi animateTextColors untuk memberikan efek warna pada teks
    }
  };
  xhr.open("GET", "blog-content.html", true); // Ganti "blog-content.html" dengan path ke file konten blog Anda
  xhr.send();
}

// Fungsi untuk memberikan efek warna pada teks saat dihover
function animateTextColors() {
  const allTextElements = document.querySelectorAll("h2, h3, h4, p, a");
  allTextElements.forEach((element) => {
    element.addEventListener("mouseenter", function () {
      // Saat mouse masuk, ganti warna teks menjadi warna acak
      const randomHue = Math.floor(Math.random() * 360); // Nilai hue (warna) acak antara 0 dan 360
      const randomSaturation = Math.floor(Math.random() * 101); // Nilai saturasi acak antara 0 dan 100
      const randomLightness = Math.floor(Math.random() * 51) + 50; // Nilai kecerahan acak antara 50 dan 100 (untuk memberikan warna yang lebih cerah)
      this.style.color = `hsl(${randomHue}, ${randomSaturation}%, ${randomLightness}%)`; // Menggunakan HSL untuk memberikan warna
    });
    element.addEventListener("mouseleave", function () {
      // Saat mouse meninggalkan elemen, kembalikan warna teks ke warna semula
      this.style.color = ""; // Menghapus warna yang telah ditetapkan, sehingga kembali ke warna aslinya
    });
  });
}

// Panggil fungsi untuk memberikan efek warna pada teks saat dihover
animateTextColors();
