@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('通知') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ログインしました！') }}

                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

<!-- <script>
    setTimeout(function(){
        window.location.href = '/products';
    }, 1000);
</script> -->
