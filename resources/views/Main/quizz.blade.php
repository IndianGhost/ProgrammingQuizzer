@extends('default')

@section('title')
    {{ strtoupper($quizz['language']) }} Quizz
@endsection

@section('content')
    <div class="bd-callout bd-callout-info">
        <h4 id="dealing-with-specificity">
            {{ strtoupper($quizz['language']) }} Quizz
        </h4>

        <p>
            {{ $quizz['description'] }}
        </p>
    </div>

    <div class="row">
        <!-- <form method="#" action="#"> -->
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach($questions as $i => $question)
                    <a
                        class="
                        list-group-item
                         list-group-item-action
                         @if($i==0)
                          active
                          @endif
                          "
                        id="list-question-{{$question['id']}}-list"
                        data-toggle="list"
                        href="#list-question-{{$question['id']}}"
                        role="tab"
                        aria-controls="question-{{$question['id']}}"
                    >Question {{$i+1}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach($questions as $i=>$question)
                    <div
                            class="tab-pane fade show
                            @if($i==0)
                            active
                            @endif
                            "
                            id="list-question-{{$question['id']}}"
                            role="tabpanel"
                            aria-labelledby="list-question-{{$question['id']}}-list"
                    >
                        <h4>{{$question['content']}}</h4>
                        @foreach($choices[$i] as $choice)
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           id="choice-{{$choice['id']}}"
                                           name="choice-question-{{$question['id']}}"
                                           value="{{$choice['id']}}"
                                    />
                                    <label class="form-check-label" id="choice-{{$choice['id']}}">
                                        {{$choice['content']}}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12">
            <button type="button" class="js-submit-btn block-btn block-btn--wide btn-info">
                Submit your answers
            </button>
        </div>
    </div>
@endsection
<script type="text/javascript" src="{{asset('js/readData.js')}}"></script>