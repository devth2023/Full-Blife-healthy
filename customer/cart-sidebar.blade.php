{{-- ต้องการภาพสำหรับตะกร้าว่าง --}}
<div class="cart-sidebar">
    <div class="cart-header">
        <h3>
            <img src="{{ asset('images/shopping/icons/cart/cart-icon.png') }}" 
                 alt="ตะกร้าสินค้า" width="20" height="20">
            ตะกร้าสินค้า ({{ $cartCount }})
        </h3>
    </div>
    
    @if($cartCount === 0)
        <div class="cart-empty">
            <img src="{{ asset('images/shopping/icons/cart/cart-empty.png') }}" 
                 alt="ตะกร้าว่าง"
                 width="80" height="80">
            <p>ตะกร้าสินค้าของคุณว่างเปล่า</p>
            <a href="{{ route('shop.index') }}" class="btn btn-primary">
                เริ่มช้อปปิ้ง
            </a>
        </div>
    @else
        <div class="cart-content">
            <livewire:shopping.cart-items />
            <livewire:shopping.cart-summary />
        </div>
    @endif
</div>