@extends('default')

@section('title')
    Main Page
@endsection

@section('before start')
    <center>
        <button type="button" class="btn btn-outline-info--white btn--center" data-toggle="snackbar" data-style="toast" data-content="You can drap & drag list items to customize the order of your quizz, Hard luck !">
            click here before getting started !
        </button>
    </center>
@endsection

@section('content')
    <ul id="sortable">

        @foreach($quizzes as $array)
            <li>
                <div class="media">
                    <div class="media-left align-self-center">
                        <img class="rounded-circle" src="{{$array['logo']}}"/>
                    </div>
                    <div class="media-body">
                        <h4>{{$array['language']}} Quizz</h4>
                        <p>
                            {{$array['description']}}
                        </p>
                    </div>
                    <div class="media-right align-self-center">
                        <a href="{{route('quizz_route', ['id' => 1])}}" class="btn btn-default">Start Now</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

@section('javascript')
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
@endsection