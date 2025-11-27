<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Smart Follow-Up</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white shadow-xl rounded-2xl p-10 max-w-md w-full">

            <h1 class="text-3xl font-extrabold text-gray-800 text-center mb-4">
                Create Your Account
            </h1>

            <p class="text-gray-600 text-center mb-8">
                Register to access your dashboard
            </p>

            <form action="{{ route('postRegister') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Name</label>
                    <input type="text" name="name" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold text-lg hover:bg-blue-700 transition">
                    Register
                </button>
            </form>

            <p class="text-center text-gray-600 mt-6">
                Already have an account?
                <a href="{{ route('getlogin') }}" class="text-blue-600 font-semibold hover:underline">
                    Login
                </a>
            </p>

        </div>
    </div>

</body>
</html>
