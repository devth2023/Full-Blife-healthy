{{-- ต้องการภาพสินค้าและไอคอนหัวใจ --}}
<div class="wishlist-card">
    <!-- ภาพสินค้า -->
    <div class="product-image">
        <img src="{{ $product->thumbnail ?: asset('images/shopping/placeholders/product-medium.jpg') }}" 
             alt="{{ $product->name }}"
             width="120" height="120">
    </div>
    
    <!-- ปุ่มลบออกจากรายการโปรด -->
    <button class="remove-wishlist" wire:click="removeFromWishlist({{ $product->id }})">
        <img src="{{ asset('images/shopping/icons/wishlist/heart-filled.png') }}" 
             alt="ลบออกจากรายการโปรด"
             width="20" height="20">
    </button>
    
    <!-- สถานะสินค้า -->
    @if($product->out_of_stock)
        <div class="out-of-stock-badge">
            <img src="{{ asset('images/icons/system/warning.png') }}" 
                 alt="หมดสต็อก" width="16" height="16">
            หมดสต็อก
        </div>
    @endif
</div>