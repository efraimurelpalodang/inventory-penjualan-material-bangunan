<div class="mb-3">
    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
    
    <select name="{{ $name }}" id="{{ $id ?? $name }}" 
            class="form-select @error($name) is-invalid @enderror"
            {{ $required ? 'required' : '' }}>
        {{ $slot }}
    </select>

    @error($name)
        <div class="text-danger small">
            {{ $message }}
        </div>
    @enderror
</div>