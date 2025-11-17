<tr>
    @foreach ($rowData as $key => $data)
        <td class="border-bottom-0">

            {{-- Kolom priority & status (badge) --}}
            @if ($key === 'priority' || $key === 'status')
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-{{ $data['color'] }} rounded-3 fw-semibold">
                        {{ $data['value'] }}
                    </span>
                </div>

                {{-- Kolom action --}}
            @elseif ($key === 'action')
                <div class="d-flex gap-2">

                    @foreach ($data as $btn)
                        <a href="{{ $btn['url'] ?? '#' }}" class="btn btn-sm btn-{{ $btn['color'] ?? 'primary' }}">
                            {{ $btn['label'] }}
                        </a>
                    @endforeach

                </div>

                {{-- Kolom biasa --}}
            @else
                <h6 class="fw-semibold mb-0 {{ $key === 'subtitle' ? 'text-muted' : '' }}">
                    {{ $data }}
                </h6>
            @endif

        </td>
    @endforeach
</tr>
