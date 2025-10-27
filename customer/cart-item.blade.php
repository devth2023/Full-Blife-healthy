{{-- ต้องการภาพสินค้าและไอคอนควบคุม --}}
@foreach($cartItems as $item)
<div class="cart-item">
    <!-- ภาพสินค้า -->
    <div class="item-image">
        <img src="{{ $item->product->thumbnail ?: asset('images/shopping/placeholders/product-small.jpg') }}" 
             alt="{{ $item->product->name }}"
             width="80" height="80">
    </div>
    
    <div class="item-details">
        <h4>{{ $item->product->name }}</h4>
        <p class="item-price">฿{{ number_format($item->price) }}</p>
        
        <!-- ควบคุมจำนวน -->
        <div class="quantity-controls">
            <button wire:click="decreaseQuantity({{ $item->id }})"
                    {{ $item->quantity <= 1 ? 'disabled' : '' }}>
                <img src="{{ asset('images/shopping/icons/cart/quantity-decrease.png') }}" 
                     alt="ลดจำนวน" width="16" height="16">
            </button>
            
            <span class="quantity">{{ $item->quantity }}</span>
            
            <button wire:click="increaseQuantity({{ $item->id }})">
                <img src="{{ asset('images/shopping/icons/cart/quantity-increase.png') }}" 
                     alt="เพิ่มจำนวน" width="16" height="16">
            </button>
        </div>
    </div>
    
    <!-- ปุ่มลบ -->
    <button class="remove-item" wire:click="removeFromCart({{ $item->id }})">
        <img src="{{ asset('images/shopping/icons/cart/delete-item.png') }}" 
             alt="ลบสินค้า" width="20" height="20">
    </button>
</div>
@endforeach