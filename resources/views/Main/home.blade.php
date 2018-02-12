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
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/html.png"/>
                </div>
                <div class="media-body">
                    <h4>HTML Quizz</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="html_quizz.html" target="_blank" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/css.png"/>
                </div>
                <div class="media-body">
                    <h4>CSS Quizz</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="#" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/javascript.png"/>
                </div>
                <div class="media-body">
                    <h4>Javascript Quizz</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="#" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/php.png"/>
                </div>
                <div class="media-body">
                    <h4>PHP Quizz</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="#" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/python.png"/>
                </div>
                <div class="media-body">
                    <h4>PYTHON Quizz <span class="badge badge-secondary">New</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="#" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/c.png"/>
                </div>
                <div class="media-body">
                    <h4>C PROGRAMMING LANGUAGE Quizz <span class="badge badge-secondary">New</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="#" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="img/sql.png"/>
                </div>
                <div class="media-body">
                    <h4>SQL Quizz <span class="badge badge-secondary">New</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <div class="media-right align-self-center">
                    <a href="#" class="btn btn-default">Start Now</a>
                </div>
            </div>
        </li>
    </ul>
@endsection

@section('javascript')
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
@endsection