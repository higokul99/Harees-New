# Fix Diamond Product Filtering

## Problem
The `ProductController::index` method filters products based on the `type` query parameter (`22k`, `18k`, `silver`). It is missing a check for `diamond`. Consequently, passing `type=diamond` results in no filtering, displaying all products in the selected category (e.g., both 18K and 22K necklaces).

## Proposed Changes
### `app/Http/Controllers/ProductController.php`
- Add an `elseif` condition to check if `$type` contains 'diamond'.
- Inside this condition, apply a filter to the `metalPurity` relationship to match '18K Gold & Diamonds' (or 'Diamonds').

```php
            } elseif (str_contains($type, 'diamond')) {
                $query->whereHas('metalPurity', function ($q) {
                    $q->where('name', 'LIKE', '%Diamonds%');
                });
            }
```

## Verification Plan
### Manual Verification
1.  **URL Test**: Access `http://127.0.0.1:8000/product?type=diamond&name=necklaces`.
2.  **Expected Result**: Only products with metal purity "18K Gold & Diamonds" should appear. 22K Gold products should NOT appear.
3.  **Cross-Check**: Access `http://127.0.0.1:8000/product?type=22k&name=necklaces` and ensure 22K products still load correctly.
