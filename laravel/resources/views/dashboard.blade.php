<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Laravel Dashboard</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; text-align: center; }
        .card h2 { margin: 0; font-size: 2em; }
        .card p { margin: 5px 0 15px; color: #666; }
        .card a { text-decoration: none; color: white; background: #007BFF; padding: 10px 20px; border-radius: 4px; display: inline-block; }
        .card a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <div class="grid">
        <div class="card">
            <h2>{{ $counts['customers'] }}</h2>
            <p>Customers</p>
            <a href="{{ route('customers.index') }}">Manage Customers</a>
        </div>
        <div class="card">
            <h2>{{ $counts['exercises'] }}</h2>
            <p>Exercises</p>
            <a href="{{ route('exercises.index') }}">Manage Exercises</a>
        </div>
        <div class="card">
            <h2>{{ $counts['foods'] }}</h2>
            <p>Foods</p>
            <a href="{{ route('foods.index') }}">Manage Foods</a>
        </div>
        <div class="card">
            <h2>{{ $counts['activities'] }}</h2>
            <p>Activities</p>
            <a href="{{ route('activities.index') }}">Manage Activities</a>
        </div>
        <div class="card">
            <h2>{{ $counts['meals'] }}</h2>
            <p>Meals</p>
            <a href="{{ route('meals.index') }}">Manage Meals</a>
        </div>
    </div>
</body>
</html>