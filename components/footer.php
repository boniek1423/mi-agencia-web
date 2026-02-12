<footer class="bg-black py-4 mt-auto border-top border-secondary">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-md-6 text-md-start">
                <span class="fw-bold">Kayubo</span> &copy; <span id="current-year"></span>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-muted text-decoration-none me-3">Privacidad</a>
                <a href="#" class="text-muted text-decoration-none">Términos</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
<script>
    // Año actual dinámico para el footer
    document.getElementById('current-year').textContent = new Date().getFullYear();
    
    // Smooth scroll para navegación interna
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
    
    // Mejorar navegación con teclado
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const openMenu = document.querySelector('.navbar-collapse.show');
            if (openMenu) {
                const toggler = document.querySelector('.navbar-toggler');
                toggler?.click();
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous" defer></script>
</body>
</html>