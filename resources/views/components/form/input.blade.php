<div class="mb-3">
    <label for="{{ $id ?? $name }}" class="form-label font-weight-600">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control" value="{{ $value ?? old($name) }}" placeholder="{{ $placeholder ?? '' }}" {{ $required ? 'required' : '' }} autocomplete="{{ $autoComplate}}">
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>