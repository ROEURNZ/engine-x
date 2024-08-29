# How to Get Started with NGINX, PHP, and PHPMyAdmin on Windows

## Prerequisites

1. **Download and Install Code Editors**
   - [Visual Studio Code](https://code.visualstudio.com/download)
   - Notepad or [Notepad++](https://notepad-plus-plus.org/downloads/)

2. **Download and Install PHP**
   - Download the latest version of PHP from the [official PHP website](https://windows.php.net/download/).
   - Extract the contents to `C:\php`.
   - Add `C:\php` to your system's environment variable `PATH`.

3. **Download and Install NGINX**
   - Download the stable version of NGINX from the [official NGINX website](https://nginx.org/en/download.html).
   - Extract the contents to `C:\nginx`.
   - Add `C:\nginx` to your system's environment variable `PATH`.

4. **Download and Install MySQL**
   - Download MySQL from the [official MySQL website](https://dev.mysql.com/downloads/installer/).
   - Follow the installation instructions and remember the root password set during installation.

5. **Download and Install PHPMyAdmin**
   - Download the latest version of PHPMyAdmin from the [official PHPMyAdmin website](https://www.phpmyadmin.net/downloads/).
   - Extract the contents to `C:\nginx\html\phpmyadmin`.

## Setting Up NGINX with PHP and PHPMyAdmin

### 1. Configure NGINX

1. Open the NGINX configuration file located at `C:\nginx\conf\nginx.conf` in your code editor.
2. Edit the `server` block to set the root directory of your project and configure PHPMyAdmin:

    ```nginx
    server {
        listen       80;
        server_name  localhost;

        root   C:/path/to/your/project;
        index  index.php index.html index.htm;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location ~ \.php$ {
            include        fastcgi_params;
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        }

        location ~ /\.ht {
            deny  all;
        }

        # PHPMyAdmin Configuration
        location /phpmyadmin {
            root C:/nginx/html/;
            index index.php;
            try_files $uri $uri/ =404;
        }

        location ~ ^/phpmyadmin/(.+\.php)$ {
            root C:/nginx/html/;
            fastcgi_pass 127.0.0.1:9000;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            include fastcgi_params;
        }

        location ~* ^/phpmyadmin/(.+\.(jpg|jpeg|gif|css|png|js|ico|html|xml|txt))$ {
            root C:/nginx/html/;
        }
    }
    ```

3. Save the file and close your editor.

### 2. Configure PHP

1. Open your PHP configuration file `C:\php\php.ini`.
2. Ensure that the following extensions are enabled (remove the `;` at the beginning if present):

    ```ini
    extension=curl
    extension=gd
    extension=mbstring
    extension=mysqli
    extension=openssl
    ```

3. Set up PHP-FPM by adding or editing the following lines in your `php.ini` file:

    ```ini
    [cgi]
    fastcgi.impersonate = 1
    fastcgi.logging = 0
    cgi.fix_pathinfo = 0

    [fpm]
    listen = 127.0.0.1:9000
    ```

4. Save and close the `php.ini` file.

### 3. Start PHP and NGINX

1. **Run Command Prompt as Administrator:**
    - Open Command Prompt.
    - Navigate to your PHP directory:

    ```cmd
    cd C:\php
    ```

    - Start PHP FastCGI:

    ```cmd
    php-cgi -b 127.0.0.1:9000
    ```

    - Keep this Command Prompt window open.

2. **Start NGINX:**
    - Open another Command Prompt.
    - Navigate to your NGINX directory:

    ```cmd
    cd C:\nginx
    ```

    - Start NGINX:

    ```cmd
    start nginx
    ```

### 4. Set Up PHPMyAdmin

1. **Configure PHPMyAdmin:**
    - Go to the `C:\nginx\html\phpmyadmin` directory.
    - Locate the `config.sample.inc.php` file and rename it to `config.inc.php`.
    - Open `config.inc.php` in your code editor.
    - Find the following line and set a secret passphrase (this can be anything):

    ```php
    $cfg['blowfish_secret'] = 'your_secret_passphrase';
    ```

    - Update the MySQL server settings to match your MySQL installation if necessary.

2. **Access PHPMyAdmin:**
    - Open a web browser and go to `http://localhost/phpmyadmin`.
    - Log in with the MySQL root user credentials you set during MySQL installation.

### 5. Test the Setup

1. Create a `test.php` file in your project root directory with the following content:

    ```php
    <?php
    phpinfo();
    ?>
    ```

2. Open a web browser and go to `http://localhost/test.php`. You should see the PHP info page, confirming that PHP is working correctly with NGINX.

### 6. Stopping NGINX and PHP

- To stop NGINX:

    ```cmd
    C:\nginx>nginx -s stop
    ```

- To stop PHP FastCGI, close the Command Prompt window running `php-cgi`.

### 7. Additional Configuration

- **Configure Firewall:** Ensure that port 80 is open on your firewall to allow HTTP traffic.
- **Error Logs:** Check `C:\nginx\logs\error.log` for any issues if NGINX does not start.
- **SSL/TLS (Optional):** If you need to set up HTTPS, consider configuring SSL/TLS certificates for your NGINX server.

---

