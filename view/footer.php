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