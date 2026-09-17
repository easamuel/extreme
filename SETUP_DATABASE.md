# Database Setup for ExtremeSolutions

## Current Issue
SQLite driver is not enabled in PHP. We'll switch to MySQL which is already available.

## Quick Fix - Switch to MySQL

### Step 1: Create Database
1. Open phpMyAdmin: http://localhost/phpmyadmin
2. Click "New" to create a database
3. Database name: `extremesolutions`
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"

### Step 2: Update .env File
Update your `.env` file with these MySQL settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=extremesolutions
DB_USERNAME=root
DB_PASSWORD=
```

### Step 3: Run Migrations
```bash
php artisan migrate
```

### Step 4: Test Registration
Try registering a user again - it should work now!

## Alternative: Enable SQLite (if you prefer)
If you want to use SQLite instead:
1. Open `C:\xampp\php\php.ini`
2. Find and uncomment:
   - `;extension=pdo_sqlite` → `extension=pdo_sqlite`
   - `;extension=sqlite3` → `extension=sqlite3`
3. Restart Apache in XAMPP

