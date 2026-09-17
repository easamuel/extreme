# ExtremeSolutions Website

A modern, secure, and easy-to-navigate Laravel/PHP website for ExtremeSolutions - a tech solutions company that builds specialized platforms and tools for businesses and institutions.

## Project Overview

ExtremeSolutions builds digital solutions that solve real business problems. Our platforms simplify workflows in HR management, education systems, and other sectors. We build secure, scalable products with Laravel/PHP that help organizations automate processes, improve accuracy, and enhance operational efficiency.

## Features

- **Modern, Clean Design**: Inspired by clean simplicity with elegant whitespace and readability
- **Responsive Layout**: Fully responsive design that works on desktop, tablet, and mobile devices
- **Secure Authentication**: User registration and login with password hashing
- **Contact Form**: Secure contact form with CSRF protection and input validation
- **Product Pages**: Placeholder pages for HR Management and School/Education solutions
- **Security Best Practices**: 
  - CSRF protection on all forms
  - Input validation and sanitization
  - XSS prevention
  - SQL injection prevention (using Eloquent ORM)
  - Password hashing with bcrypt

## Technology Stack

- **Framework**: Laravel 12
- **PHP**: 8.2+
- **Frontend**: Tailwind CSS 4.0
- **Database**: SQLite (default, can be changed to MySQL/PostgreSQL)
- **Authentication**: Custom Laravel authentication

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm (for frontend assets)
- SQLite (or MySQL/PostgreSQL for production)

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd es
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Environment Setup

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 5. Configure Database

For SQLite (default):
- The database file is already created at `database/database.sqlite`
- Ensure the file has write permissions

For MySQL/PostgreSQL:
- Update `.env` with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=extremesolutions
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Build Frontend Assets

For development:
```bash
npm run dev
```

For production:
```bash
npm run build
```

### 8. Start Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Project Structure

```
es/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/          # Authentication controllers
│   │   │   ├── ContactController.php
│   │   │   ├── DashboardController.php
│   │   │   ├── HomeController.php
│   │   │   └── ProductController.php
│   │   └── ...
│   └── Models/
│       └── User.php
├── resources/
│   ├── views/
│   │   ├── auth/              # Login and register views
│   │   ├── components/       # Header and footer components
│   │   ├── layouts/           # Main layout
│   │   ├── products/          # Product pages
│   │   ├── dashboard.blade.php
│   │   └── home.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── routes/
│   ├── web.php               # Main web routes
│   └── auth.php              # Authentication routes
└── database/
    └── migrations/            # Database migrations
```

## Routes

### Public Routes
- `GET /` - Home page
- `GET /products/hr` - HR Management solution page
- `GET /products/school` - School/Education solution page
- `POST /contact` - Contact form submission

### Authentication Routes
- `GET /login` - Login page
- `POST /login` - Login submission
- `GET /register` - Registration page
- `POST /register` - Registration submission
- `POST /logout` - Logout

### Protected Routes
- `GET /dashboard` - User dashboard (requires authentication)

## Security Features

### CSRF Protection
All forms are protected with Laravel's CSRF tokens. The `@csrf` directive is included in all forms.

### Input Validation
- Contact form validates name, email, subject, and message
- Registration validates name, email, and password
- All inputs are sanitized to prevent XSS attacks

### Password Security
- Passwords are hashed using Laravel's `Hash::make()` (bcrypt)
- Password confirmation required during registration
- Minimum password requirements enforced

### SQL Injection Prevention
- All database queries use Eloquent ORM, which uses parameterized queries
- No raw SQL queries that could be vulnerable

## Deployment

### Production Deployment Checklist

1. **Environment Configuration**
   ```bash
   # Set APP_ENV to production
   APP_ENV=production
   APP_DEBUG=false
   ```

2. **Optimize Application**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Build Assets**
   ```bash
   npm run build
   ```

4. **Set Permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

5. **Database Migration**
   ```bash
   php artisan migrate --force
   ```

6. **Web Server Configuration**
   - Point web server document root to `public/` directory
   - Ensure `.env` file is not publicly accessible
   - Configure HTTPS for secure connections

### Environment Variables

Key environment variables to configure:

```env
APP_NAME="ExtremeSolutions"
APP_ENV=production
APP_KEY=base64:...  # Generated with php artisan key:generate
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=extremesolutions
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Development

### Running Tests

```bash
php artisan test
```

### Code Style

Laravel Pint is included for code formatting:

```bash
./vendor/bin/pint
```

### Database Seeding

To create a test user:

```bash
php artisan tinker
```

Then in tinker:
```php
User::create([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => Hash::make('password'),
]);
```

## Customization

### Adding New Products

1. Add route in `routes/web.php`:
   ```php
   Route::get('/products/new-product', [ProductController::class, 'newProduct'])->name('products.new');
   ```

2. Add method in `app/Http/Controllers/ProductController.php`

3. Create view in `resources/views/products/new-product.blade.php`

### Modifying Styles

Styles are in `resources/css/app.css` using Tailwind CSS. Custom styles can be added there.

### Updating Contact Form

The contact form is handled by `ContactController`. To send actual emails, configure mail settings in `.env` and update the `store` method to send emails.

## Troubleshooting

### Assets Not Loading
- Run `npm run build` or `npm run dev`
- Clear cache: `php artisan view:clear`

### Database Issues
- Check database permissions
- Run migrations: `php artisan migrate:fresh`

### Authentication Not Working
- Clear config cache: `php artisan config:clear`
- Check session driver in `.env`

## Support

For issues or questions, please contact the development team or create an issue in the repository.

## License

This project is proprietary software for ExtremeSolutions.

## Credits

Built with [Laravel](https://laravel.com) and [Tailwind CSS](https://tailwindcss.com).
