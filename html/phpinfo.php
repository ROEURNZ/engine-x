<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://nginx.org/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

        <h1 class="text-2xl font-extrabold mb-6 text-center text-blue-600 dark:text-blue-400">PHP Info</h1>
        
        <?php
        // Output the PHP configuration information
        phpinfo();
        ?>

        <div class="mt-8 flex justify-center">
            <a href="index.php" class="bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 transition-all duration-300 ease-in-out 
                sm:py-2 sm:px-4 md:py-3 md:px-6 lg:py-4 lg:px-8 xl:py-5 xl:px-10">
                Back
            </a>
        </div>

</body>
</html>
