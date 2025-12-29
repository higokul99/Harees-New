# Website Info Control - Implementation Summary

## Overview
Created a Website Info Control feature in the IMS to toggle the visibility of product rates on the customer-facing Laravel website.

---

## Database Setup

### SQL Table Creation
Execute this SQL in phpMyAdmin for the `hjimsdb_localenv` database:

```sql
CREATE TABLE site_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    option_name VARCHAR(255) NOT NULL,
    status TINYINT(1) DEFAULT 1,
    updated_by VARCHAR(100),
    updated_datetime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### Insert Initial Record
```sql
INSERT INTO site_settings (option_name, status, updated_by, updated_datetime) 
VALUES ('hide_product_rates', 1, 'Admin', NOW());
```

**Note:** 
- `status = 1` means rates are HIDDEN
- `status = 0` means rates are VISIBLE

---

## Files Created

### 1. **website_info_control.php**
- Location: `resources/views/harees/ims/internal/`
- Purpose: Display page with toggle switch
- Features:
  - Toggle switch to hide/show product rates
  - Current status display
  - Quick stats (total products, visible products)
  - Last updated information
  - Success/Error message handling

### 2. **website_info_controller.php**
- Location: `resources/views/harees/ims/internal/`
- Purpose: Handle form submission
- Features:
  - Updates `site_settings` table
  - Stores username from `$_SESSION['username']`
  - Handles both INSERT and UPDATE operations
  - Session-based success/error messages
  - Redirects back to control page

### 3. **docs/info.md**
- Location: `resources/views/harees/ims/internal/docs/`
- Purpose: Documentation of rate calculation logic
- Content: Complete breakdown of pricing formula

---

## Files Modified

### **includes/sidebar.php**
Added new menu item under "Site Settings":
```php
<a href="website_info_control.php" class="dropdown-item">
    <i class="fa fa-info-circle me-2"></i>Website Info Control
</a>
```

---

## How It Works

### IMS Side (Admin Panel)
1. Admin logs into IMS
2. Navigates to **Site Settings → Website Info Control**
3. Toggles the "Hide Product Rates" switch
4. Clicks "Save Changes"
5. Setting is saved to database with username and timestamp

### Laravel Side (Customer Website)
You need to implement the following in Laravel views:

#### Example Implementation:

**In ProductController or a Helper:**
```php
// Add this helper function
public function shouldHideRates()
{
    $setting = DB::connection('mysql_ims')
        ->table('site_settings')
        ->where('option_name', 'hide_product_rates')
        ->first();
    
    return $setting ? (bool)$setting->status : false;
}
```

**In Product Listing View (product.index):**
```blade
@if(!$shouldHideRates)
    <p class="text-xl font-bold text-yellow-600">
        ₹{{ number_format($product->calculated_price) }}
    </p>
@else
    <p class="text-gray-600">
        <i class="fas fa-phone"></i> Contact for Price
    </p>
@endif
```

**In Product Detail View (product.show):**
```blade
@if(!$shouldHideRates)
    <div class="price-breakdown">
        <h3>Price Details</h3>
        <p>Metal Cost: ₹{{ number_format($priceData['metal_cost']) }}</p>
        <p>Making Charges: ₹{{ number_format($priceData['making_charges']) }}</p>
        <p>GST (3%): ₹{{ number_format($priceData['gst']) }}</p>
        <h2>Total: ₹{{ number_format($priceData['total_price']) }}</h2>
    </div>
@else
    <div class="contact-for-price">
        <p>Please contact us for pricing information</p>
        <a href="tel:{{ config('shop.contact.phone') }}">
            Call Now
        </a>
    </div>
@endif
```

---

## Toggle Switch Behavior

### Visual States:
- **ON (Green)** = Rates are HIDDEN (status = 1)
- **OFF (Red)** = Rates are VISIBLE (status = 0)

### Database Values:
```
status = 1 → Hide rates (Toggle ON)
status = 0 → Show rates (Toggle OFF)
```

---

## Session Variables Used

From `controller.php` login:
- `$_SESSION['username']` - Username of logged-in user
- `$_SESSION['usertype']` - Account type (ADMIN/STAFF/USER)
- `$_SESSION['name']` - Full name of user

The controller uses `$_SESSION['username']` to track who made the changes.

---

## Testing Steps

### 1. Create the Table
```sql
-- Run in phpMyAdmin
CREATE TABLE site_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    option_name VARCHAR(255) NOT NULL,
    status TINYINT(1) DEFAULT 1,
    updated_by VARCHAR(100),
    updated_datetime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### 2. Access the Feature
1. Login to IMS: `http://localhost/github/Harees-New/resources/views/harees/ims/`
2. Navigate to: **Site Settings → Website Info Control**
3. Toggle the switch
4. Click "Save Changes"

### 3. Verify Database
```sql
SELECT * FROM site_settings WHERE option_name = 'hide_product_rates';
```

Should show:
- `status`: 1 or 0
- `updated_by`: Your username
- `updated_datetime`: Current timestamp

### 4. Implement in Laravel
Add the helper function and update your Blade templates as shown above.

---

## Features Included

✅ Toggle switch with visual feedback (ON/OFF)
✅ Current status display
✅ Success/Error messages with SweetAlert-style alerts
✅ Username tracking (who made the change)
✅ Timestamp tracking (when it was changed)
✅ Quick stats sidebar
✅ Responsive design
✅ Follows IMS coding standards
✅ Uses prepared statements (SQL injection protection)
✅ Session-based authentication

---

## Rate Calculation Logic

See `docs/info.md` for complete documentation on how product rates are calculated:

**Formula:**
```
Final Price = Metal Cost + Making Charges + Stone Cost + GST (3%)
```

**Components:**
1. Metal Cost = Weight × Rate per gram
2. Making Charges = Percentage or Fixed per gram + Wastage
3. Stone Cost = Stones + Beads + Pearls
4. GST = 3% of subtotal

---

## Next Steps

1. ✅ Execute SQL to create `site_settings` table
2. ✅ Test the toggle in IMS
3. ⏳ Implement rate hiding logic in Laravel views
4. ⏳ Test on customer-facing website

---

## Support

For questions or issues:
- Check `docs/info.md` for rate calculation details
- Review `website_info_control.php` for UI logic
- Review `website_info_controller.php` for backend logic

---

*Created: 2025-12-30*
*Location: resources/views/harees/ims/internal/*
