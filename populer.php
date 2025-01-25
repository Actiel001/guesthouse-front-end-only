
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERPOPULER CIK!</title>
    <link rel="icon" href="Images/ff.png" type="image/png">

<style>
    
/* Reset styles */
body, h1, h2, p, img, a {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
    color: #333;
}

.card-container {
    display: flex;
    gap: 20px; 
    overflow: hidden; 
    width: 100%; 
    scroll-behavior: smooth; 
}
.card-container a {
    text-decoration: none; 
    color: inherit; 
    display: block; 
}

.card {
    min-width: 250px; 
    flex: 0 0 auto;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 10px;
}

.card img {
    border-radius: 8px;
    width: 100%;
}

section {
    padding: 20px;
    margin: 20px 0;
}

#terpopuler {
    text-align: center;
}

.images {
    display: flex; 
    justify-content: center; 
    gap: 20px;
    margin-top: 20px; 
}

.images img {
    width: 45%; 
    height: 250px; 
    object-fit: cover; 
    border-radius: 8px;
    transition: transform 0.3s ease; 
}

.images img:hover {
    transform: scale(1.1); 
}

.images img:active {
    transform: scale(1.2); 
}




.info {
    background-color: #fff4c3;
    padding: 20px;
    margin: 20px 0; 
    width: 100%; 
    border-radius: 8px;
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    box-sizing: border-box; 
}

.map {
    display: flex;
    flex-direction: column; 
    align-items: center; 
    width: 100%; 
}

.map img {
    width: 150px; 
    margin-bottom: 10px; 
}

.map a {
    text-decoration: none; 
    color: inherit;
    font-weight: bold;
}



.card-container {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
}

.card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    padding: 10px;
}

.card img {
    border-radius: 8px;
    width: 100%;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

#status-kamar {
    background-color: #f9f9f9;
    padding: 30px;
    margin: 20px 0;
    border-radius: 12px;
}

#status-kamar h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2em;
    color: #333;
}

.status {
    display: flex; 
    flex-wrap: nowrap; 
    justify-content: space-evenly; 
    gap: 20px; 
    overflow-x: auto; 
}

.day {
    width: 130px; 
    padding: 15px;
    background-color: #fff;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease; 
}

.day p {
    font-size: 1.2em;
    margin: 0;
    font-weight: bold;
    color: #333; 
}

.status-info {
    margin-top: 10px;
}

.status-info p {
    font-size: 1em;
}

.status-info strong {
    font-weight: bold;
}

.status-senin {
    color: #FF6347; 
}

.status-selasa {
    color: #4CAF50; 
}

.status-rabu {
    color: #FF6347; 
}

.status-kamis {
    color: #4CAF50; 
}

.status-jumat {
    color: #FF6347; 
}

.status-sabtu {
    color: #4CAF50; 
}

.status-minggu {
    color: #FF6347; 
}
.status-s {
    color: #4CAF50; 
}

.status-e {
    color: #FF6347; 
    background-color: #fdab9c;
}


.day:hover {
    background-color: #f1f1f1; 
    cursor: pointer;
    transform: translateY(-5px); 
}

#ulasan {
    padding: 40px 20px;
    background-color: #f9f9f9;
    border-radius: 12px;
    margin: 20px auto;
    max-width: 80%;
    text-align: center;
}

#ulasan h2 {
    font-size: 2.5em;
    color: #333;
    margin-bottom: 30px;
}

.ulasan-container {
    display: flex;
    justify-content: space-evenly;
    gap: 20px;
    flex-wrap: wrap;
}

.ulasan-card {
    background-color: #fff;
    padding: 20px;
    width: 250px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
}

.ulasan-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.ulasan-text {
    font-size: 1.2em;
    font-style: italic;
    color: #555;
    margin-bottom: 15px;
}

.ulasan-author {
    font-size: 1.1em;
    font-weight: bold;
    color: #333;
}

#penilaian {
    padding: 20px;
    margin-top: 30px;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 800px; 
    margin-left: auto;
    margin-right: auto;
}

.penilaian h3 {
    text-align: center;
    font-size: 1.6em;
    margin-bottom: 20px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr; 
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.form-group label {
    font-size: 1.1em;
    font-weight: bold;
    margin-bottom: 10px;
}

.form-group input, .form-group textarea {
    width: 100%;
    padding: 8px;
    font-size: 1em;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
}

textarea {
    resize: vertical;
}

.stars {
    display: block; 
    margin-top: 10px;
    direction: rtl; 
    text-align: center;
}

.stars input {
    display: none;
}

.stars label {
    font-size: 1.8em;
    color: #ddd;
    cursor: pointer;
    display: inline-block; 
    margin: 0 5px; 
}

.stars input:checked ~ label {
    color: #FFD700; 
}

.stars label:hover,
.stars label:hover ~ label {
    color: #FFD700; 
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.1em;
    margin-top: 20px;
    grid-column: span 2; 
}

button:hover {
    background-color: #45a049;
}

.thanks-message {
    margin-top: 20px;
    font-size: 1.2em;
    color: #4CAF50;
    font-weight: bold;
    text-align: center;
}


.whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 70px; 
    height: 70px; 
    background-color: #25d366; 
    border-radius: 50%; 
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
    z-index: 1000; 
}

.whatsapp-button:hover {
    background-color: #128c7e; 
}

.whatsapp-icon {
    width: 40px; /* Menyesuaikan ukuran gambar WhatsApp */
    height: 40px; /* Menyesuaikan ukuran gambar WhatsApp */
    object-fit: cover; /* Agar gambar tetap proporsional */
}

.reservation-form {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column; 
    gap: 15px;
}

.reservation-form div {
    display: flex;
    align-items: center; 
    gap: 10px; 
}

.reservation-form label {
    font-size: 14px;
    font-weight: bold;
    color: #555555;
    white-space: nowrap; 
    width: 150px; 
    text-align: right; 
}

.reservation-form input,
.reservation-form select {
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 14px;
    flex-grow: 1; 
}

.reservation-form button {
    padding: 10px 15px;
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    align-self: flex-start; 
}

.reservation-form button:hover {
    background-color: #45a049;
}


</style>
</head>
<body>
    <!-- Bagian Terpopuler -->
    <section id="terpopuler">
        <h1>Terpopuler</h1>
        <p>Guesthouse di kawasan mmmmmm sangat populer dan sering dikunjungi.</p>
        <div class="images">
            <img src="c4.png" alt="Guesthouse 1">
            <img src="c5.png" alt="Guesthouse 2">

        </div>
        <div class="info">
            <p>Guesthouse adalah penginapan yang berupa rumah pribadi yang disewakan untuk tamu,
                 atau fasilitas akomodasi yang disediakan oleh perorangan atau perusahaan. 
                Guesthouse juga dikenal sebagai wisma, pondok tamu, 
                atau rumah tamuFasilitas yang dimiliki cukup lengkap, dan terjangkau.</p>
            <div class="map">
                <a href="https://www.google.com/maps/place/Universitas+Amikom+Purwokerto/@-7.400746,109.2314225,15z/data=!4m6!3m5!1s0x2e655ef25207e1e1:0xcedb82ef04ed7e7c!8m2!3d-7.400746!4d109.2314225!16s%2Fg%2F1hm5cd9bx?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                    <img src="google-maps.png" alt="Map">
                    <p>Klik lokasi di sini</p>
                </a>
            </div>
        </div>
        </div>
    </section>
    <section id="status-kamar">
        <h2>Status Kamar Mingguan</h2>
        <div class="status">
            <div class="day status-s">
                <p>Senin</p>
                <div class="status-info">
                    <p>Status Kamar: <strong class="status-s">Penuh</strong></p>
                </div>
            </div>
            <div class="day status-e">
                <p>Selasa</p>
                <div class="status-info">
                    <p>(hari ini)Status Kamar: <strong class="status-e">Penuh</strong></p>
                </div>
            </div>
            <div class="day status-rabu">
                <p>Rabu</p>
                <div class="status-info">
                    <p>Status Kamar: <strong class="status-rabu">Penuh</strong></p>
                </div>
            </div>
            <div class="day status-kamis">
                <p>Kamis</p>
                <div class="status-info">
                    <p>Status Kamar: <strong class="status-kamis">Tersedia</strong></p>
                </div>
            </div>
            <div class="day status-jumat">
                <p>Jumat</p>
                <div class="status-info">
                    <p>Status Kamar: <strong class="status-jumat">Penuh</strong></p>
                </div>
            </div>
            <div class="day status-sabtu">
                <p>Sabtu</p>
                <div class="status-info">
                    <p>Status Kamar: <strong class="status-sabtu">Tersedia</strong></p>
                </div>
            </div>
            <div class="day status-minggu">
                <p>Minggu</p>
                <div class="status-info">
                    <p>Status Kamar: <strong class="status-minggu">Penuh</strong></p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="reservation-section">
        <!-- Form Pemesanan -->
        <div class="reservation-form">
            <h2>Reservasi GustHouse</h2>
            <form action="submit-reservation.php" method="POST">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="checkin-date">Tanggal Check-in:</label>
                <input type="date" id="checkin-date" name="checkin-date" required>
    
                <label for="checkout-date">Tanggal Check-out:</label>
                <input type="date" id="checkout-date" name="checkout-date" required>
    
                <label for="room-type">Tipe Kamar:</label>
                <select id="room-type" name="room-type">
                    <option value="single">Kamar Single</option>
                    <option value="double">Kamar Double</option>
                    <option value="suite">Suite</option>
                </select>
    
                <button type="submit">Pesan Sekarang</button>
            </form>
        </div>
        <br>

        <div class="room-description">
            <h3>Deskripsi dan Harga Kamar</h3>
            <ul>
                <li>
                    <strong>Kamar Single:</strong> Rp 300,000/malam
                    <ul>
                        <li>Fasilitas: 1 tempat tidur single, AC, Wi-Fi gratis, kamar mandi dalam.</li>
                    </ul>
                </li>
                <li>
                    <strong>Kamar Double:</strong> Rp 500,000/malam
                    <ul>
                        <li>Fasilitas: 1 tempat tidur double, AC, TV kabel, Wi-Fi gratis, kamar mandi dalam.</li>
                    </ul>
                </li>
                <li>
                    <strong>Suite:</strong> Rp 1,000,000/malam
                    <ul>
                        <li>Fasilitas: Ruang tamu terpisah, 1 tempat tidur king-size, AC, TV kabel, Wi-Fi gratis, minibar, kamar mandi dalam.</li>
                    </ul>
                </li>
                <li>
                    <strong>Rekomendasi Transportasi Umum:</strong> Bus TransBanyumas
                    <ul>
                        <li>Untuk menaikinya anda bisa menuju halte terdekat menuju lokasi kami</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <section id="artikel">
        <h2>Artikel Terbaru dari HahiHouse</h2>
        <div class="card-container">
            <a href="baca.php?id=1" class="card">
                <img src="c4.png" alt="Artikel 1">
                <p>Pembunuhan: Deskripsi singkat.</p>
            </a>
            <a href="baca.php?id=2" class="card">
                <img src="c4.png" alt="Artikel 2">
                <p>Guesthouse terpencil: Terpencil dan penuh kegilaan.</p>
            </a>
            <a href="baca.php?id=3" class="card">
                <img src="c4.png" alt="Artikel 3">
                <p>Keren: Deskripsi singkat.</p>
            </a>
            <a href="baca.php?id=4" class="card">
                <img src="c4.png" alt="Artikel 4">
                <p>Wah diskon!: Deskripsi singkat.</p>
            </a>
        </div>
    </section>
    
    

    <!-- Bagian Ulasan Pelanggan -->
    <section id="ulasan">
        <h2>Ulasan Pelanggan</h2>
        <div class="ulasan-container">
            <div class="ulasan-card">
                <p class="ulasan-text">"Tempat ini sangat nyaman dan strategis!"</p>
                <p class="ulasan-author">- Pelanggan A</p>
            </div>
            <div class="ulasan-card">
                <p class="ulasan-text">"Fasilitas sangat memuaskan, pelayanan ramah."</p>
                <p class="ulasan-author">- Pelanggan B</p>
            </div>
            <div class="ulasan-card">
                <p class="ulasan-text">"Fasilitas sangat memuaskan, pelayanan ramah."</p>
                <p class="ulasan-author">- Pelanggan B</p>
            </div>
        </div>
    </section>


    <section id="penilaian">
        <div class="penilaian">
            <h3>Beri Penilaian Anda</h3>
            <form id="penilaian-form">
                <div class="form-group">
                    <label for="email">Email Anda:</label>
                    <input type="email" id="email" name="email" required placeholder="Masukkan email Anda">
                </div>
    
                <div class="form-group">
                    <label for="ulasan">Ulasan Anda:</label>
                    <textarea id="ulasan" name="ulasan" rows="4" required placeholder="Tulis ulasan Anda"></textarea>
                </div>
    
                <div class="form-group">
                    <label for="rating">Beri Rating:</label>
                    <div class="stars">
                        <input type="radio" name="rating" id="star5" value="5"><label for="star5">&#9733;</label>
                        <input type="radio" name="rating" id="star4" value="4"><label for="star4">&#9733;</label>
                        <input type="radio" name="rating" id="star3" value="3"><label for="star3">&#9733;</label>
                        <input type="radio" name="rating" id="star2" value="2"><label for="star2">&#9733;</label>
                        <input type="radio" name="rating" id="star1" value="1"><label for="star1">&#9733;</label>
                    </div>
                </div>
    
                <button type="submit" id="submit-button">Kirim Penilaian</button>
            </form>
    
            <div id="thanks-message" class="thanks-message" style="display: none;">
                <p>Terima kasih, penilaian Anda sudah tercatat!</p>
            </div>
        </div>
    </section>
    
    <a href="https://wa.me/088220283974" target="_blank" class="whatsapp-button">
    <img src="wa.png" alt="WhatsApp" class="whatsapp-icon">
</a>
</div>

    <footer>
        <p>Kontak: info@hahihihiouse.com | Telp: +62 123-4567</p>
        <p>&copy; 2024 HahihiHouse</p>
    </footer>
    <script>
    const container = document.querySelector('.card-container');
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    const clone = card.cloneNode(true);
    container.appendChild(clone);
});

let currentIndex = 0; 

function scrollStep() {
    const cardWidth = cards[0].offsetWidth + 20; 

    container.scrollBy({ left: cardWidth, behavior: 'smooth' });

    currentIndex++;

    if (currentIndex >= cards.length) {
        setTimeout(() => {
            container.scrollTo({ left: 0, behavior: 'auto' });
            currentIndex = 0;
        }, 500); 
    }
}

setInterval(scrollStep, 2000);


function updateStatusHari(hari, status) {
    const statusElement = document.querySelector(`.status-${hari.toLowerCase()}`);
    statusElement.innerText = status === "Penuh" ? "Penuh" : "Tersedia";
    statusElement.style.color = status === "Penuh" ? "#FF6347" : "#4CAF50";
}

updateStatusHari("Senin", "Tersedia");

updateStatusHari("Selasa", "Penuh");

document.getElementById("penilaian-form").addEventListener("submit", function(event) {
    event.preventDefault(); 
    const email = document.getElementById("email").value;
    const ulasan = document.getElementById("ulasan").value;
    const rating = document.querySelector('input[name="rating"]:checked');

    if (rating) {
       
        document.getElementById("thanks-message").style.display = "block";
        
        console.log("Email: " + email);
        console.log("Ulasan: " + ulasan);
        console.log("Rating: " + rating.value);
        
        document.getElementById("penilaian-form").reset();
    } else {
        alert("Harap beri penilaian dengan memilih bintang.");
    }
});

</script>
</body>
</html>
