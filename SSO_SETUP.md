# SSO (Single Sign-On) Setup for Subdomains

## Overview
This setup enables users to register once and access all subdomains (hr.extremesolutions.com, school.extremesolutions.com, etc.) with the same login.

## Configuration Steps

### 1. Database Setup (Required First)
Since SQLite isn't working, switch to MySQL:

**Option A: Use the setup script**
```bash
php database_setup.php
```

**Option B: Manual Setup**
1. Create database in phpMyAdmin: `extremesolutions`
2. Update `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=extremesolutions
DB_USERNAME=root
DB_PASSWORD=
```

3. Run migrations:
```bash
php artisan migrate
```

### 2. SSO Configuration for Subdomains

Update your `.env` file with these settings:

```env
# Session Configuration for SSO
SESSION_DRIVER=database
SESSION_DOMAIN=.extremesolutions.com
SESSION_SECURE_COOKIE=false  # Set to true in production with HTTPS
SESSION_SAME_SITE=lax
```

**Important Notes:**
- Replace `.extremesolutions.com` with your actual domain
- The leading dot (.) allows cookies to work across all subdomains
- For local development, you can use: `SESSION_DOMAIN=.localhost` (but this may not work in all browsers)
- In production with HTTPS, set `SESSION_SECURE_COOKIE=true`

### 3. Shared Session Table

The session table is already created by Laravel migrations. All subdomains will use the same `sessions` table in the database.

### 4. Testing SSO Locally

For local testing with subdomains:

1. Edit `C:\Windows\System32\drivers\etc\hosts` (as Administrator):
```
127.0.0.1 extremesolutions.local
127.0.0.1 hr.extremesolutions.local
127.0.0.1 school.extremesolutions.local
```

2. Update `.env`:
```env
APP_URL=http://extremesolutions.local:8000
SESSION_DOMAIN=.extremesolutions.local
```

3. Access:
- Main: http://extremesolutions.local:8000
- HR: http://hr.extremesolutions.local:8000
- School: http://school.extremesolutions.local:8000

### 5. Production Deployment

For production:
```env
APP_URL=https://extremesolutions.com
SESSION_DOMAIN=.extremesolutions.com
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=lax
```

## How It Works

1. User registers/logs in on main domain
2. Session cookie is set with domain `.extremesolutions.com`
3. Cookie is accessible to all subdomains (hr.extremesolutions.com, school.extremesolutions.com, etc.)
4. All subdomains check the same session in the database
5. User is automatically logged in across all platforms

## Security Considerations

- Use HTTPS in production (`SESSION_SECURE_COOKIE=true`)
- Keep session lifetime reasonable (default: 120 minutes)
- Use `SESSION_SAME_SITE=lax` to prevent CSRF attacks
- Regularly clean expired sessions from database

## Troubleshooting

**Sessions not working across subdomains?**
- Check `SESSION_DOMAIN` has leading dot (`.domain.com`)
- Ensure all subdomains point to same database
- Clear browser cookies and try again
- Check browser console for cookie errors

**Database connection issues?**
- Verify MySQL is running
- Check database credentials in `.env`
- Run `php artisan config:clear`

