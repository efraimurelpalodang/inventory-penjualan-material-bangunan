<div class="mb-3">
    <label class="form-label">{{ $label }} @if ($required)
            <span class="text-danger">*</span>
        @endif
    </label>

    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $id ?? $name }}"
        class="form-control @error($name) is-invalid @enderror" value="{{ old($name) }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $required ? 'required' : '' }} autocomplete="{{ $autoComplate }}">

    @error($name)
        <div class="text-danger small">
            {{ $message }}
        </div>
    @enderror
</div>
