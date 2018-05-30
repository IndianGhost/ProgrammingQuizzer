@extends('layouts.app')

@section('style')
    <style type="text/css">
        .question{
        	font-size: 1.5em;
        	font-weight: bold;
        }
        .choice{
        	font-size: 1.3em;
        }
        .no-choice{
        	color: #b3b3b3;
        	font-size: 1.3em;
        	font-style: italic;
        }
        .question-choice-block{
        	padding: 1%;
        	margin: 3% 0;
        }
    </style>
@endsection

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

                        @if( isset($quiz) AND isset($questions) )
							<ul>
								<dl class="lead">{{ $quiz->language }} Quiz Questions:</dl>
							@foreach($questions as $question)
								<li class="question-choice-block">
									<span class="question">{{$question->content}}</span>
									<ul>
										@if( $question->choices->isNotEmpty() )
											@foreach( $question->choices as $choice )
												<li class="choice">{{ $choice->content }}</li>
											@endforeach
										@else
											<li class="no-choice">No choices added yet !</li>
										@endif
									</ul>
								</li>
							@endforeach
							</ul>
						@else
							<p>
								Sorry, there's nothing to show here !
							</p>
						@endif
						<center>
							<a href="{{ route('admin') }}" class="btn btn-primary">
								Return to the dashboard
							</a>
						</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
//        code
    </script>
@endsection