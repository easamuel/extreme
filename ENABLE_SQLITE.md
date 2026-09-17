# How to Enable SQLite Extension in XAMPP

## Steps:

1. **Open php.ini file**
   - Location: `C:\xampp\php\php.ini`
   - Open it with a text editor (as Administrator if needed)

2. **Find and uncomment SQLite extensions**
   - Search for: `;extension=pdo_sqlite`
   - Remove the semicolon: `extension=pdo_sqlite`
   - Search for: `;extension=sqlite3`
   - Remove the semicolon: `extension=sqlite3`

3. **Save the file**

4. **Restart Apache**
   - Open XAMPP Control Panel
   - Stop Apache, then Start it again

5. **Verify SQLite is enabled**
   ```bash
   php -m | findstr sqlite
   ```
   You should see `pdo_sqlite` and `sqlite3` in the output.

## Alternative: Use MySQL (Easier)

If you prefer to use MySQL instead (which is usually already enabled in XAMPP):

1. **Update .env file:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=extremesolutions
   DB_USERNAME=root
   DB_PASSWORD=
   ```

2. **Create the database:**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `extremesolutions`

3. **Run migrations:**
   ```bash
   php artisan migrate
   ```

