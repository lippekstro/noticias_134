</main>
<footer>
    <div class="footer-content">
        <p class="alinhar">
            &copy;2022 - TODOS OS DIREITOS RESERVADOS
        </p>
        <div class="social-list">
            <ul>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<?php if (isset($_COOKIE['msg'])) : ?>
    <script src="js/script.js"></script>
<?php endif; ?>

<?php if ($_SERVER['PHP_SELF'] == '/noticias_134/index.php') : ?>
    <script src="js/carrosel.js"></script>
<?php endif; ?>

</body>

</html>