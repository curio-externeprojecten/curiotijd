<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

<div class="leaderboard">
<h1>Leaderboard</h1>
@foreach($students as $student)
<p>Naam: {{$student->first_name}} {{$student->last_name}}</p>
<p>Badges: {{$student->achievements->count()}} </p>
@foreach ($student->achievements as $achievement)
    <li>
        {{$achievement->title}}
    </li>
@endforeach
<p>Klas: {{$student->klas_id}}</p>
<hr>
@endforeach

@auth
<a href="{{ route('dashboard.show', ['dashboard'=> Auth::id()])}}"class="btn btn-info">Dashboard</a>
@endauth

</div>

{{-- TO DO: leaderboard uit kunnen zetten! --}}
