<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to nginx!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://nginx.org/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">

    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 max-w-lg mx-auto">
        <h1 class="text-4xl font-extrabold mb-6 text-center text-blue-600 dark:text-blue-400">Welcome to nginx!</h1>
        <p class="text-lg leading-relaxed mb-4">
            If you see this page, the nginx web server is successfully installed and working. Further configuration is required.
        </p>

        <div class="bg-blue-50 dark:bg-blue-900 p-4 rounded-md mb-6">
            <p class="text-blue-600 dark:text-blue-300">
                For online documentation and support, please refer to 
                <a href="http://nginx.org/" class="font-medium text-blue-700 dark:text-blue-400 underline hover:text-blue-500">nginx.org</a>.
                Commercial support is available at 
                <a href="http://nginx.com/" class="font-medium text-blue-700 dark:text-blue-400 underline hover:text-blue-500">nginx.com</a>.
            </p>
        </div>

        <div class="bg-yellow-50 dark:bg-yellow-900 p-4 rounded-md mb-6">
            <p class="text-yellow-700 dark:text-yellow-300">
                <strong>Note:</strong> Ensure that your server\'s security configurations are up-to-date to protect your web applications from potential vulnerabilities.
            </p>
        </div>

        <p class="italic text-sm text-center">
            <em>Thank you for using nginx.</em>
        </p>

        <form action="phpinfo.php" method="get" class="mt-8 flex justify-center">
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700">
            View PHP Info
        </button>
        </form>
        
    </div>


</body>
</html>';
?>
