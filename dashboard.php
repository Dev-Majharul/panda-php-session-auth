<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Carousel</title>
    <link rel="stylesheet" href="style/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <style>
        .carousel {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .carousel img.active {
            opacity: 1;
        }

        .carousel .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .control-button {
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-black to-gray-900 min-h-screen flex flex-col">

    <h2 class="text-2xl font-bold mb-6 text-center tracking-wider text-cyber-green floating-text">SYSTEM
        LOGIN</h2>
        <div class="container mx-auto px-4 flex justify-center items-center min-h-screen pt-16">

<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
    <!-- Logged In View -->
    <div
        class="bg-black bg-opacity-80 p-8 rounded-lg w-full max-w-md border border-cyber-green shadow-lg shadow-cyber-green/30 relative overflow-hidden">
        <h2 class="text-2xl font-bold mb-6 text-center tracking-wider text-cyber-pink floating-text">SYSTEM
            ACCESS GRANTED</h2>

        <div class="carousel">
            <img src="img/dashboar 0.gif" class="active" alt="Dashboard Image 1">
            <img src="img/dashboard2.jpg" alt="Dashboard Image 2">
            <img src="img/dashnoard.jpg" alt="Dashboard Image 3">
        </div>

        <div class="text-center mb-6">
            <p class="text-cyber-pink mb-2">Welcome, <span
                    class="text-cyber-green font-bold"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            </p>
            <p class="text-cyber-pink opacity-70 text-sm">You have successfully authenticated to the system.</p>
        </div>

        <div class="mt-6 text-cyber-green opacity-80 space-y-2">
            <p>> User privileges: <span class="text-cyber-pink">ADMIN</span></p>
            <p>> Last login: <span class="text-cyber-pink"><?php echo date('Y-m-d H:i:s'); ?></span></p>
        </div>

        <div class="mt-8">
            <form method="post" action="">
                <input type="hidden" name="logout" value="1">
                <button type="submit"
                    class="w-full bg-cyber-green hover:bg-green-400 text-black font-bold py-2 px-4 rounded transition-colors duration-300 shadow-lg shadow-cyber-green/30 transform hover:scale-[1.02]">
                    TERMINATE SESSION
                </button>
            </form>
        </div>
    </div>
<?php else: ?>
    <!-- Login Form -->
    <div class="text-center mb-6">
        <p class="text-cyber-pink mb-2">Welcome, <span
                class="text-cyber-green font-bold"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
        </p>
        <p class="text-cyber-pink opacity-70 text-sm">You have successfully authenticated to the system.</p>
    </div>

<?php endif; ?>
</div>


</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>