<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Technology Perspectives</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 antialiased">

    <!-- Header / Navigation -->
    <header class="bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold tracking-wider uppercase">Logo</a>
            <nav class="hidden md:flex space-x-6 text-sm uppercase tracking-widest font-medium">
                <a href="#" class="hover:text-cyan-400 transition-colors">About Us</a>
                <a href="#" class="hover:text-cyan-400 transition-colors">News</a>
                <a href="#" class="hover:text-cyan-400 transition-colors">Reviews</a>
                <a href="#" class="hover:text-cyan-400 transition-colors">Articles</a>
                <a href="#" class="hover:text-cyan-400 transition-colors">#Future</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-slate-900 text-white py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1200');"></div>
        <div class="relative max-w-4xl mx-auto text-center space-y-6">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">
                Join Accenture’s virtual program for new perspectives
            </h1>
            <div class="pt-4">
                <a href="#" class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-8 rounded-full uppercase tracking-wider transition-all">
                    Learn More
                </a>
            </div>
            <p class="text-xs text-gray-400 pt-4">Images from Freepik</p>
        </div>
    </section>

    <!-- Emerging Technologies Grid -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center font-bold text-sm tracking-widest text-slate-700 uppercase">
            <div class="p-6 bg-white shadow-sm border-t-4 border-cyan-500">Blockchain</div>
            <div class="p-6 bg-white shadow-sm border-t-4 border-cyan-500">5G Network</div>
            <div class="p-6 bg-white shadow-sm border-t-4 border-cyan-500">AI Products</div>
            <div class="p-6 bg-white shadow-sm border-t-4 border-cyan-500">Automation</div>
        </div>
    </section>

    <!-- Technology Of The Future Section -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center uppercase tracking-wide mb-12">Technology Of The Future</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 shadow-md rounded-lg space-y-4">
                <h3 class="text-xl font-bold text-slate-900 border-b-2 border-cyan-500 pb-2">Machine Learning</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sample text. Click to select the text box. Click again or double click to start editing the text.
                </p>
            </div>
            <div class="bg-white p-8 shadow-md rounded-lg space-y-4">
                <h3 class="text-xl font-bold text-slate-900 border-b-2 border-cyan-500 pb-2">Edge Computing</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sample text. Click to select the text box. Click again or double click to start editing the text.
                </p>
            </div>
            <div class="bg-white p-8 shadow-md rounded-lg space-y-4">
                <h3 class="text-xl font-bold text-slate-900 border-b-2 border-cyan-500 pb-2">Artificial Intelligence</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sample text. Click to select the text box. Click again or double click to start editing the text.
                </p>
            </div>
        </div>
    </section>

    <!-- Numbered Cards Section -->
    <section class="bg-slate-800 text-white py-16 my-12">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8">
            <!-- Item 01 -->
            <div class="space-y-4 border-l-2 border-cyan-400 pl-6">
                <span class="text-5xl font-black text-cyan-400">01</span>
                <h3 class="text-2xl font-bold uppercase">Future</h3>
                <p class="text-gray-300 text-sm italic">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#" class="inline-block text-xs uppercase font-bold tracking-widest text-cyan-400 hover:text-cyan-300">Learn More &rarr;</a>
            </div>
            <!-- Item 02 -->
            <div class="space-y-4 border-l-2 border-cyan-400 pl-6">
                <span class="text-5xl font-black text-cyan-400">02</span>
                <h3 class="text-2xl font-bold uppercase">Crypto basics</h3>
                <p class="text-gray-300 text-sm italic">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#" class="inline-block text-xs uppercase font-bold tracking-widest text-cyan-400 hover:text-cyan-300">Learn More &rarr;</a>
            </div>
            <!-- Item 03 -->
            <div class="space-y-4 border-l-2 border-cyan-400 pl-6">
                <span class="text-5xl font-black text-cyan-400">03</span>
                <h3 class="text-2xl font-bold uppercase">Courses</h3>
                <p class="text-gray-300 text-sm italic">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#" class="inline-block text-xs uppercase font-bold tracking-widest text-cyan-400 hover:text-cyan-300">Learn More &rarr;</a>
            </div>
            <!-- Item 04 -->
            <div class="space-y-4 border-l-2 border-cyan-400 pl-6">
                <span class="text-5xl font-black text-cyan-400">04</span>
                <h3 class="text-2xl font-bold uppercase">Support</h3>
                <p class="text-gray-300 text-sm italic">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#" class="inline-block text-xs uppercase font-bold tracking-widest text-cyan-400 hover:text-cyan-300">Learn More &rarr;</a>
            </div>
        </div>
    </section>

    <!-- AI & Digital Platform Feature -->
    <section class="max-w-7xl mx-auto px-4 py-16 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <h2 class="text-4xl font-extrabold text-slate-900 uppercase">AI & Digital Platform</h2>
            <p class="text-gray-600 leading-relaxed font-semibold">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat...
            </p>
            <a href="#" class="inline-block bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 px-8 rounded uppercase tracking-wider text-sm transition-all">
                Learn More
            </a>
        </div>
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800" alt="Tech" class="rounded-lg shadow-xl w-full">
            <span class="text-xs text-gray-400 block mt-2 text-right">Image from Freepik</span>
        </div>
    </section>

    <!-- Online Classes / Newsletter -->
    <section class="bg-gray-200 py-16">
        <div class="max-w-4xl mx-auto px-4 text-center space-y-8">
            <h2 class="text-3xl font-bold uppercase tracking-wide">Online Classes</h2>
            <p class="text-gray-600 text-sm max-w-2xl mx-auto leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            
            <!-- Newsletter Form -->
            <div class="bg-white p-8 rounded-lg shadow-md max-w-md mx-auto space-y-4">
                <h3 class="font-bold text-lg uppercase text-slate-800">Join our newsletter</h3>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <input type="email" placeholder="Enter a valid email address" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500 text-sm" required>
                    <button type="submit" class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 rounded uppercase text-sm tracking-wider transition-colors">
                        Notify Me
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-gray-400 text-center py-8 text-xs">
        <p>&copy; {{ date('Y') }} Sample Website. All rights reserved.</p>
    </footer>

</body>
</html>