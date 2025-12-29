# Product Rate Calculation Logic - Harees Jewellery IMS

## Overview
The website uses a sophisticated pricing calculation system implemented in Laravel's `PricingService.php` to calculate the final price of jewelry products based on multiple factors.

## Calculation Formula

### Final Price = Metal Cost + Making Charges + Stone Cost + GST

---

## Detailed Breakdown

### 1. **Metal Cost Calculation**
```
Metal Cost = Net Weight (grams) × Metal Rate (per gram)
```

**Components:**
- **Net Weight**: Stored in `products.net_weight` column
- **Metal Rate**: Fetched from `gold_rates` table based on `metal_purity_id`
  - Latest rate is retrieved using `GoldRate::getLatestRate()`
  - Different rates for different purities (18K, 22K, Silver, etc.)

**Example:**
```
Net Weight: 5 grams
22K Gold Rate: ₹6,500/gram
Metal Cost = 5 × 6,500 = ₹32,500
```

---

### 2. **Making Charges (Value Addition)**
Making charges are fetched from the `categories` table and can be calculated in two ways:

#### A. **Percentage-based** (`making_charges_type = 'percent'`)
```
Making Charges = (Metal Cost × Making Charges %) / 100
```

**Example:**
```
Metal Cost: ₹32,500
Making Charges: 15%
Making Charges Amount = (32,500 × 15) / 100 = ₹4,875
```

#### B. **Fixed per Gram** (`making_charges_type = 'fixed'`)
```
Making Charges = Making Charges Value × Net Weight
```

**Example:**
```
Making Charges: ₹200/gram
Net Weight: 5 grams
Making Charges Amount = 200 × 5 = ₹1,000
```

#### C. **Wastage Charges** (Additional)
If the category has wastage percentage:
```
Wastage Cost = (Metal Cost × Wastage %) / 100
Making Charges = Base Making Charges + Wastage Cost
```

**Example:**
```
Metal Cost: ₹32,500
Wastage: 5%
Wastage Cost = (32,500 × 5) / 100 = ₹1,625
Total Making Charges = ₹4,875 + ₹1,625 = ₹6,500
```

---

### 3. **Stone Cost**
```
Stone Cost = Stone Cost + Beads Cost + Pearls Cost
```

**Components:**
- `products.stone_cost` - Pre-calculated stone/diamond value
- `products.beads_cost` - Cost of beads
- `products.pearls_cost` - Cost of pearls

**Example:**
```
Stone Cost: ₹5,000
Beads Cost: ₹500
Pearls Cost: ₹1,000
Total Stone Cost = ₹6,500
```

---

### 4. **GST Calculation**
```
Sub Total = Metal Cost + Making Charges + Stone Cost
GST Amount = (Sub Total × 3%) / 100
```

**Standard GST Rate**: 3% (for jewelry)

**Example:**
```
Sub Total: ₹45,500
GST = (45,500 × 3) / 100 = ₹1,365
```

---

### 5. **Final Price**
```
Final Price = Sub Total + GST Amount
```

All amounts are rounded up using `ceil()` function.

**Example:**
```
Sub Total: ₹45,500
GST: ₹1,365
Final Price = ₹46,865
```

---

## Complete Example Calculation

**Product Details:**
- Category: Bangles
- Metal: 22K Gold
- Net Weight: 5 grams
- Gold Rate: ₹6,500/gram
- Making Charges: 15% (percentage-based)
- Wastage: 5%
- Stone Cost: ₹5,000

**Step-by-Step:**

1. **Metal Cost**
   ```
   5 grams × ₹6,500 = ₹32,500
   ```

2. **Making Charges**
   ```
   Base: (₹32,500 × 15%) = ₹4,875
   Wastage: (₹32,500 × 5%) = ₹1,625
   Total Making Charges = ₹6,500
   ```

3. **Stone Cost**
   ```
   ₹5,000 (pre-calculated)
   ```

4. **Sub Total**
   ```
   ₹32,500 + ₹6,500 + ₹5,000 = ₹44,000
   ```

5. **GST (3%)**
   ```
   (₹44,000 × 3%) = ₹1,320
   ```

6. **Final Price**
   ```
   ₹44,000 + ₹1,320 = ₹45,320
   ```

---

## Database Tables Involved

### 1. `products`
- `net_weight` - Weight in grams
- `metal_purity_id` - Links to metal purity
- `category_id` - Links to category
- `stone_cost`, `beads_cost`, `pearls_cost`

### 2. `gold_rates` (or `metals_rates`)
- `metalpurity_id` - Purity identifier
- `rate_per_gram` - Current rate
- `created_at` - Timestamp for latest rate

### 3. `categories`
- `making_charges` - VA value
- `making_charges_type` - 'percent' or 'fixed'
- `waste_percentage` - Additional wastage %

### 4. `metals_purity`
- `metalpurity_id` - Primary key
- `metal_id` - Links to metal type
- `name` - e.g., "18K Gold", "22K Gold"
- `code` - e.g., "18K", "22K"

---

## Price Display Components

When displaying product prices, the system returns:

```php
[
    'total_price' => ₹45,320,        // Final price to customer
    'metal_cost' => ₹32,500,         // Gold/Silver cost
    'making_charges' => ₹6,500,      // VA + Wastage
    'stone_cost' => ₹5,000,          // Stones/Beads/Pearls
    'gst' => ₹1,320,                 // 3% GST
    'metal_type' => '22K Gold',      // Display name
    'rate_applied' => ₹6,500,        // Rate per gram
    'breakup' => [
        'weight' => 5,
        'rate' => ₹6,500,
        'va_type' => 'percent',
        'va_value' => 15
    ]
]
```

---

## Notes

1. **Rate Updates**: Gold rates are updated daily via `AddGoldRate.php`
2. **Category-based VA**: Each category (Bangles, Rings, etc.) has its own making charges configuration
3. **Rounding**: All final amounts are rounded up using `ceil()`
4. **IST Timezone**: All timestamps use Asia/Kolkata timezone
5. **Price Caching**: Prices are calculated on-the-fly for each product view

---

## Files Involved

- **Laravel**: `app/Services/PricingService.php` - Main calculation logic
- **IMS**: `internal/AddGoldRate.php` - Rate management
- **Views**: Product listing and detail pages display calculated prices
- **Controller**: `ProductController.php` - Calls PricingService

---

*Last Updated: 2025-12-30*