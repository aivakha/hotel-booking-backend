<div class="col-md-6">
    <div class="card overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card"
             style="background-image:url({{ asset('assets/admin/img/icons/spot-illustrations/corner-1.png') }});"></div>

        <div class="card-body position-relative">
            <h6>{{ __('Відстані') }}</h6>


            <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                 data-countup='{"endValue":{{$distances->count()}}}'>
                0
            </div>
            <a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('distances.index') }}">
                {{ __('Всі відстані') }}
                <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
            </a>
        </div>
    </div>
</div>

