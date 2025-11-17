<!-- resources/views/components/form/form.blade.php -->
<form 
    {{ $attributes->merge(['class' => 'needs-validation']) }}
    action="{{ $action ?? '#' }}" 
    method="{{ $method ?? 'POST' }}" 
    novalidate
>
    @csrf
    @if (in_array(strtoupper($method ?? 'POST'), ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    <div class="row g-3">
        {{ $slot }}
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary">
            {{ $buttonText ?? 'Simpan' }}
        </button>
    </div>
</form>