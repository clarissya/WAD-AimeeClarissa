<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mythical Creatures</title>
    <style>
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color:lightcoral;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; font-family: 'Courier New', Courier, monospace;">Mythical Creature List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Origin</th>
                <th>Power Level</th>
                <th>Element</th>
            </tr>
        </thead>
        <tbody>
            @foreach($creatures as $creature)
                <tr>
                    <td>{{ $creature->name }}</td>
                    <td>{{ $creature->origin }}</td>
                    <td>{{ $creature->power_level }}</td>
                    <td>{{ $creature->element }}</td>
                </tr>
            @endforeach
        </tbody>
