<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberpunk Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="style/css/style.css">
</head>

<body class="bg-gradient-to-b from-black to-gray-900 min-h-screen flex flex-col">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <div class="container mx-auto flex justify-center items-center min-h-screen pt-16 glassmorphism" style="background-image: url('img/login.gif'); width: 100%; height: 100%; background-size: cover; background-position: center;">

        <div
            class="bg-black bg-opacity-80 p-8 rounded-lg w-full max-w-md border border-cyber-green shadow-lg shadow-cyber-green/30 relative overflow-hidden">
            <h2 class="text-2xl font-bold mb-6 text-center tracking-wider text-cyber-green floating-text">SYSTEM LOGIN
            </h2>

            <form method="post" class="space-y-4 glassmorphism">

                <div class="space-y-1">
                    <label class="text-sm text-cyber-green opacity-90">USER_ID:</label>
                    <input type="text" name="username" required
                        class="w-full bg-gray-900 border border-cyber-green text-cyber-green p-2 rounded focus:outline-none focus:ring-2 focus:ring-cyber-green/50 focus:border-transparent shadow-sm shadow-cyber-green/20">
                </div>
                <div class="space-y-1">
                    <label class="text-sm text-cyber-green opacity-90">ACCESS_KEY:</label>
                    <input type="password" name="password" required
                        class="w-full bg-gray-900 border border-cyber-green text-cyber-green p-2 rounded focus:outline-none focus:ring-2 focus:ring-cyber-green/50 focus:border-transparent shadow-sm shadow-cyber-green/20">
                </div>
                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-cyber-green hover:bg-green-400 text-black font-bold py-2 px-4 rounded transition-colors duration-300 shadow-lg shadow-cyber-green/30 transform hover:scale-[1.02]">AUTHENTICATE</button>
                </div>
            </form>
        </div>
        
        <div class="text-center">
            <a href="index.php" class="text-cyber-green text-2xl hover:text-cyber-pink transition-colors duration-300">Back to
                Home</a>
        </div>

    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>

<script src="https://cdn.tailwindcss.com"></script>

</html>
