<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Follow-Up</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white shadow-xl rounded-2xl p-10 max-w-lg w-full text-center">

            <!-- Header -->
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">
                Smart Follow-Up
            </h1>

            <p class="text-gray-600 mb-10">
                Manage your follow-up tasks smarter, faster, and more efficiently.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col gap-4">

                <a href="{{ route('getregister') }}"
                   class="w-full bg-blue-600 text-white py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">
                    Register
                </a>

                <a href="{{ route('getlogin') }}"
                   class="w-full bg-gray-800 text-white py-3 rounded-xl text-lg font-semibold hover:bg-black transition">
                    Login
                </a>
            </div>

        </div>
    </div>

</body>
</html>
