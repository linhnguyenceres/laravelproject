<!DOCTYPE html>
<html>
<head>
    <title>Question</title>
    <meta charset='utf-8'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('public/js/app.js') }}"></script>
    <link href="{{ asset('public/css/mystyle.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('public/js/jsforex.js') }}"></script>

    <style>
        .full-height {
            height: 10vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: #CCFFCC;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body class="style-body">


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>
<h1>QUIZ</h1>
<h1>Bạn có đủ thông minh để trở thành nhà du hành vũ trụ của NASA không?</h1>
    @foreach($petani as $key =>$data)
<form method='post' id='quiz_form'>

    <div id="{{$data->id}}" class='questions' data-question="" data-question-id="{{$data->id}}" data-answer="{{$data->answer}}">
        <div id="quiz">

            <h2 id="question_{{$data->id}}"  data-question-id="{{$data->id}}" >{{$data->question}}</h2>
            <div class='align'>
                <label id='ans1_{{$data->id}}' for='1'>
                    <input type="radio" value="1" id='radio1_{{$data->id}}' class="input" name='{{$data->id}}'>
                    {{$data->answer1}}</label>
                <br/>

                <label id="ans_2{{$data->id}}" for='1'><input type="radio" value="2" id='radio2_{{$data->id}}' class="input" name='{{$data->id}}'>
                    {{$data->answer2}}</label>
                <br/>

                <label id='ans3_{{$data->id}}' for='1'><input type="radio" value="3" id='radio3_{{$data->id}}' class="input" name='{{$data->id}}'>
                    {{$data->answer3}}</label>
                <br/>

                <label id='ans4_{{$data->id}}' for='1'><input type="radio" value="4" id='radio4_{{$data->id}}' class="input" name='{{$data->id}}'>
                    {{$data->answer4}}</label>
                <input type="radio" checked='checked' value="5" style='display:none' id='radio5_{{$data->id}}' name='{{$data->id}}'>
            </div>
            <div style="display: none" id="{{$data->id}}" class="answerm">{{$data->answer}}</div>

        </div>
        <br/>

        <input type="button" id='prev' value='Prev!' name='buttonPrev' class='buttPrev butt'/>
        <input type="button" id='next' value='Next!' name='buttonNext' class='buttNext butt'/> <br>
        <input type="button" id='submit' value='Sub!' name='buttonSub' class='buttSub butt'/>

    </div>
    @endforeach

</form>

<div id="results">
    <h3 id ="num"></h3>
</div>
<div id="score"></div>
</body>
</html>
