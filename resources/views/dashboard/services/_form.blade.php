
    <div class="form-body overflow-hide">
        <div class="form-group">
            <label class="control-label mb-10" for="title">Title <span class="text-danger">*</span></label>

            <input type="text"
                class="form-control"
                id="title"
                name="title"
                placeholder="Enter title"
                value="{{ old('title', $service->title ?? null) }}">

            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="control-label mb-10" for="service_type">Service By
                <span class="text-danger">*</span>
            </label>
            <select
                id="service_type"
                name="service_type"
                class="form-control">
                <option value="">Select Option</option>
                <option value="brand"
                {{ isset($service) && $service->service_type === 'brand' ? 'selected' :
                old('service_type') === 'brand' ? 'selected' : ''}}>Mobile Brand</option>
                <option value="model" {{ isset($service) && $service->service_type === 'model' ? 'selected' :
                old('service_type') === 'model' ? 'selected' : ''}}>Mobile Model</option>
            </select>
             @error('service_type')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

         <div id="mobile_brand_container" style="display: {{ old('service_type') === 'brand' ? 'block' :
        isset($service) && $service->service_type === 'brand' ? 'block' : 'none' }}">
             <div class="form-group">
                <label class="control-label mb-10" for="mobile_brand_id">Mobile Brand
                    <span class="text-danger">*</span>
                </label>
                <select
                    name="mobile_brand_id"
                    id="mobile_brand_id"
                    class="form-control">
                    <option value="">Select Mobile Brand</option>
                    @foreach ($mobileBrands as $mobileBrand)
                        <option value="{{ $mobileBrand->id }}"
                            {{ isset($service) && $service->mobile_brand_id === $mobileBrand->id ? 'selected' : ''}}>
                            {{ $mobileBrand->title }}</option>
                    @endforeach
                </select>
                @error('mobile_brand_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="control-label mb-10" for="price_by_brand">Price By Brand <span class="text-danger">*</span></label>

                <input type="text"
                    class="form-control"
                    id="price_by_brand"
                    name="price_by_brand"
                    placeholder="Enter Price By Brand"
                    value="{{ old('price_by_brand', $service->price_by_brand ?? null) }}">

                @error('price_by_brand')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
         </div>

        <div id="mobile_model_container" style="display: {{ old('service_type') === 'model' ? 'block' :
        isset($service) && $service->service_type === 'model' ? 'block' : 'none' }}">
             <div class="form-group">
                <label class="control-label mb-10" for="mobile_model_id">Mobile Model
                    <span class="text-danger">*</span>
                </label>
                <select
                    name="mobile_model_id"
                    id="mobile_model_id"
                    class="form-control">
                    <option value="">Select Mobile Model</option>
                    @foreach ($mobileModels as $mobileModel)
                        <option value="{{ $mobileModel->id }}"
                            {{ isset($service) && $service->mobile_model_id === $mobileModel->id ? 'selected' : ''}}>
                            {{ $mobileModel->name }}</option>
                    @endforeach
                </select>
                @error('mobile_model_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="control-label mb-10" for="price_by_model">Price By Brand <span class="text-danger">*</span></label>

                <input type="text"
                    class="form-control"
                    id="price_by_model"
                    name="price_by_model"
                    placeholder="Enter Price By Model"
                    value="{{ old('price_by_model', $service->price_by_model ?? null) }}">

                @error('price_by_model')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
                <label class="control-label mb-10" for="average_time">Average Time <span class="text-danger">*</span></label>

                <input type="text"
                    class="form-control"
                    id="average_time"
                    name="average_time"
                    placeholder="5 hours"
                    value="{{ old('average_time', $service->average_time ?? null) }}">

                @error('average_time')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="control-label mb-10" for="delivery_time">Delivery Time <span class="text-danger">*</span></label>

                <input type="text"
                    class="form-control"
                    id="delivery_time"
                    name="delivery_time"
                    placeholder="5 hours"
                    value="{{ old('delivery_time', $service->delivery_time ?? null) }}">

                @error('delivery_time')
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
                <option value="1" {{ isset($service) && $service->status === App\Models\User::ACTIVE ? 'selected' : ''}}>Active</option>
                <option value="0" {{ isset($service) && $service->status === App\Models\User::INACTIVE ? 'selected' : ''}}>Inactive</option>
            </select>
            @error('status')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
                <label class="control-label mb-10" for="feature">Feature <span class="text-danger">*</span></label>

                <textarea type="text"
                    class="form-control"
                    id="editor-full"
                    rows="4"
                    cols="4"
                    name="feature"
                    placeholder="Enter Features seprate line">{{ old('feature', $service->feature ?? null) }}</textarea>

                @error('feature')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
    </div>
    <div class="form-actions mt-10">
        <button type="submit" class="btn btn-success btn-block mr-10 mb-30">
            @if(isset($service))
                Update
            @else
                Add
            @endif
        </button>
    </div>

