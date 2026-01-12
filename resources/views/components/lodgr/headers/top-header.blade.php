<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24 card card-body flex-row">
    <h6 class="fw-500 cal-sans mb-0">{{ $title ?? 'Page Title' }}</h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium me-3">
            <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
            </a>
        </li>
        {{ $slot }}
    </ul>
</div>
