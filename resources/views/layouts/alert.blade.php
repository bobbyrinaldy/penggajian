@if(Session::has($key))
    @php
        $materialFlash = Session::get($key);
    @endphp

    <div class="col-sm-12">
        <div class="alert alert-{{ $materialFlash['type'] }} alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">{{ ucword($materialFlash['type']) }}</span> $materialFlash['message']
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

@endif

