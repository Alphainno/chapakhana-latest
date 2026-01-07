# Admin Dashboard Documentation

## Overview
The admin dashboard for chapakhana provides a comprehensive management interface for all products, categories, and shop operations.

## Features

### Authentication
- Secure admin login at `/dashboard`
- Role-based access control using `is_admin` flag
- Session-based authentication with remember me functionality

### Dashboard Sections

1. **Home Dashboard**
   - Overview statistics (Orders, Revenue, Products, Customers)
   - Recent orders table
   - Quick access to key metrics

2. **Shop Management**
   - Add new products
   - Manage inventory
   - Update pricing and discounts

3. **Category Management**
   - Books (Paperback, Hardback, Special Finish, etc.)
   - Booklets
   - Business Cards (Classic, Square, Rounded Corners, etc.)
   - Stickers (Die Cut, Kiss Cut, Vinyl, etc.)
   - Banners
   - Catalogs
   - Magazines
   - Stationery
   - Postcards & Invitations

## Color Scheme
The dashboard follows the website's color scheme:
- Primary: Red (`#DC2626`) - chapakhana brand color
- Accent: Blue (`#3B82F6`) - Interactive elements
- Background: Gray (`#F9FAFB`)
- Text: Gray shades for hierarchy

## Access Credentials

**Default Admin Account:**
- Email: `admin@chapakhana.com`
- Password: `admin123`

⚠️ **Important:** Change these credentials in production!

## URL Structure

- `/dashboard` - Admin login page
- `/dashboard/home` - Main dashboard (requires authentication)
- `/dashboard/logout` - Logout endpoint

## Technical Implementation

### Database
- Added `is_admin` boolean column to `users` table
- Default value: `false`

### Middleware
- `AdminMiddleware` protects all admin routes
- Checks both authentication and admin status
- Redirects unauthorized users

### Controllers
- `AdminController` handles all admin operations
  - `showLogin()` - Display login form
  - `login()` - Process login
  - `dashboard()` - Display dashboard
  - `logout()` - Process logout

### Views
- `resources/views/admin/login.blade.php` - Admin login form
- `resources/views/admin/dashboard.blade.php` - Main dashboard interface

## Security Features

1. **Authentication Required**: All dashboard routes protected by middleware
2. **Role Verification**: Only users with `is_admin = true` can access
3. **Session Management**: Proper session regeneration on login/logout
4. **CSRF Protection**: All forms include CSRF tokens
5. **Password Hashing**: Bcrypt hashing for secure password storage

## Creating Admin Users

### Via Seeder
```bash
php artisan db:seed --class=AdminUserSeeder
```

### Via Tinker
```php
php artisan tinker

User::create([
    'name' => 'Admin Name',
    'email' => 'admin@example.com',
    'password' => Hash::make('password'),
    'is_admin' => true,
]);
```

### Manual Database Update
```sql
UPDATE users SET is_admin = 1 WHERE email = 'user@example.com';
```

## Responsive Design
- Mobile-first approach
- Sidebar collapses on mobile
- Touch-friendly buttons and interactions
- Optimized for tablets and desktop

## Future Enhancements
- Full CRUD operations for all categories
- Image upload functionality
- Order management system
- Customer management
- Analytics and reporting
- Bulk import/export
- Email notifications
- Activity logs

## Support
For issues or questions, contact the development team.
