 <div class="profile-box">
    <div class="profile-cover-pic">
        <div class="profile-image-overlay"></div>
    </div>
    <div class="profile-info text-center">
        <div class="profile-img-wrap">
            <img class="inline-block mb-10" src="{{ isset($mobileBrand) && $mobileBrand->image ? asset('images/'.$mobileBrand->image) : asset('images/default.jpg') }}" alt="brand image"/>
            <form id="brand_image_form">
                @csrf
                @if(isset($mobileBrand))
                <input type="hidden" name="id" value="{{ $mobileBrand->id }}">
                @endif
                <div class="fileupload btn btn-default">
                    <span class="btn-text">edit</span>
                    <input class="upload" type="file" id="mobile_brand_image" name="image">
                </div>
            </form>
        </div>
        <div id="brand_upload_error" class="text-danger"></div>
        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{ $mobileBrand->title ?? null }}</h5>
    </div>

</div>
