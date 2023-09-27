<!DOCTYPE html>
<html>
<head>
    <title>Digital Tombstone</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: 'Tahoma', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .tombstone {
            background-color: #333;
            border: 5px solid #666;
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
            max-width: 500px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
            font-family: 'Impact', sans-serif;
            color: #ff5722;
            text-transform: uppercase;
        }

        p {
            font-size: 24px;
            margin: 10px 0;
            font-family: 'Tahoma', sans-serif;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        a {
            color: #ff5722;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="tombstone">
        <h1>Rest In Two Pieces</h1>
        <p>Our beloved {{ $data['data'] }}</p>
        <p>{{ $data['date_of_birth'] }} - {{ $data['date_of_death'] }}</p>
        <p>{{ $data['description'] }}</p>
        <p>Double Value: {{ $data['double_value'] }}</p>

        @if(isset($data['image']))
            <p>Uploaded Image:</p>
            <img src="{{ asset($data['image']) }}" alt="Uploaded Image">
        @endif
        
        <a href="/form">Go back</a>
    </div>
</body>
</html>
