<footer>
    <div class="container">
        © <span id="year"></span> {{ __('misc.copyright') }}
        <!-- Blokje "Over ons" -->
        <div id="about-us">
            <h4>Over ons</h4>
            <p>Wij zijn een bedrijf dat zich richt op het leveren van uitstekende producten en diensten. Meer informatie komt binnenkort!</p>
        </div>

        <!-- Contactgegevens -->
        <div id="contact-info">
            <h4>Contact</h4>
            <p>Email: info@voorbeeld.nl</p>
            <p>Telefoon: 012-3456789</p>
            <p>Adres: Straatnaam 123, 1234 AB Plaats</p>
        </div>

        <!-- Social Media Links -->
        <div id="social-links">
            <h4>Volg ons</h4>
            <a href="https://facebook.com">Facebook</a> |
            <a href="https://twitter.com">Twitter</a> |
            <a href="https://instagram.com">Instagram</a>
        </div>
    </div>
</footer>

<!-- Voeg dit JavaScript toe voor dynamisch jaar -->
<script type="text/javascript">
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
