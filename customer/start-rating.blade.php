{{-- ต้องการไอคอนดาวสามสถานะ --}}
<div class="star-rating {{ $editable ? 'editable' : 'readonly' }}">
    @for($i = 1; $i <= 5; $i++)
        @if($editable)
            <button type="button" 
                    wire:click="setRating({{ $i }})"
                    class="star-button"
                    onmouseover="hoverRating({{ $i }})"
                    onmouseout="resetHover()">
                @if($i <= $hoverRating)
                    <img src="{{ asset('images/shopping/icons/reviews/star-full.png') }}" 
                         alt="ดาวเต็ม" width="20" height="20">
                @elseif($i <= $currentRating)
                    <img src="{{ asset('images/shopping/icons/reviews/star-full.png') }}" 
                         alt="ดาวเต็ม" width="20" height="20">
                @else
                    <img src="{{ asset('images/shopping/icons/reviews/star-empty.png') }}" 
                         alt="ดาวว่าง" width="20" height="20">
                @endif
            </button>
        @else
            <span class="star-static">
                @if($i <= $rating)
                    <img src="{{ asset('images/shopping/icons/reviews/star-full.png') }}" 
                         alt="ดาวเต็ม" width="20" height="20">
                @else
                    <img src="{{ asset('images/shopping/icons/reviews/star-empty.png') }}" 
                         alt="ดาวว่าง" width="20" height="20">
                @endif
            </span>
        @endif
    @endfor
</div>