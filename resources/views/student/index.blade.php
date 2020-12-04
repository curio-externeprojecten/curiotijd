@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Dashboard</h1> 
</div>
         

<div class="row">
    <div class="badges col-5">
        <h2>Behaalde badges:</h2>
        <img src="https://i.ibb.co/4fYy1gN/image.png" alt="Curio">
        <p>Help, ik zit op curio</p>
    </div>
    <div class="challenges col-5">
        <h2>Challenges:</h2>
        <img src="" alt="">
        <p>Geen challenges beschikbaar</p>
    </div>
    <div class="gegevens col-1">
        <h2>Gegevens</h2>
            
                <p>voornaam: {{$student->first_name}}</p>
                <p>Achternaam: {{$student->last_name}}</p>
                <p>Klas: {{$student->klas_id}}</p> 
                 <p>Studentnummer: {{$student->student_number}}</p>

    </div>
</div>

@endsection


