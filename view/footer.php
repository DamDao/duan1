<!-- Your page content goes here -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h2>Product</h2>
            <ul class="footer-links">
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Genres</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h2>Company</h2>
            <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Affiliate Program</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h2>Resources</h2>
            <ul class="footer-links">
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Shipping Policy</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h2>Join Our Newsletter</h2>
            <div class="newsletter">
                <input type="email" placeholder="Enter your email">
                <button>Subscribe</button>
            </div>
        </div>
    </div>

    <div class="social-icons">
        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>

    <div class="footer-logo">
        <img src="your-logo.png" alt="Your Logo">
    </div>

    <div class="footer-text">
        &copy; 2023 Your Bookstore. All rights reserved. | Website: <a href="https://your-bookstore.com"
            style="color: #aaa;">your-bookstore.com</a>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="view/js/script.js"></script>
<script>
    document.getElementById('user-button').addEventListener('click', function () {
        var userLinks = document.getElementById('user-links');
        if (userLinks.style.display === 'block') {
            userLinks.style.display = 'none';
        } else {
            userLinks.style.display = 'block';
        }
    });

    // Đóng danh sách liên kết nếu click bất kỳ đâu ngoài nó
    document.addEventListener('click', function (event) {
        var userLinks = document.getElementById('user-links');
        var userButton = document.getElementById('user-button');
        if (event.target !== userLinks && event.target !== userButton) {
            userLinks.style.display = 'none';
        }
    });

</script>
</body>

</html>