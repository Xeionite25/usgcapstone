<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
  <div class="w-full max-w-lg p-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white text-center">Sign Up</h1>
    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 text-center">
      Let’s set up your account so you can get started.
    </p>

    <form method="POST" action="register.php" class="mt-6">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div>
          <label class="block text-sm text-gray-600 dark:text-gray-200">First Name</label>
          <input type="text" name="first_name" required placeholder=""
            class="w-full px-4 py-2 mt-1 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-300" />
        </div>

        <div>
          <label class="block text-sm text-gray-600 dark:text-gray-200">Last Name</label>
          <input type="text" name="last_name" required placeholder=""
            class="w-full px-4 py-2 mt-1 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-300" />
        </div>
      </div>

      <div class="mt-4">
        <label class="block text-sm text-gray-600 dark:text-gray-200">Phone Number</label>
        <input type="tel" name="phone" required placeholder="09XX-XXX-XXXX"
          class="w-full px-4 py-2 mt-1 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-300" />
      </div>

      <div class="mt-4">
        <label class="block text-sm text-gray-600 dark:text-gray-200">Email Address</label>
        <input type="email" name="email" required placeholder="john@example.com"
          class="w-full px-4 py-2 mt-1 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-300" />
      </div>

      <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
        <div>
          <label class="block text-sm text-gray-600 dark:text-gray-200">Password</label>
          <input type="password" name="password" required placeholder="Enter your password"
            class="w-full px-4 py-2 mt-1 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-300" />
        </div>

        <div>
          <label class="block text-sm text-gray-600 dark:text-gray-200">Confirm Password</label>
          <input type="password" name="confirm_password" required placeholder="Confirm your password"
            class="w-full px-4 py-2 mt-1 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-300" />
        </div>
      </div>

      <button type="submit"
        class="w-full px-6 py-2 mt-6 text-sm font-medium tracking-wide text-white capitalize bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
        Sign Up
      </button>
    </form>

    <p class="mt-4 text-sm text-center text-gray-600 dark:text-gray-400">
      Already have an account? <a href="index.php" class="text-blue-500 hover:underline">Sign in</a>
    </p>
  </div>
</body>

</html>
