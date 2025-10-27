{{-- ต้องการไอคอนหัวใจสองสถานะ --}}
<button class="wishlist-toggle" 
        wire:click="toggleWishlist({{ $product->id }})"
        title="{{ $inWishlist ? 'ลบออกจากรายการโปรด' : 'เพิ่มในรายการโปรด' }}">
    
    @if($inWishlist)
        <img src="{{ asset('images/shopping/icons/wishlist/heart-filled.png') }}" 
             alt="อยู่ในรายการโปรด"
             width="24" height="24"
             class="wishlist-icon filled">
    @else
        <img src="{{ asset('images/shopping/icons/wishlist/heart-empty.png') }}" 
             alt="เพิ่มในรายการโปรด"
             width="24" height="24"
             class="wishlist-icon empty">
    @endif
    
    <span class="sr-only">
        {{ $inWishlist ? 'ลบออกจากรายการโปรด' : 'เพิ่มในรายการโปรด' }}
    </span>
</button>