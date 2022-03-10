 <form action="{{ isset($networkProvider) ? route('network-providers.update', ['network_provider' => $networkProvider->id]) : route('network-providers.store') }}"
      method="POST">
    @csrf
    @if(isset($networkProvider))
        @method('put')
    @endif
    <div class="form-body overflow-hide">
        <div class="form-group">
            <label class="control-label mb-10" for="title">Title <span class="text-danger">*</span></label>

            <input type="text"
                class="form-control"
                id="title"
                name="title"
                placeholder="Enter Title"
                value="{{ old('title', $networkProvider->title ?? null) }}">

            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="control-label mb-10" for="country_id">Country
                <span class="text-danger">*</span>
            </label>
            <select
                name="country_id"
                id="country_id"
                class="form-control">
                <option value="">Select Country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}"
                        {{ isset($networkProvider) && $networkProvider->country_id === $country->id ? 'selected' : ''}}>
                        {{ $country->name }}</option>
                @endforeach
            </select>
            @error('country_id')
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
                <option value="1" {{ isset($networkProvider) && $networkProvider->status === App\Models\User::ACTIVE ? 'selected' : ''}}>Active</option>
                <option value="0" {{ isset($networkProvider) && $networkProvider->status === App\Models\User::INACTIVE ? 'selected' : ''}}>Inactive</option>
            </select>
            @error('status')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <div class="form-actions mt-10">
        <button type="submit" class="btn btn-success btn-block mr-10 mb-30">
            @if(isset($networkProvider))
                Update
            @else
                Add
            @endif
        </button>
    </div>
</form>
