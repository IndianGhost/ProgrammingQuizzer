@extends('default')

@section('title')
    Quizz
@endsection

@section('content')
    <div class="bd-callout bd-callout-info">
        <h4 id="dealing-with-specificity">HTML Quizz</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
    </div>

    <div class="row">
        <!-- <form method="#" action="#"> -->
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a
                        class="list-group-item list-group-item-action active"
                        id="list-question1-list"
                        data-toggle="list"
                        href="#list-question1"
                        role="tab"
                        aria-controls="question1"
                >Question #1</a>

                <a
                        class="list-group-item list-group-item-action"
                        id="list-question2-list"
                        data-toggle="list"
                        href="#list-question2"
                        role="tab"
                        aria-controls="question2"
                >Question #2</a>

                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Question #3</a>

                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Question #4</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div
                        class="tab-pane fade show active"
                        id="list-question1"
                        role="tabpanel"
                        aria-labelledby="list-question1-list"
                >
                    <h4>ipsum lorem dolor?</h4>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="reponse11" name="reponse11" />
                            <label class="form-check-label" id="reponse11">Reponse1</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response12" name="response12" />
                            <label class="form-check-label" id="response12">Response2</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response13" name="response13" />
                            <label class="form-check-label" id="response13">Response3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response14" name="response14" />
                            <label class="form-check-label" id="response14">Response4</label>
                        </div>
                    </div>
                </div>
                <div
                        class="tab-pane fade"
                        id="list-question2"
                        role="tabpanel"
                        aria-labelledby="list-question2-list"
                >
                    <h4>sit amet?</h4>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="reponse21" name="reponse21" />
                            <label class="form-check-label" id="reponse21">Reponse21</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response22" name="response22" />
                            <label class="form-check-label" id="response22">Response22</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response23" name="response23" />
                            <label class="form-check-label" id="response23">Response23</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response24" name="response24" />
                            <label class="form-check-label" id="response24">Response24</label>
                        </div>
                    </div>
                </div>
                <div
                        class="tab-pane fade"
                        id="list-messages"
                        role="tabpanel"
                        aria-labelledby="list-messages-list"
                >
                    <h4>ipsum lorem dolor sit?</h4>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="reponse11" name="reponse11" />
                            <label class="form-check-label" id="reponse11">Reponse1</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response12" name="response12" />
                            <label class="form-check-label" id="response12">Response2</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response13" name="response13" />
                            <label class="form-check-label" id="response13">Response3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response14" name="response14" />
                            <label class="form-check-label" id="response14">Response4</label>
                        </div>
                    </div>
                </div>
                <div
                        class="tab-pane fade"
                        id="list-settings"
                        role="tabpanel"
                        aria-labelledby="list-settings-list"
                >
                    <h4>consectetur adipiscing elit?</h4>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="reponse21" name="reponse21" />
                            <label class="form-check-label" id="reponse21">Reponse21</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response22" name="response22" />
                            <label class="form-check-label" id="response22">Response22</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response23" name="response23" />
                            <label class="form-check-label" id="response23">Response23</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="response24" name="response24" />
                            <label class="form-check-label" id="response24">Response24</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <button type="button" class="block-btn block-btn--wide btn-info">Submit your answers</button>
        </div>
        <!-- </form> -->
    </div>
@endsection