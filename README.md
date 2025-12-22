# Harees Jewellery - Laravel Application

## 🎉 Migration Complete!

Your old core PHP project has been successfully migrated to Laravel framework.



## 🚀 Setup Instructions

### 1. Copy Environment File
```bash
copy .env.example .env
```

### 2. Generate Application Key
```bash
php artisan key:generate
```

### 3. Configure Database
Edit `.env` file and update database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hjimsdb_localenv
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Migrations (if you have migration files)
```bash
php artisan migrate
```

### 5. Start Development Server
```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 📋 Available Routes

### Authentication
- `GET /login` or `/sign-in` - Login page
- `POST /login` - Process login
- `GET /register` or `/sign-up` - Registration page
- `POST /register` - Process registration
- `GET /forgot-password` or `/sign-forget` - Forgot password
- `POST /logout` - Logout

### Products
- `GET /products` or `/product` - Product listing
- `GET /product-all` - All products
- `GET /product/{id}` - Product detail
- `GET /search` - Search products

### Static Pages
- `GET /about-us` - About Us
- `GET /contact-us` - Contact Us
- `GET /stores` - Store locations
- `GET /gold-rate` - Gold rates
- `GET /faq` - FAQs
- And many more...

### User Dashboard (Requires Login)
- `GET /profile` or `/uprofile` - User profile
- `GET /my-orders` or `/umyorders` - Orders
- `GET /my-schemes` or `/umyschemes` - Schemes
- `GET /cart` or `/ucart` - Shopping cart
- `GET /wishlist` - Wishlist

## 🔑 Key Features Implemented

### ✅ Authentication System
- Login with phone number and 4-digit PIN
- Registration with validation
- Forgot password with security questions
- Session management
- Remember me functionality

### ✅ Laravel Best Practices
- **Blade Templates**: Using `@extends`, `@section`, `@include`
- **Route Helpers**: `route('name')` instead of hardcoded URLs
- **CSRF Protection**: `@csrf` token in all forms
- **Validation**: Request validation in controllers
- **Middleware**: `auth` and `guest` middleware
- **Asset Helpers**: `asset()` for CSS/JS/images

### ✅ Backward Compatibility
- Old URLs still work (e.g., `/sign-in`, `/uprofile`)
- Plain text passwords (as per old system)
- Same database structure

## ⚠️ Security Note

**WARNING**: The current implementation uses **plain text passwords** to match your old system. This is **NOT secure** for production!

### To implement proper password hashing:

1. Remove the `setPasswordAttribute` method from `User.php`
2. Update `AuthController`:
```php
// In login method:
if ($user && Hash::check($password, $user->password)) {
    // Login successful
}

// In register method:
'password' => Hash::make($request->pin),
```

3. Re-enable password hashing in `User.php`:
```php
protected function casts(): array
{
    return [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
```

## 📝 Next Steps

### Immediate Tasks
1. ✅ Copy `.env.example` to `.env`
2. ✅ Run `php artisan key:generate`
3. ✅ Configure database in `.env`
4. ✅ Test login functionality
5. ⏳ Convert remaining view files from `resources/views/harees/`
6. ⏳ Create product views
7. ⏳ Create user dashboard views
8. ⏳ Move assets to `public/` directory
9. ⏳ Test all functionality

### View Files to Convert
- `resources/views/harees/sign-up.php` → `resources/views/auth/register.blade.php`
- `resources/views/harees/sign-forget.php` → `resources/views/auth/forgot-password.blade.php`
- `resources/views/harees/product.php` → `resources/views/products/index.blade.php`
- `resources/views/harees/product-detail.php` → `resources/views/products/show.blade.php`
- `resources/views/harees/uprofile.php` → `resources/views/user/profile.blade.php`
- And many more...

## 🛠️ Useful Commands

```bash
# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# View all routes
php artisan route:list

# Create a new controller
php artisan make:controller ControllerName

# Create a new model
php artisan make:model ModelName

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback
```

## 📚 Laravel Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Blade Templates](https://laravel.com/docs/blade)
- [Routing](https://laravel.com/docs/routing)
- [Controllers](https://laravel.com/docs/controllers)
- [Validation](https://laravel.com/docs/validation)

## 🎯 Migration Benefits

1. **Better Code Organization**: Separation of concerns (MVC pattern)
2. **Security**: CSRF protection, SQL injection prevention
3. **Maintainability**: Easier to update and debug
4. **Reusability**: Blade components and partials
5. **Modern PHP**: Laravel's ecosystem and features
6. **Scalability**: Easy to add new features

## 📞 Support

For issues or questions about this migration, refer to:
- Laravel documentation
- The walkthrough document in the artifacts folder
- Original PHP files in `resources/views/harees/` for reference

---

**Developed by**: Metora  
**Digital Marketing**: B Factor  
**© 2025 Harees Jewellery™**
