<h1>Leaderboard</h1>
@foreach($students as $student)
<p>voornaam: {{$student->first_name}}</p>
<p>klas: {{$student->klas_id}}</p>
<hr>
@endforeach
