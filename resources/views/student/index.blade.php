<html>
    <title>
        Students 
    </title>
    <body>
        <h1> Students database table </h1>
            
            @foreach($student as $student)

            <li> {{ $student->firstname }} {{ $student->lastname }} </li>

            @endforeach
    </body>
</html>