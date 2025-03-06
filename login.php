<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberpunk Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <!-- Tailwind CSS config extension -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cyber-green': '#39ff14',
                        'cyber-pink': '#ff2a6d',
                        'cyber-blue': '#1e90ff',
                        'cyber-dark': '#0d1117'
                    },
                    animation: {
                        'pulse-fast': 'pulse 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'text-flicker': 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-cyber-dark bg-opacity-95 font-mono text-cyber-green min-h-screen bg-fixed bg-gradient-to-b from-black to-gray-900">
    <!-- Navbar -->
    <nav class="bg-black bg-opacity-80 border-b border-cyber-green shadow-lg shadow-cyber-green/30">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <div class="flex items-center">
                <div class="text-xl font-bold tracking-widest mr-2 text-cyber-green">NIGHT<span class="text-cyber-pink">CORP</span></div>
                <div class="h-4 w-4 bg-cyber-green rounded-full animate-pulse-fast"></div>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">&lt;HOME/&gt;</a>
                <a href="#" class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">&lt;SERVICES/&gt;</a>
                <a href="#" class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">&lt;ABOUT/&gt;</a>
                <a href="#" class="text-cyber-green hover:text-cyber-pink transition-colors duration-300 transform hover:scale-105">&lt;CONTACT/&gt;</a>
            </div>
            <div class="flex items-center">
                <span class="mr-2 hidden md:inline text-opacity-80 text-cyber-green">[SYS.STATUS: </span>
                <span class="text-cyber-pink hidden md:inline animate-pulse-slow">ONLINE]</span>
                <button class="md:hidden text-2xl text-cyber-green">☰</button>
            </div>
        </div>
    </nav>

    <!-- Login Container -->
    <div class="container mx-auto px-4 flex justify-center items-center min-h-screen pt-16 md:pt-0">
        <div class="bg-black bg-opacity-80 p-8 rounded-lg w-full max-w-md border border-cyber-green shadow-lg shadow-cyber-green/30 relative overflow-hidden transform hover:scale-[1.01] transition-all duration-300">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-16 h-16 border-r-2 border-t-2 border-cyber-green opacity-50"></div>
            <div class="absolute bottom-0 left-0 w-16 h-16 border-l-2 border-b-2 border-cyber-green opacity-50"></div>
            
            <h2 class="text-2xl font-bold mb-6 text-center tracking-wider text-cyber-green animate-pulse-slow">SYSTEM LOGIN</h2>
            
            <!-- Login Form -->
            <form method="post" class="space-y-4">
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
                            class="w-full bg-cyber-green hover:bg-green-400 text-black font-bold py-2 px-4 rounded transition-colors duration-300 shadow-lg shadow-cyber-green/30 transform hover:scale-[1.02]">
                        AUTHENTICATE
                    </button>
                </div>
                
                <div class="text-center text-xs text-cyber-green pt-2 space-x-2">
                    <a href="#" class="hover:text-cyber-pink transition-colors duration-300 inline-block">Reset Access Key</a> 
                    <span class="text-cyber-green opacity-50">|</span> 
                    <a href="#" class="hover:text-cyber-pink transition-colors duration-300 inline-block">Request New Credentials</a>
                </div>
            </form>
            
            <!-- PHP logic -->
            <?php
            define('USERNAME', 'admin');
            const PASSWORD = '12345';
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $_username = $_POST['username'] ?? '';
                $_password = $_POST['password'] ?? '';
                
                if ($_username === USERNAME && $_password === PASSWORD) {
                    echo '<p class="text-center text-cyber-green mt-4 animate-pulse">Authentication successful. Initializing secure connection...</p>';
                } else {
                    echo '<p class="text-center text-red-500 mt-4">ERROR: Invalid credentials detected. Security protocols engaged.</p>';
                }
            }
            ?>
            
            <!-- Decorative Terminal Text -->
            <div class="mt-6 text-xs text-cyber-green opacity-70 border-t border-cyber-green/30 pt-4">
                <div class="overflow-hidden h-16">
                    <p class="mb-1">> Initializing security protocols...</p>
                    <p class="mb-1">> Checking network integrity... <span class="text-cyber-green font-bold">[OK]</span></p>
                    <p class="mb-1">> Scanning for intrusions... <span class="text-cyber-green font-bold">[CLEAR]</span></p>
                    <p class="mb-1">> Ready for authentication...</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>