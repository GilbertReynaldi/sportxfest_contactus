<!DOCTYPE html>
<html>
<head>
    <title>SportXFest - Contact Us</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<header class="header">
    <div class="logo">SportXFest</div>
    <nav class="nav">
        <a href="#">Profile</a>
        <a href="#">Event</a>
        <a href="#">Documentation</a>
        <a href="#">Contact</a>
    </nav>
</header>

<div class="container">

    <div class="left">

        <div class="box">
            <h1></h1>
            <img src="{{ asset('images/sportbaru.png') }}" width="300">
            <p>Join the biggest running event and celebrate sports together!</p>
        </div>

        <div class="box">
            <h2>Event Information</h2>
            <p>
            SportXFest adalah festival olahraga yang menghadirkan berbagai event lari,
            kompetisi olahraga, dan aktivitas komunitas untuk semua kalangan.
            </p>
        </div>

        <div class="contact-grid">
            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <p>Hotline</p>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <p>Email</p>
            </div>

            <div class="contact-item">
                <i class="fa-brands fa-instagram"></i>
                <p>Instagram</p>
            </div>

            <div class="contact-item">
                <i class="fa-brands fa-whatsapp"></i>
                <p>WhatsApp</p>
            </div>

            <div class="contact-item">
                <i class="fa-brands fa-twitter"></i>
                <p>Twitter</p>
            </div>

            <div class="contact-item">
                <i class="fa-brands fa-facebook"></i>
                <p>Facebook</p>
            </div>
        </div>

    </div>

    <div class="divider"></div>

    <div class="right">

        <div class="form-box">
    <h2>Contact Us</h2>

   <form action="{{ route('contact.store') }}" method="POST">
        @csrf

    <div class="row">

        <input type="text"
               name="nama"
               placeholder="Nama"
               required>

        <input type="email"
               name="email"
               placeholder="Email"
               required>

    </div>

    <input type="text"
           name="subject"
           placeholder="Subject"
           required>

    <textarea name="pesan"
              placeholder="Pesan"
              required></textarea>

    <button type="submit">
        Send Message
    </button>

</form>
</div>

    </div>

</div>



<footer class="footer">
    <div class="footer-content">

        <div>
            <h3>SportXFest</h3>
            <p>Event olahraga terbesar buat semua kalangan. Yuk join dan rasain vibes-nya!</p>
        </div>

        <div>
            <h4>Follow Us</h4>
            <div class="social-icons">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>
        </div>

        <div>
            <h4>Contact</h4>
            <p>Email: sportxfest@gmail.com</p>
            <p>Phone: +62 812 3456 7890</p>
        </div>

    </div>

    <p class="copyright">© 2026 SportXFest. All rights reserved.</p>
</footer>

<script src="{{ asset('script.js') }}"></script>

</body>
</html>