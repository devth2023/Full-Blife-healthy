{{-- ต้องการภาพโปรไฟล์ผู้รีวิว --}}
<div class="review-card">
    <!-- ส่วนหัวรีวิว -->
    <div class="review-header">
        <div class="reviewer-info">
            <img src="{{ $review->user->avatar ?: asset('images/shopping/placeholders/avatar-small.png') }}" 
                 alt="{{ $review->user->name }}"
                 width="40" height="40"
                 class="reviewer-avatar">
            
            <div class="reviewer-details">
                <h5>{{ $review->user->name }}</h5>
                <div class="review-meta">
                    <livewire:shopping.reviews.star-rating 
                        :rating="$review->rating" 
                        :editable="false" />
                    <span class="review-date">
                        {{ $review->created_at->format('d/m/Y') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- เนื้อหารีวิว -->
    <div class="review-content">
        <p>{{ $review->comment }}</p>
        
        <!-- ภาพรีวิว -->
        @if($review->images->count() > 0)
            <div class="review-images">
                @foreach($review->images as $image)
                    <img src="{{ $image->url }}" 
                         alt="ภาพรีวิว" 
                         width="80" height="80"
                         class="review-image">
                @endforeach
            </div>
        @endif
    </div>
</div>