<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGINX Server Setup</title>
    <link rel="shortcut icon" href="https://nginx.org/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css3?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-center">How to Install and Set Up NGINX on Windows</h1>

        <div class="space-y-4">
            <h2 class="text-2xl font-semibold">1. Download NGINX</h2>
            <p>Go to the official <a href="https://nginx.org/en/download.html" class="text-blue-500 underline">NGINX download page</a> and download the latest stable version for Windows.</p>

            <h2 class="text-2xl font-semibold">2. Extract the Files</h2>
            <p>After downloading, extract the zip file to a directory of your choice (e.g., <code class="bg-gray-200 px-2 py-1 rounded">C:\nginx</code>).</p>

            <h2 class="text-2xl font-semibold">3. Configure NGINX</h2>
            <p>Navigate to the <code class="bg-gray-200 px-2 py-1 rounded">nginx.conf</code> file located in the <code class="bg-gray-200 px-2 py-1 rounded">conf</code> folder inside your NGINX directory. Modify this file according to your needs.</p>

            <h2 class="text-2xl font-semibold">4. Start NGINX</h2>
            <p>Open a command prompt and navigate to your NGINX directory. Run the following command to start the server:</p>
            <pre class="bg-gray-100 p-4 rounded"><code class="text-gray-700">start nginx</code></pre>
            <p>You should now be able to access NGINX by navigating to <a href="http://localhost" class="text-blue-500 underline">http://localhost</a> in your web browser.</p>

            <h2 class="text-2xl font-semibold">5. Stop NGINX</h2>
            <p>To stop the NGINX server, run the following command in the command prompt:</p>
            <pre class="bg-gray-100 p-4 rounded"><code class="text-gray-700">nginx -s stop</code></pre>

            <h2 class="text-2xl font-semibold">6. Additional Configuration</h2>
            <p>You can further configure NGINX by editing the <code class="bg-gray-200 px-2 py-1 rounded">nginx.conf</code> file or by adding new configuration files in the <code class="bg-gray-200 px-2 py-1 rounded">conf.d</code> directory.</p>
        </div>
    </div>

</body>
</html>
