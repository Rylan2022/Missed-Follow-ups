<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Smart Follow-Up</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Top Navigation Bar -->
    <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Smart Follow-Up</h1>

        <!-- Mini Profile Section -->
        <div class="relative inline-block text-left">
            <button id="userMenuBtn"
                class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-xl hover:bg-gray-200 transition">
                <span class="font-medium text-gray-700">
                    {{ Auth::user()->name }}
                </span>
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff"
                     alt="avatar"
                     class="w-8 h-8 rounded-full shadow">
            </button>

            <!-- Dropdown Menu -->
            <div id="userMenu"
                class="hidden absolute right-0 mt-2 w-44 bg-white border rounded-xl shadow-lg py-2 z-50">

                <!-- Profile -->
                <div class="px-4 py-2 text-gray-700 font-medium border-b">
                    Signed in as <br>
                    <span class="font-semibold">{{ Auth::user()->email }}</span>
                </div>

                <!-- Logout -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Dashboard Content -->
    <main class="p-8">

        <h2 class="text-3xl font-extrabold text-gray-800 mb-6">
            Welcome, {{ Auth::user()->name }} 👋
        </h2>

        <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
            <h3 class="text-xl font-semibold text-gray-700 mb-3">
                Dashboard Overview
            </h3>

            <p class="text-gray-600">
                Wahha! This is your dashboard page. 
                Start building your Smart Follow-Up system from here.
            </p>
        </div>
    </main>


    <!-- Dropdown Toggle Script -->
    <script>
        const btn = document.getElementById('userMenuBtn');
        const menu = document.getElementById('userMenu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
