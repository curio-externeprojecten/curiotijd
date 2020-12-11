@extends('layouts.app')

@section('content')
<div class="headerContent">
    <h1>Dashboard</h1> 
    <h4>Welkom {{$student->first_name}}</h4>
</div>
         

<div class="dashboardContent">
    <div class="badges">
        <h2>Behaalde badges:</h2>
        <img src="https://i.ibb.co/4fYy1gN/image.png" alt="Curio">
        <p>Help, ik zit op curio</p>
    </div>
    <div class="challenges">
        <h2>Challenges:</h2>
        <img src="" alt="">
        <p>Geen challenges beschikbaar</p>
    </div>
    <div class="studentInformation">
        <h2>Gegevens</h2>
            
                <p>voornaam: {{$student->first_name}}</p>
                <p>Achternaam: {{$student->last_name}}</p>
                <p>Klas: {{$student->name}}</p> 
                 <p>Studentnummer: {{$student->student_number}}</p>

    </div>
</div>

@endsection


