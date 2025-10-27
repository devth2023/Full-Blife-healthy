{{-- ต้องการไอคอนคูปอง --}}
<div class="coupon-form">
    <label class="coupon-label">
        <img src="{{ asset('images/shopping/icons/cart/coupon-icon.png') }}" 
             alt="โค้ดส่วนลด" width="20" height="20">
        มีโค้ดส่วนลด?
    </label>
    
    <div class="coupon-input-group">
        <input type="text" 
               wire:model="couponCode" 
               placeholder="กรอกโค้ดส่วนลด..."
               class="coupon-input">
        <button wire:click="applyCoupon" 
                class="btn btn-secondary"
                {{ !$couponCode ? 'disabled' : '' }}>
            ใช้โค้ด
        </button>
    </div>
    
    @if($discountAmount > 0)
        <div class="coupon-success">
            <img src="{{ asset('images/icons/system/success.png') }}" 
                 alt="สำเร็จ" width="16" height="16">
            ใช้โค้ดส่วนลดสำเร็จ! ลดราคา ฿{{ number_format($discountAmount) }}
        </div>
    @endif
    
    @error('couponError')
        <div class="coupon-error">
            <img src="{{ asset('images/icons/system/error.png') }}" 
                 alt="ข้อผิดพลาด" width="16" height="16">
            {{ $message }}
        </div>
    @enderror
</div>