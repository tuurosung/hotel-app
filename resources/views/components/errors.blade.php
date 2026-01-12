@if ($errors->any())
<div class="alert customize-alert alert-dismissible border-warning text-warning fade show remove-close-icon"
    role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <div class="d-flex align-items-center  me-3 me-md-0">
        <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
