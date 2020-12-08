<h1>Leaderboard</h1>
@foreach($students as $student)
<p>Naam: {{$student->first_name}} {{$student->last_name}}</p>
{{-- <p>Badges: {{$achievements->id}}</p> --}}
<p>Klas: {{$student->klas_id}}</p>
<hr>
@endforeach
{{-- <button><p>Leaderboard uit</p></button> --}}
