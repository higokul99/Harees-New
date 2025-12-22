# Harees Jewellery - Laravel E-Commerce Application

## 🎉 Project Overview

A comprehensive Laravel-based e-commerce platform for Harees Jewellery, featuring product management, user authentication, shopping cart, order processing, and a complete **Gold Savings Scheme** system.

## 🚀 Quick Start

### Prerequisites
- PHP 8.1+
- MySQL 5.7+
- Composer
- Node.js & npm (for asset compilation)

### Installation

```bash
# 1. Clone and setup
cd harees_fe
composer install

# 2. Configure environment
copy .env.example .env
php artisan key:generate

# 3. Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hjimsdb_localenv
DB_USERNAME=root
DB_PASSWORD=

# 4. Run migrations
php artisan migrate

# 5. Start server
php artisan serve
```

Visit: `http://localhost:8000`

## 📋 Features Overview

### ✅ Authentication System
- **Login**: Phone number + 4-digit PIN authentication
- **Registration**: Multi-step registration with validation
- **Password Recovery**: Security question-based recovery
- **Session Management**: Persistent login with "Remember Me"
- **Middleware Protection**: Auth-protected routes for user areas

**Routes:**
- `GET /login` or `/sign-in` - Login page
- `POST /login` - Process login
- `GET /register` or `/sign-up` - Registration
- `POST /register` - Process registration
- `GET /forgot-password` - Password recovery
- `POST /logout` - Logout user

---

### ✅ Product Management

#### Product Catalog
- **Dynamic Product Tables**: 87+ product tables (rings, necklaces, bangles, etc.)
- **Live Gold Rate Integration**: Real-time price calculation
- **Advanced Filtering**: Filter by category, price, weight, purity
- **Search Functionality**: Full-text search across products
- **Image Galleries**: Multiple product images with zoom
- **Responsive Design**: Mobile-optimized product pages

#### Product Categories
- 22K Gold Products (Rings, Necklaces, Bangles, Earrings, etc.)
- Silver Jewelry
- Platinum Collection
- Diamond Jewelry
- Custom Collections

**Routes:**
- `GET /products` or `/product` - Product listing with filters
- `GET /product-all` - All products across categories
- `GET /product/{id}` - Product detail page
- `GET /search` - Search products

**Controllers:**
- `ProductController` - Product listing, detail, search
- `ProductHelper` - Gold rate calculation, pricing logic

**Views:**
- `resources/views/product/index.blade.php` - Product listing
- `resources/views/product/show.blade.php` - Product details
- `resources/views/product/all.blade.php` - All collections

---

### ✅ Shopping Cart

- **Add to Cart**: Dynamic cart updates
- **Quantity Management**: Increase/decrease quantities
- **Cart Summary**: Real-time total calculation
- **Persistent Cart**: Cart saved to database
- **Guest Cart Support**: Cart before login
- **Cart Migration**: Transfer guest cart on login

**Routes:**
- `GET /cart` or `/ucart` - View cart
- `POST /cart/add` - Add item to cart
- `POST /cart/update` - Update quantities
- `POST /cart/remove` - Remove item
- `POST /cart/clear` - Clear cart

**Controller:** `CartController`
**View:** `resources/views/user/cart.blade.php`

---

### ✅ Wishlist

- **Save Favorites**: Add products to wishlist
- **Quick Access**: View saved items
- **Move to Cart**: Transfer wishlist items to cart

**Routes:**
- `GET /wishlist` - View wishlist
- `POST /wishlist/add` - Add to wishlist
- `POST /wishlist/remove` - Remove from wishlist

**Controller:** `WishlistController`
**View:** `resources/views/user/wishlist.blade.php`

---

### ✅ Order Management

- **Checkout Process**: Multi-step checkout
- **Order History**: View past orders
- **Order Tracking**: Track order status
- **Order Filtering**: Filter by status and date
- **Invoice Generation**: PDF invoices

**Order Statuses:**
- Pending
- Processing
- Completed
- Cancelled
- Refunded

**Routes:**
- `GET /checkout` - Checkout page
- `POST /checkout/process` - Process order
- `GET /my-orders` or `/umyorders` - Order history
- `GET /order/{id}` - Order details

**Controllers:**
- `CheckoutController` - Checkout flow
- `OrderController` - Order management

**Views:**
- `resources/views/user/orders.blade.php` - Order history
- `resources/views/checkout/index.blade.php` - Checkout page

---

### ✅ Gold Savings Scheme System (NEW!)

A complete implementation of Harees Jewellery's Gold Savings Scheme program, allowing customers to save systematically for gold purchases.

#### Features

**1. Scheme Enrollment**
- **Browse Available Schemes**: View all active gold savings plans
- **Scheme Details**: Monthly installment, bonus amount, final value
- **One-Click Enrollment**: Instant scheme activation
- **Unique Scheme Numbers**: Auto-generated scheme codes

**Available Schemes:**
- **Scheme A**: ₹5,000/month → 11 months → ₹5,000 bonus
- **Scheme B**: ₹10,000/month → 11 months → ₹10,000 bonus (Premium)
- **Scheme C**: ₹7,500/month → 11 months → ₹7,500 bonus (Rose Gold)
- **Scheme D**: ₹15,000/month → 11 months → ₹15,000 bonus (Premium)
- **Scheme E**: ₹12,500/month → 11 months → ₹12,500 bonus (Rose Gold)
- **Scheme F**: ₹20,000/month → 11 months → ₹20,000 bonus (Premium)

**2. Active Schemes Dashboard**
- **Scheme Cards**: Visual cards for each enrolled scheme
- **Progress Tracking**: Monthly payment progress bars
- **Payment Status**: Current month payment indicator
- **Scheme Details**: Installment amount, bonus, maturity value
- **Quick Actions**: Pay now or download passbook

**3. Payment Management**
- **Monthly Payments**: Record scheme installments
- **Payment Validation**: Prevents duplicate monthly payments
- **Payment Methods**: Cash or UPI payment options
- **Receipt Generation**: Unique receipt numbers
- **Auto-Completion**: Schemes auto-complete at 11 months

**4. Scheme Passbook**
- **Payment History**: Complete payment records
- **Cumulative Totals**: Running total display
- **Scheme Summary**: Total paid, bonus, maturity value
- **Professional Format**: A4 printable format
- **Print Functionality**: Browser print for physical records

**5. Scheme History**
- **Completed Schemes**: View all finished schemes
- **Download Passbooks**: Access historical passbooks
- **Final Value Display**: See maturity amounts

**Routes:**
- `GET /my-schemes` - Active schemes dashboard
- `GET /ugoldscheme` - Scheme enrollment page
- `POST /enroll-scheme` - Process enrollment
- `GET /scheme/{id}/payment` - Payment page
- `POST /scheme/{id}/payment-process` - Process payment
- `GET /my-schemes/history` - Completed schemes
- `GET /scheme/{id}/passbook` - Download passbook

**Controller:** `SchemeController`

**Key Methods:**
- `index()` - Display active schemes
- `enroll()` - Show enrollment page
- `store()` - Process new enrollment
- `payment()` - Display payment form
- `processPayment()` - Record payment
- `history()` - Show completed schemes
- `downloadPassbook()` - Generate passbook

**Views:**
- `resources/views/user/schemes.blade.php` - Schemes dashboard
- `resources/views/user/enroll_scheme.blade.php` - Enrollment page
- `resources/views/user/payment.blade.php` - Payment form
- `resources/views/user/schemes_history.blade.php` - History page
- `resources/views/user/passbook.blade.php` - Printable passbook

**Database Tables:**
- `gold_schemes` - Available scheme types
- `user_schemes` - User enrollments
- `scheme_payments` - Payment records

**Business Logic:**
- **Single Active Scheme**: Users can only have one active scheme at a time
- **11-Month Duration**: All schemes run for 11 months
- **Monthly Payments**: One payment per month validation
- **Bonus on Completion**: Bonus credited at scheme completion
- **Auto-Complete**: Schemes marked complete after 11 payments

---

### ✅ User Profile

- **Profile Management**: Update personal information
- **Address Book**: Manage delivery addresses
- **Quick Access**: Dashboard with quick links
- **Order Overview**: Recent orders summary
- **Wishlist Access**: Saved items
- **Scheme Access**: View gold schemes

**Routes:**
- `GET /profile` or `/uprofile` - User profile
- `POST /profile/update` - Update profile
- `POST /address/add` - Add address
- `POST /address/update` - Update address

**Controller:** `ProfileController`
**View:** `resources/views/user/profile.blade.php`

---

## 🏗️ Architecture

### MVC Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── ProductController.php
│   │   ├── CartController.php
│   │   ├── OrderController.php
│   │   ├── SchemeController.php
│   │   └── ...
│   └── Middleware/
│       └── Authenticate.php
├── Models/
│   ├── User.php
│   └── ...
└── Helpers/
    └── ProductHelper.php

resources/views/
├── layouts/
│   └── app.blade.php
├── partials/
│   ├── header.blade.php
│   └── footer.blade.php
├── auth/
│   ├── login.blade.php
│   └── register.blade.php
├── product/
│   ├── index.blade.php
│   └── show.blade.php
└── user/
    ├── profile.blade.php
    ├── orders.blade.php
    ├── cart.blade.php
    ├── schemes.blade.php
    └── ...

routes/
└── web.php
```

### Database Schema

**Users & Auth**
- `users` - User accounts
- `sessions` - Active sessions

**Products**
- `22kgold_product_rings` (and 86 other product tables)
- `gold_rates` - Current gold prices

**Orders**
- `orders` - Order records
- `order_items` - Order line items

**Cart & Wishlist**
- `cart` - Shopping cart items
- `user_wishlist` - Saved products

**Gold Schemes**
- `gold_schemes` - Available scheme types
- `user_schemes` - User enrollments
- `scheme_payments` - Payment history

---

## 🛠️ Development Commands

```bash
# Clear all caches
php artisan optimize:clear

# View routes
php artisan route:list

# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Create controller
php artisan make:controller ControllerName

# Create model
php artisan make:model ModelName -m

# Tinker (REPL)
php artisan tinker
```

---

## 🔒 Security Features

- **CSRF Protection**: All forms protected
- **SQL Injection Prevention**: Parameterized queries
- **XSS Protection**: Output escaping
- **Authentication Middleware**: Route protection
- **Session Security**: Secure session handling

⚠️ **Note**: Currently using plain text passwords for backward compatibility. Implement password hashing for production:

```php
// In AuthController login:
if (Hash::check($password, $user->password)) {
    // Login successful
}

// In registration:
'password' => Hash::make($request->pin),
```

---

## 📱 Frontend

- **Framework**: Tailwind CSS
- **Icons**: Font Awesome 6
- **JavaScript**: Vanilla JS + Alpine.js
- **Responsive**: Mobile-first design
- **Animations**: Smooth transitions

---

## 🎯 Static Pages

- `GET /` - Home page
- `GET /about-us` - About Harees Jewellery
- `GET /contact-us` - Contact information
- `GET /stores` - Store locations
- `GET /gold-rate` - Live gold rates
- `GET /faq` - Frequently asked questions
- `GET /terms` - Terms & conditions
- `GET /privacy` - Privacy policy

---

## 🐛 Troubleshooting

### Common Issues

**1. Routes not working**
```bash
php artisan route:clear
php artisan config:clear
```

**2. Views not updating**
```bash
php artisan view:clear
```

**3. Database connection failed**
- Check `.env` database credentials
- Ensure MySQL is running
- Verify database exists

**4. 500 Internal Server Error**
```bash
php artisan optimize:clear
# Check storage/logs/laravel.log
```

---

## 📚 Code Standards

### Laravel Best Practices

✅ **Implemented:**
- Blade templating (`@extends`, `@section`, `@include`)
- Route naming (`route('name')`)
- CSRF protection (`@csrf`)
- Form validation
- Middleware usage
- Asset helpers (`asset()`)
- DB query builder
- Carbon for dates

### Naming Conventions
- Controllers: `PascalCase` + `Controller`
- Models: `PascalCase` singular
- Routes: `kebab-case`
- Views: `snake_case.blade.php`
- Variables: `camelCase`

---

## 🔄 Migration from Legacy PHP

This Laravel application was migrated from a core PHP application while maintaining:
- ✅ Database compatibility
- ✅ Backward-compatible URLs
- ✅ Same authentication flow
- ✅ Existing features
- ✅ User data integrity

**Legacy Files**: `resources/views/harees/` (kept for reference)

---

## 📞 Support & Credits

**Developed by**: Metora  
**Digital Marketing**: B Factor  
**© 2025 Harees Jewellery™**

### Resources
- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [Blade Templates](https://laravel.com/docs/blade)

---

## 🎉 Recent Updates

### v2.0.0 - Gold Schemes Implementation (December 2025)
- ✅ Complete Gold Savings Scheme system
- ✅ Scheme enrollment with validation
- ✅ Payment processing and tracking
- ✅ Digital passbook generation
- ✅ Scheme history management
- ✅ Professional print-ready passbooks

### v1.5.0 - Order Management
- ✅ Order history with filtering
- ✅ Order status tracking
- ✅ Improved order UI

### v1.0.0 - Initial Laravel Migration
- ✅ Authentication system
- ✅ Product catalog
- ✅ Shopping cart
- ✅ User profiles
- ✅ Static pages

---

**Last Updated**: December 22, 2025
