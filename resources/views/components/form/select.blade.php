<div class="mb-3">
    <label for="{{ $id ?? $name }}" class="form-label font-weight-600">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $id ?? $name }}" class="form-select" {{ $required ? 'required' : '' }}>
        <option value="">Pilih {{ $label }}</option>
        {{ $slot }} <!-- Options go here via slot -->
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
