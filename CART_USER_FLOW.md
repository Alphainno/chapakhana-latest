# Shopping Cart User Flow

## Complete Journey

### Step 1: Browse Products
```
User visits /shop
├─ Sees product grid
├─ Reviews product details (title, price, rating, description)
└─ Can search, filter, and sort products
```

### Step 2: Add to Cart
```
User clicks "Add to Cart" button
├─ Form posts product data to /cart/add
├─ CartController validates data
├─ Product stored in session
└─ User redirected to /cart
```

### Step 3: View Cart
```
User sees shopping cart page (/cart)
├─ Displays all items with:
│  ├─ Product image
│  ├─ Product details
│  ├─ Unit price
│  ├─ Quantity selector
│  └─ Remove button
├─ Right sidebar shows:
│  ├─ Subtotal
│  ├─ Shipping (Free)
│  ├─ Tax (8%)
│  └─ Total
└─ Can perform actions:
   ├─ Increment/Decrement quantity
   ├─ Remove item
   ├─ Clear entire cart
   ├─ Continue shopping → /shop
   └─ Proceed to checkout (future)
```

### Step 4: Manage Cart
```
Options available:
├─ UPDATE QUANTITY
│  └─ Click +/- buttons or enter quantity manually
│     └─ Form submits to /cart/update
│        └─ CartController updates quantity in session
│           └─ Page refreshes with updated totals
│
├─ REMOVE ITEM
│  └─ Click delete icon
│     └─ Form submits DELETE to /cart/remove
│        └─ CartController removes item from session
│           └─ Page refreshes with updated cart
│
├─ CONTINUE SHOPPING
│  └─ Click link to return to /shop
│     └─ Cart preserved in session
│
├─ CLEAR CART
│  └─ Click "Clear Cart" button
│     └─ Form submits to /cart/clear
│        └─ CartController clears entire session
│           └─ Page shows empty cart state
│
└─ CHECKOUT (Future Integration)
   └─ Click "Proceed to Checkout"
      └─ (To be connected to Stripe or payment gateway)
```

## Data Flow

### Session Storage Structure
```php
session['cart'] = [
    'product_key_1' => [
        'title' => 'Paperback Book Bundle',
        'category' => 'books',
        'format' => 'Paperback',
        'price' => 8.50,
        'rating' => 4.6,
        'image' => 'https://...',
        'desc' => 'Lightweight novel-ready sets...',
        'stock' => true,
        'quantity' => 2
    ],
    'product_key_2' => [
        'title' => 'Cookbook Kit',
        'category' => 'books',
        ...
        'quantity' => 1
    ]
]
```

### Calculation Logic
```
SUBTOTAL = SUM(price × quantity for each item)
TAX = SUBTOTAL × 0.08
TOTAL = SUBTOTAL + TAX
```

## Header Integration

### Cart Counter Badge
- Shows number of unique items in cart
- Updates dynamically
- Located in header next to "Basket" link
- Links to `/cart` route

```
Header: [Home] [Shop] [Help] [Account] [Basket (5)]
                                             ↑
                                     Click to view cart
```

## Routes Summary

| Route | Method | Controller | Action |
|-------|--------|-----------|--------|
| /cart | GET | CartController | index |
| /cart/add | POST | CartController | add |
| /cart/update | POST | CartController | update |
| /cart/remove | DELETE | CartController | remove |
| /cart/clear | POST | CartController | clear |
| /cart/count | GET | CartController | getCount |

## Form Examples

### Add to Cart Form
```html
<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="title" value="...">
    <input type="hidden" name="price" value="...">
    <!-- ... other fields ... -->
    <button type="submit">Add to Cart</button>
</form>
```

### Update Quantity Form
```html
<form action="{{ route('cart.update') }}" method="POST">
    @csrf
    <input type="hidden" name="product_key" value="...">
    <input type="number" name="quantity" value="1">
    <button type="submit">Update</button>
</form>
```

### Remove Item Form
```html
<form action="{{ route('cart.remove') }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="product_key" value="...">
    <button type="submit">Remove</button>
</form>
```

## Key Features

✅ **Session-Based Storage** - No database needed initially  
✅ **Duplicate Handling** - Auto-increments quantity if same product added  
✅ **Tax Calculation** - Automatic 8% tax on subtotal  
✅ **Free Shipping** - Always displayed  
✅ **Responsive Design** - Works on mobile and desktop  
✅ **User-Friendly** - Clear totals and item management  
✅ **Cart Persistence** - Items persist across page navigation  
✅ **Empty State** - Helpful messaging when cart is empty  
✅ **Error Handling** - Validation and error messages  
✅ **Success Feedback** - Confirmation messages for actions  

## Testing Checklist

- [ ] Add single product to cart
- [ ] Verify redirected to cart page
- [ ] Verify product appears in cart
- [ ] Add duplicate product - verify quantity increments
- [ ] Update quantity manually
- [ ] Increment/decrement quantity
- [ ] Remove item from cart
- [ ] Verify totals update correctly
- [ ] Clear entire cart
- [ ] Verify empty state displays
- [ ] Check header cart counter updates
- [ ] Test on mobile and desktop
- [ ] Test cart persistence (navigate away and back)
