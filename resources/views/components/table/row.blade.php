<tr>
    @foreach ($rowData as $key => $data)
        <td class="border-bottom-0">

            @if ($key === 'priority' || $key === 'status')
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-{{ $data['color'] }} rounded-3 fw-semibold">
                        {{ $data['value'] }}
                    </span>
                </div>
            @elseif ($key === 'action')
                <div class="d-flex gap-2">
                    @foreach ($data as $btn)
                        @if (isset($btn['method']) && in_array($btn['method'], ['POST', 'PUT', 'DELETE', 'PATCH']))
                            <form action="{{ $btn['url'] }}" method="POST" style="display:inline">
                                @csrf
                                @if ($btn['method'] !== 'POST')
                                    @method($btn['method'])
                                @endif
                                <button type="submit" class="btn btn-sm btn-{{ $btn['color'] ?? 'primary' }}"
                                    onclick="{{ $btn['confirm'] ?? 'return true;' }}">
                                    {{ $btn['label'] }}
                                </button>
                            </form>
                        @else
                            <a href="{{ $btn['url'] ?? '#' }}" class="btn btn-sm btn-{{ $btn['color'] ?? 'primary' }}">
                                {{ $btn['label'] }}
                            </a>
                        @endif
                    @endforeach
                </div>
            @else
                <h6 class="fw-semibold mb-0">
                    {{ $data }}
                </h6>
            @endif

        </td>
    @endforeach
</tr>
