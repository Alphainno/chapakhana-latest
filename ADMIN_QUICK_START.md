# Quick Start Guide - Admin Dashboard

## Getting Started

### 1. Access the Admin Dashboard
Navigate to: `http://your-domain.com/dashboard`

### 2. Login Credentials
```
Email: admin@chapakhana.com
Password: admin123
```

### 3. Dashboard Features

#### Navigation
- **Sidebar Menu**: Click on any category to manage that section
- **Home**: Dashboard overview with statistics
- **Shop**: Product and inventory management
- **Categories**: All product categories (Books, Business Cards, Stickers, etc.)

#### Key Sections

**Home Dashboard**
- View total orders, revenue, products, and customers
- Monitor recent order activity
- Quick statistics at a glance

**Shop Management**
- Add new products
- Manage inventory levels
- Update pricing

**Category Management**
Each category has its own management interface:
- Books (11 types)
- Booklets
- Business Cards (6 types)
- Stickers (6 types)
- Banners
- Catalogs
- Magazines
- Stationery
- Postcards & Invitations

### 4. Design Features

✓ Matches website color scheme (Red & Blue)
✓ Responsive design (mobile, tablet, desktop)
✓ Secure authentication
✓ Role-based access control
✓ Clean, modern interface

### 5. Security Notes

⚠️ **Important Security Steps:**
1. Change the default admin password immediately
2. Use a strong password with special characters
3. Never share admin credentials
4. Log out when finished

### 6. Creating Additional Admin Users

**Option 1: Using Tinker**
```bash
php artisan tinker
```
```php
User::create([
    'name' => 'New Admin',
    'email' => 'newadmin@example.com',
    'password' => Hash::make('secure_password'),
    'is_admin' => true,
]);
```

**Option 2: Via Database**
```sql
UPDATE users SET is_admin = 1 WHERE email = 'user@example.com';
```

### 7. Troubleshooting

**Can't Login?**
- Verify email and password are correct
- Check that user has `is_admin = 1` in database
- Clear browser cache

**403 Forbidden Error?**
- Your account doesn't have admin privileges
- Contact system administrator

**Session Issues?**
- Clear cookies and try again
- Check Laravel session configuration

### 8. Need Help?

See full documentation in `README_ADMIN.md`

---

## Quick Command Reference

```bash
# Create admin user
php artisan db:seed --class=AdminUserSeeder

# Reset database (WARNING: deletes all data)
php artisan migrate:fresh --seed

# Check current admin users
php artisan tinker
>>> User::where('is_admin', true)->get()

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

---

**Dashboard URL:** `/dashboard`
**Logout:** Click the red "Logout" button in the top right corner
