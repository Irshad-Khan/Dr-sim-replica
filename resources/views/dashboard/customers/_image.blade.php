 <div class="profile-box">
    <div class="profile-cover-pic">
        <div class="fileupload btn btn-default">
            <span class="btn-text">edit</span>
            <input class="upload" type="file">
        </div>
        <div class="profile-image-overlay"></div>
    </div>
    <div class="profile-info text-center">
        <div class="profile-img-wrap">
            <img class="inline-block mb-10" src="{{ asset('dist/img/mock1.jpg') }}" alt="user"/>
            <div class="fileupload btn btn-default">
                <span class="btn-text">edit</span>
                <input class="upload" type="file">
            </div>
        </div>
        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{ $customer->full_name ?? null }}</h5>
    </div>

</div>
