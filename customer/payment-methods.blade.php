{{-- ต้องการไอคอนวิธีการชำระเงินแต่ละแบบ --}}
<div class="payment-methods">
    <h4>เลือกวิธีการชำระเงิน</h4>
    
    <div class="methods-grid">
        <!-- บัตรเครดิต -->
        <label class="payment-method">
            <input type="radio" name="payment_method" value="credit_card" 
                   wire:model="selectedMethod">
            <div class="method-content">
                <img src="{{ asset('images/shopping/icons/payment/credit-card.png') }}" 
                     alt="บัตรเครดิต" width="32" height="32">
                <span>บัตรเครดิต/เดบิต</span>
            </div>
        </label>
        
        <!-- โอนเงิน -->
        <label class="payment-method">
            <input type="radio" name="payment_method" value="bank_transfer" 
                   wire:model="selectedMethod">
            <div class="method-content">
                <img src="{{ asset('images/shopping/icons/payment/bank-transfer.png') }}" 
                     alt="โอนเงิน" width="32" height="32">
                <span>โอนเงิน</span>
            </div>
        </label>
        
        <!-- พร้อมเพย์ -->
        <label class="payment-method">
            <input type="radio" name="payment_method" value="promptpay" 
                   wire:model="selectedMethod">
            <div class="method-content">
                <img src="{{ asset('images/shopping/icons/payment/promptpay.png') }}" 
                     alt="พร้อมเพย์" width="32" height="32">
                <span>พร้อมเพย์</span>
            </div>
        </label>
        
        <!-- เก็บเงินปลายทาง -->
        <label class="payment-method">
            <input type="radio" name="payment_method" value="cod" 
                   wire:model="selectedMethod">
            <div class="method-content">
                <img src="{{ asset('images/shopping/icons/payment/cod.png') }}" 
                     alt="เก็บเงินปลายทาง" width="32" height="32">
                <span>เก็บเงินปลายทาง</span>
            </div>
        </label>
    </div>
    
    <!-- ข้อความความปลอดภัย -->
    <div class="payment-security">
        <img src="{{ asset('images/shopping/icons/checkout/secure-payment.png') }}" 
             alt="ปลอดภัย" width="20" height="20">
        <span>การชำระเงินของคุณปลอดภัย 100%</span>
    </div>
</div>