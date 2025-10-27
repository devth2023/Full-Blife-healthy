{{-- ต้องการภาพสำหรับสถานะว่างเปล่า --}}
<div class="wishlist-empty-state">
    <img src="{{ asset('images/shopping/icons/wishlist/wishlist-empty.png') }}" 
         alt="ยังไม่มีรายการโปรด"
         width="64" height="64">
    <h3>ยังไม่มีรายการโปรด</h3>
    <p>เพิ่มสินค้าที่คุณชอบลงในรายการโปรดสิ!</p>
    <a href="{{ route('shop.index') }}" class="btn btn-primary">
        ไปช้อปปิ้งเลย
    </a>
</div>