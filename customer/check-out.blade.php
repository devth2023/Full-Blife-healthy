{{-- ต้องการไอคอนสำหรับแต่ละขั้นตอน --}}
<div class="checkout-steps">
    <div class="step {{ $currentStep >= 1 ? 'active' : '' }} {{ $currentStep > 1 ? 'completed' : '' }}">
        <div class="step-icon">
            @if($currentStep > 1)
                <img src="{{ asset('images/shopping/icons/checkout/step-completed.png') }}" 
                     alt="เสร็จสิ้น" width="24" height="24">
            @else
                <img src="{{ asset('images/shopping/icons/checkout/step-address.png') }}" 
                     alt="ที่อยู่" width="24" height="24">
            @endif
        </div>
        <span class="step-label">ที่อยู่</span>
    </div>
    
    <div class="step {{ $currentStep >= 2 ? 'active' : '' }} {{ $currentStep > 2 ? 'completed' : '' }}">
        <div class="step-icon">
            @if($currentStep > 2)
                <img src="{{ asset('images/shopping/icons/checkout/step-completed.png') }}" 
                     alt="เสร็จสิ้น" width="24" height="24">
            @else
                <img src="{{ asset('images/shopping/icons/checkout/step-payment.png') }}" 
                     alt="ชำระเงิน" width="24" height="24">
            @endif
        </div>
        <span class="step-label">ชำระเงิน</span>
    </div>
    
    <div class="step {{ $currentStep >= 3 ? 'active' : '' }}">
        <div class="step-icon">
            <img src="{{ asset('images/shopping/icons/checkout/step-confirm.png') }}" 
                 alt="ยืนยัน" width="24" height="24">
        </div>
        <span class="step-label">ยืนยัน</span>
    </div>
</div>