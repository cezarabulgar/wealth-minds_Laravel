@extends('layouts.home')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @section('heading','Welcome to Wealth Minds')
                    
                    @section('paragraph', 'Here knowledge empowers your financial future!')
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
