{{-- ต้องการภาพสถานะว่างเปล่า --}}
@if($reviews->count() === 0)
    <div class="reviews-empty">
        <img src="{{ asset('images/shopping/icons/reviews/review-empty.png') }}" 
             alt="ยังไม่มีรีวิว"
             width="64" height="64">
        <h4>ยังไม่มีรีวิว</h4>
        <p>เป็นคนแรกที่รีวิวสินค้านี้สิ!</p>
    </div>
@else
    <div class="reviews-list">
        @foreach($reviews as $review)
            <x-shopping.reviews.review-card :review="$review" />
        @endforeach
    </div>
@endif