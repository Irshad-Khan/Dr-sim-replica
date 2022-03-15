 <form action="{{ isset($brandFaq) ? route('brand-faqs.update', ['brand_faq' => $brandFaq->id]) : route('brand-faqs.store') }}"
      method="POST">
    @csrf
    @if(isset($brandFaq))
        @method('put')
    @endif
    <div class="form-body overflow-hide">
        <div class="form-group">
            <label class="control-label mb-10" for="title">Question <span class="text-danger">*</span></label>

            <input type="text"
                class="form-control"
                id="title"
                name="title"
                placeholder="Enter question"
                value="{{ old('title', $brandFaq->title ?? null) }}">

            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="control-label mb-10" for="mobile_brand_id">Mobile Brand
                <span class="text-danger">*</span>
            </label>
            <select
                name="mobile_brand_id"
                id="mobile_brand_id"
                class="form-control">
                <option value="">Select Mobile Brand</option>
                @foreach ($mobileBrands as $brand)
                    <option value="{{ $brand->id }}"
                        {{ isset($brandFaq) && $brandFaq->mobile_brand_id === $brand->id ? 'selected' : ''}}>
                        {{ $brand->title }}</option>
                @endforeach
            </select>
            @error('mobile_brand_id')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="control-label mb-10" for="answer">answer <span class="text-danger">*</span></label>

            <textarea type="text"
                class="form-control"
                id="answer"
                rows="5"
                name="answer"
                placeholder="Enter answer">{{ old('answer', $brandFaq->answer ?? null) }}</textarea>

            @error('answer')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="control-label mb-10" for="status">Status
                <span class="text-danger">*</span>
            </label>
            <select
                name="status"
                id="status"
                class="form-control">
                <option value="">Select Status</option>
                <option value="1" {{ isset($brandFaq) && $brandFaq->status === App\Models\User::ACTIVE ? 'selected' : ''}}>Active</option>
                <option value="0" {{ isset($brandFaq) && $brandFaq->status === App\Models\User::INACTIVE ? 'selected' : ''}}>Inactive</option>
            </select>
            @error('status')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <div class="form-actions mt-10">
        <button type="submit" class="btn btn-success btn-block mr-10 mb-30">
            @if(isset($brandFaq))
                Update
            @else
                Add
            @endif
        </button>
    </div>
</form>
