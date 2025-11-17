<div class="d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">{{ $title }}</h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            @foreach ($headers as $header)
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $header }}</h6>
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        {{ $slot }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>