<form
    {{ $attributes->merge(['class' => 'needs-validation']) }}
    action="{{ $action ?? '#' }}"
    method="POST"            
    novalidate
>
    @csrf
    @if ($method && in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    <div class="row g-3">
        {{ $slot }}
    </div>

    <div class="mt-4 d-flex gap-2">
        <a href="{{ $back }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">
            {{ $buttonText ?? 'Simpan' }}
        </button>
    </div>
</form>