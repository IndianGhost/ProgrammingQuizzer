@extends('layouts.app')

@section('style')
    <style type="text/css">
        table{
            border-collapse: collapse;
            margin: 2% 0;
        }
        td, th{
            border: solid 1px;
            padding: 5px;
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

                        <table>
                            <tr>
                                <th>Language</th>
                                <th>Description</th>
                            </tr>

                            @foreach($quizzes as $quiz)
                                <tr>
                                    <td>
                                        {{ $quiz->language }}
                                    </td>
                                    <td>
                                        {{ $quiz->description }}
                                    </td>
                                    <td>
                                        <a href="{{ route( 'quizzQuestion', $quiz->id ) }}">Go!</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
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