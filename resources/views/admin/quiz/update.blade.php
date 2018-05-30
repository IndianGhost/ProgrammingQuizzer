@extends('layouts.app')

@section('style')
    <style type="text/css">
        .error{
            color: #f44336;
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
                        @if( isset($quiz) )
                            <form action="#" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    {{ csrf_field() }}
                                    <legend>Update {{ $quiz->language }} Quiz</legend>
                                    <label>Language :</label>
                                    <input type="text" name="language" value="{{ $quiz->language }}" autofocus required/>
                                    <br/>
                                    <br/>
                                    <label>Description :</label>
                                    <textarea name="description" rows="5" required>{{ $quiz->description }}</textarea>
                                    <br/>
                                    <br/>
                                    <label>Logo :</label>
                                    <input type="file" name="logo" id="" required/>
                                    <br/>
                                    <br/>
                                    <input type="submit" value="Create quiz"/>
                                </fieldset>
                            </form>
                        @else
                        <h1  class="error">Oooops !</h1>
                        <p>
                            There's no quiz to update. You can try later !
                        </p>
                        @endif
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