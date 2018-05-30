@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Hi {{ Auth::user()->name }} !</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpatsuscipit lobortis nisl ut aliquip ex ea
                    </p>
                    <a href="{{ route('readQuiz') }}" title="click to be redirected !">
                        Go to Programming languages Quizes !
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
