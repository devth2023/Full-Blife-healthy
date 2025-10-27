{{-- ต้องการไอคอนตะกร้าสินค้า --}}
<div class="cart-icon-container">
    <button class="cart-toggle" onclick="toggleCartSidebar()">
        <img src="{{ asset('images/shopping/icons/cart/cart-icon.png') }}" 
             alt="ตะกร้าสินค้า"
             width="24" height="24"
             class="cart-icon">
        
        @if($cartCount > 0)
            <span class="cart-badge">
                {{ $cartCount }}
            </span>
        @endif
    </button>
</div>