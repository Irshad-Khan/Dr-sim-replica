 <div class="profile-box">
    <div class="profile-cover-pic">
        <div class="profile-image-overlay"></div>
    </div>
    <div class="profile-info text-center">
        <div class="profile-img-wrap">
            <img class="inline-block mb-10" src="{{ isset($mobileModel) && $mobileModel->image ? asset('mobile_models/'.$mobileModel->image) : asset('images/default.jpg') }}" alt="brand image"/>

            <div class="fileupload btn btn-default">
                <span class="btn-text">edit</span>
                <input class="upload" type="file" id="mobile_brand_image" name="image">
            </div>

        </div>
        <div id="brand_upload_error" class="text-danger"></div>
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{ $mobileModel->name ?? null }}</h5>
    </div>

</div>
