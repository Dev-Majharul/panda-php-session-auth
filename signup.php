<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberpunk Signup</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="style/css/style.css">
</head>

<body class="bg-gradient-to-b from-black to-gray-900 min-h-screen flex flex-col">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <div class="text-center mb-4">
        <a href="index.php" class="text-cyber-green text-2xl font-bold">NIGHT<span
                class="text-cyber-pink">CORP</span></a>
    </div>

    <div class="container mx-auto flex justify-center items-center min-h-screen pt-16 glassmorphism">
        <div
            class="bg-black bg-opacity-80 p-8 rounded-lg w-full max-w-md border border-cyber-green shadow-lg shadow-cyber-green/30 relative overflow-hidden">
            <h2 class="text-2xl font-bold mb-6 text-center tracking-wider text-cyber-green floating-text">SIGN UP</h2>

            <form method="post" class="space-y-4 glassmorphism">
                <div class="space-y-1">
                    <label class="text-sm text-cyber-green opacity-90">USER_ID:</label>
                    <input type="text" name="username" required
                        class="w-full bg-gray-900 border border-cyber-green text-cyber-green p-2 rounded focus:outline-none focus:ring-2 focus:ring-cyber-green/50 focus:border-transparent shadow-sm shadow-cyber-green/20">
                </div>
                <div class="space-y-1">
                    <label class="text-sm text-cyber-green opacity-90">ACCESS_KEY:</label>
                    <input type="text" name="access_key" required
                        class="w-full bg-gray-900 border border-cyber-green text-cyber-green p-2 rounded focus:outline-none focus:ring-2 focus:ring-cyber-green/50 focus:border-transparent shadow-sm shadow-cyber-green/20">
                </div>
                <div class="space-y-1">
                    <label class="text-sm text-cyber-green opacity-90">PASSWORD:</label>
                    <input type="password" name="password" required
                        class="w-full bg-gray-900 border border-cyber-green text-cyber-green p-2 rounded focus:outline-none focus:ring-2 focus:ring-cyber-green/50 focus:border-transparent shadow-sm shadow-cyber-green/20">
                </div>
                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-cyber-green hover:bg-green-400 text-black font-bold py-2 px-4 rounded transition-colors duration-300 shadow-lg shadow-cyber-green/30 transform hover:scale-[1.02]">CREATE
                        ACCOUNT</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <img src="img/signup.png" alt="Signup GIF" class="w-full max-w-xs mx-auto mb-4">
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

</html>