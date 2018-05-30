@extends('layouts.app')

@section('style')
    <style type="text/css">
        /*code*/
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

                        <form action="#" method="post" enctype="multipart/form-data">
                            <fieldset>
                                {{ csrf_field() }}
                                <legend>Create new quiz</legend>
                                <label>Language :</label>
                                <input type="text" name="language" autofocus required/>
                                <br/>
                                <br/>
                                <label>Description :</label>
                                <textarea name="description" rows="5" required></textarea>
                                <br/>
                                <br/>
                                <label>Logo :</label>
                                <input type="file" name="logo" id="" required/>
                                <br/>
                                <br/>
                                <input type="submit" value="Create quiz"/>
                            </fieldset>
                        </form>
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