<div class="lightboxgallery-gallery clearfix">
    @foreach($galleryBanners as $item)
    <span class="lightboxgallery-gallery-item wow lightSpeedIn"  target="_blank" href="{{$item->image}}" data-title="{!!$item->title!!}" data-alt="{!!$item->title!!}" data-desc="{!!$item->caption!!}">
        <img src="{{$item->image}}" title="{!!$item->title!!}" alt="{!!$item->title!!}" class="img img-responsive" style="width:90%">
        <br>
        <br>
    </span>
    @endforeach
</div>