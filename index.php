<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberpunk Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <style>
        @keyframes text-flicker-animation {
            0% {
                opacity: 0.1;
            }

            25% {
                opacity: 1;
            }

            50% {
                opacity: 0.2;
            }

            75% {
                opacity: 0.8;
            }

            100% {
                opacity: 0.1;
            }
        }
    </style>
    <link rel="stylesheet" href="style/css/style.css">
</head>

<body class="bg-gradient-to-b from-black to-gray-900 min-h-screen flex flex-col">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <nav class="bg-black bg-opacity-80 border-b border-cyber-green shadow-lg">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <div class="flex items-center">
                <div class="text-xl font-bold tracking-widest mr-2 text-cyber-green">NIGHT<span
                        class="text-cyber-pink">CORP</span></div>
                <div class="h-4 w-4 bg-cyber-green rounded-full animate-pulse-fast"></div>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="index.php"
                    class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">HOME</a>
                <a href="services.php"
                    class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">SERVICES</a>
                <a href="about.php"
                    class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">ABOUT</a>
                <a href="contact.php"
                    class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">CONTACT</a>

            </div>
            <div class="flex items-center">
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <span class="mr-2 hidden md:inline text-opacity-80 text-cyber-green">[USER: </span>
                    <span
                        class="text-cyber-pink hidden md:inline animate-pulse-slow"><?php echo htmlspecialchars($_SESSION['username']); ?>]</span>
                <?php else: ?>


                <?php endif; ?>
                <button class="md:hidden text-2xl text-cyber-green">☰</button>
            </div>
        </div>
    </nav>

    <!-- Login Container -->
    
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel img');

        function showSlide(index) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (index + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    </script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>

<script src="https://cdn.tailwindcss.com"></script>

</html>
