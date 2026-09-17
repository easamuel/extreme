# Quick Fix for Registration & SSO Setup

## ✅ Step 1: Create MySQL Database

1. Open **phpMyAdmin**: http://localhost/phpmyadmin
2. Click **"New"** (left sidebar)
3. Database name: `extremesolutions`
4. Collation: `utf8mb4_unicode_ci`
5. Click **"Create"**

## ✅ Step 2: Run Migrations

Open terminal in your project folder and run:

```bash
php artisan migrate
```

This will create the `users` and `sessions` tables.

## ✅ Step 3: Test Registration

1. Go to: http://127.0.0.1:8000/register
2. Fill in the form
3. Registration should work now! ✅

## 🔐 Step 4: Configure SSO for Subdomains

Edit your `.env` file and add these lines:

```env
# SSO Configuration (for subdomain sharing)
SESSION_DRIVER=database
SESSION_DOMAIN=.extremesolutions.com
SESSION_SECURE_COOKIE=false
SESSION_SAME_SITE=lax
```

**For Local Development:**
```env
SESSION_DOMAIN=.localhost
```

**For Production:**
```env
SESSION_DOMAIN=.extremesolutions.com
SESSION_SECURE_COOKIE=true
```

## 🎯 How SSO Works

Once configured:
- User registers/logs in on main domain
- Session cookie is shared across ALL subdomains
- User can access:
  - extremesolutions.com ✅
  - hr.extremesolutions.com ✅
  - school.extremesolutions.com ✅
  - Any future subdomain ✅

All with the same login!

## 🔄 After Making Changes

Always clear config cache:
```bash
php artisan config:clear
php artisan cache:clear
```

## ❌ Still Having Issues?

1. **Check MySQL is running** in XAMPP Control Panel
2. **Verify database exists**: Check phpMyAdmin
3. **Check .env file**: Make sure DB credentials are correct
4. **Clear cache**: `php artisan config:clear`

