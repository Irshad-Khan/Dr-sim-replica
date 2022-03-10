 <form action="{{ isset($customer) ? route('customers.update', ['customer' => $customer->id]) : route('customers.store') }}"
      method="POST">
    @csrf
    @if(isset($customer))
        @method('put')
    @endif
    <div class="form-body overflow-hide">
        <div class="form-group">
            <label class="control-label mb-10" for="first_name">First Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <input type="text"
                    class="form-control"
                    id="first_name"
                    name="first_name"
                    placeholder="willard"
                    value="{{ old('first_name', $customer->first_name ?? null) }}">
            </div>
            @error('first_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="last_name">Last Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <input type="text"
                    class="form-control"
                    id="last_name"
                    name="last_name"
                    placeholder="bryant"
                    value="{{ old('last_name', $customer->last_name ?? null) }}">
            </div>
            @error('last_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="email">Email address <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                <input type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="xyz@gmail.com"
                    value="{{ old('email', $customer->email ?? null) }}">
            </div>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="password">Password
                @if(!isset($customer))<span class="text-danger">*</span>@endif
            </label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-lock"></i></div>
                <input type="password"
                        class="form-control"
                        id="password"
                        placeholder="Enter password"
                        name="password">
            </div>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label mb-10" for="post_code">Post Code
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                <input type="post_code"
                    class="form-control"
                    id="post_code"
                    name="post_code"
                    placeholder="Enter Status"
                    value="{{ old('post_code', $customer->post_code ?? null) }}">
                </div>
                @error('post_code')
                    <div class="error">{{ $message }}</div>
                @enderror
        </div>

         <div class="form-group">
            <label class="control-label mb-10" for="phone">Phone
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-phone"></i></div>
                <input type="phone"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Enter Phone Number"
                    value="{{ old('phone', $customer->phone ?? null) }}">
                </div>
                @error('phone')
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
                        {{ isset($customer) && $customer->country_id === $country->id ? 'selected' : ''}}>
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
                <option value="1" {{ isset($customer) && $customer->status === App\Models\User::ACTIVE ? 'selected' : ''}}>Active</option>
                <option value="0" {{ isset($customer) && $customer->status === App\Models\User::INACTIVE ? 'selected' : ''}}>Inactive</option>
            </select>
            @error('status')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="control-label mb-10" for="address">Address
                <span class="text-danger">*</span>
            </label>
            <textarea
                    class="form-control"
                    name="address"
                    id="address"
                    cols="30"
                    rows="5"
                    placeholder="Address">{{ old('address', $customer->address ?? null) }}</textarea>
            @error('address')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-actions mt-10">
        <button type="submit" class="btn btn-success btn-block mr-10 mb-30">
            @if(isset($customer))
                Update
            @else
                Add
            @endif
        </button>
    </div>
</form>
