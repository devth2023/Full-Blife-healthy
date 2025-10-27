{{-- ต้องการไอคอนดาวและอัพโหลดรูป --}}
<div class="review-form">
    <h4>เขียนรีวิว</h4>
    
    <!-- การให้คะแนน -->
    <div class="rating-section">
        <label>ให้คะแนน</label>
        <div class="star-rating-input">
            <livewire:shopping.reviews.star-rating 
                :editable="true" 
                :rating="$rating" />
        </div>
    </div>
    
    <!-- อัพโหลดรูปภาพ -->
    <div class="review-images">
        <label>เพิ่มรูปภาพ (ไม่เกิน 3 รูป)</label>
        <div class="image-upload-area">
            <img src="{{ asset('images/shopping/icons/reviews/camera-upload.png') }}" 
                 alt="อัพโหลดรูป" width="24" height="24">
            <span>คลิกเพื่ออัพโหลดรูปภาพ</span>
            <input type="file" 
                   wire:model="reviewImages" 
                   multiple 
                   accept="image/*"
                   class="hidden">
        </div>
        
        <!-- ตัวอย่างภาพที่อัพโหลด -->
        @if($reviewImages)
            <div class="uploaded-preview">
                @foreach($reviewImages as $image)
                    <div class="image-preview">
                        <img src="{{ $image->temporaryUrl() }}" 
                             alt="ภาพรีวิว" width="80" height="80">
                        <button wire:click="removeImage({{ $loop->index }})">
                            <img src="{{ asset('images/shopping/icons/cart/delete-item.png') }}" 
                                 alt="ลบ" width="16" height="16">
                        </button>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>