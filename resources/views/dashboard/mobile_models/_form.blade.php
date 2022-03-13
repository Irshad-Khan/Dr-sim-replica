
    <div class="form-body overflow-hide">
        <div class="form-group">
            <label class="control-label mb-10" for="name">Name <span class="text-danger">*</span></label>

            <input type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="Enter name"
                value="{{ old('name', $mobileModel->name ?? null) }}">

            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

         <div class="form-group">
            <label class="control-label mb-10" for="brand_id">Mobile Brand
                <span class="text-danger">*</span>
            </label>
            <select
                name="brand_id"
                id="brand_id"
                class="form-control">
                <option value="">Select Mobile Brand</option>
                @foreach ($mobileBrands as $mobileBrand)
                    <option value="{{ $mobileBrand->id }}"
                        {{ isset($mobileModel) && $mobileModel->brand_id === $mobileBrand->id ? 'selected' : ''}}>
                        {{ $mobileBrand->title }}</option>
                @endforeach
            </select>
            @error('brand_id')
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
                <option value="1" {{ isset($mobileModel) && $mobileModel->status === App\Models\User::ACTIVE ? 'selected' : ''}}>Active</option>
                <option value="0" {{ isset($mobileModel) && $mobileModel->status === App\Models\User::INACTIVE ? 'selected' : ''}}>Inactive</option>
            </select>
            @error('status')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-actions mt-10">
        <button type="submit" class="btn btn-success btn-block mr-10 mb-30">
            @if(isset($mobileModel))
                Update
            @else
                Add
            @endif
        </button>
    </div>

