<html>
    <title>
        Students 
    </title>
    <body>
        <h1> Create a new project </h1>

        <form method="POST" action="/student/create">
        {{ csrf_field() }}
            <div>
            
            <input type="text" name="firstname" placeholder="Enter your first name">
            
            </div>

            <div>
            
            <input type="text" name="lastname" placeholder="Enter your last name">
                        
            </div>

            <div>
            
            <input type="text" name="email" placeholder="Enter your email">
            
            </div>

            <div>
            
            <button type="submit">Create Student entry</button>
            
            
    </body>
</html>