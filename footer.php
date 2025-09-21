<!-- Footer -->
<footer class="bg-gradient-to-r from-cwd-darkblue to-cwd-blue text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <img src="assets/icons/CWD.png" alt="Calamba Water District Logo" class="w-10 h-10 object-contain">
                    <div>
                        <h3 class="text-xl font-bold">Calamba Water District</h3>
                        <p class="text-cwd-lightblue text-sm">Water is Life!</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm">Providing quality water services to the people of Calamba since 1974.</p>
            </div>
            
            <div>
                <h4 class="font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#home" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="#about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#services" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                    <li><a href="#projects" class="text-gray-300 hover:text-white transition-colors">Projects</a></li>
                    <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-semibold mb-4">Services</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">New Connection</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Billing & Payment</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Meter Reading</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Service Requests</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-semibold mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-cwd-blue/20 rounded-lg flex items-center justify-center hover:bg-cwd-blue transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-cwd-blue/20 rounded-lg flex items-center justify-center hover:bg-cwd-blue transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-cwd-blue/20 rounded-lg flex items-center justify-center hover:bg-cwd-blue transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-cwd-blue/20 rounded-lg flex items-center justify-center hover:bg-cwd-blue transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-white/20 pt-8 text-center text-gray-300 text-sm">
            <p>&copy; <?php echo date("Y"); ?> Calamba Water District. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                mobileMenu.classList.add('hidden');
            }
        });
    });

    // Tab functionality for About section
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('[data-tab]');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetTab = button.getAttribute('data-tab');

                tabButtons.forEach(btn => {
                    btn.classList.remove('active-tab', 'bg-cwd-blue', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                });
                button.classList.remove('bg-gray-100', 'text-gray-700');
                button.classList.add('active-tab', 'bg-cwd-blue', 'text-white');

                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(targetTab).classList.remove('hidden');
            });
        });
    });

    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
        observer.observe(el);
    });

    // Contact item hover effects
    document.querySelectorAll('.contact-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Directory table responsive
    function makeTableResponsive() {
        const table = document.querySelector('.directory-table');
        const container = table?.parentElement;
        
        if (window.innerWidth < 768 && table && container) {
            container.style.overflowX = 'auto';
            table.style.minWidth = '1200px';
        }
    }

    document.addEventListener('DOMContentLoaded', makeTableResponsive);
    window.addEventListener('resize', makeTableResponsive);
</script>
</body>
</html>