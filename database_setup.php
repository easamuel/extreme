<?php
/**
 * Database Setup Script
 * Run this once to switch from SQLite to MySQL
 * 
 * Usage: php database_setup.php
 */

echo "=== ExtremeSolutions Database Setup ===\n\n";

// Check if .env exists
if (!file_exists('.env')) {
    echo "ERROR: .env file not found!\n";
    exit(1);
}

// Read .env file
$envContent = file_get_contents('.env');

// Check current database connection
if (strpos($envContent, 'DB_CONNECTION=sqlite') !== false) {
    echo "Current database: SQLite\n";
    echo "Switching to MySQL...\n\n";
    
    // Update database configuration
    $envContent = preg_replace(
        '/DB_CONNECTION=sqlite/',
        'DB_CONNECTION=mysql',
        $envContent
    );
    
    $envContent = preg_replace(
        '/DB_DATABASE=.*/',
        'DB_DATABASE=extremesolutions',
        $envContent
    );
    
    // Add MySQL settings if they don't exist
    if (strpos($envContent, 'DB_HOST') === false) {
        $envContent .= "\nDB_HOST=127.0.0.1\n";
    }
    if (strpos($envContent, 'DB_PORT') === false) {
        $envContent .= "DB_PORT=3306\n";
    }
    if (strpos($envContent, 'DB_USERNAME') === false) {
        $envContent .= "DB_USERNAME=root\n";
    }
    if (strpos($envContent, 'DB_PASSWORD') === false) {
        $envContent .= "DB_PASSWORD=\n";
    }
    
    // Write updated .env
    file_put_contents('.env', $envContent);
    echo "✓ .env file updated\n";
    echo "\nNext steps:\n";
    echo "1. Create database 'extremesolutions' in phpMyAdmin\n";
    echo "2. Run: php artisan migrate\n";
    echo "3. Test registration\n";
} else {
    echo "Database is already configured (not SQLite)\n";
}

echo "\n=== SSO Configuration ===\n";
echo "For SSO across subdomains, add to .env:\n";
echo "SESSION_DOMAIN=.extremesolutions.com\n";
echo "(Replace with your actual domain)\n";

