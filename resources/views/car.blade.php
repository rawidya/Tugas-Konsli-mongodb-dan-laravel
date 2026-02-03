<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; background-color: #f4f4f4; padding: 20px; }
        .car-container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        .car-item { margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 15px; }
        .car-item:last-child { border-bottom: none; }
        strong { color: #555; }
    </style>
</head>
<body>

    <div class="car-container">
        <h2>LIST OF CAR</h2>

        @forelse ($data as $car)
            <div class="car-item">
                <strong>Brand:</strong> {{ $car->Brand ?? 'N/A' }}<br>
                <strong>Model:</strong> {{ $car->Model ?? 'N/A' }}<br>
                <strong>Year:</strong> {{ $car->Year ?? '-' }}<br>
                <strong>Color:</strong> {{ $car->Color ?? '-' }}<br>
                <strong>Mileage:</strong> {{ number_format($car->Mileage ?? 0) }} km<br>
                <strong>Price:</strong> ${{ number_format($car->Price ?? 0) }}<br>
                <strong>Condition:</strong> {{ $car->Condition ?? '-' }}<br>
            </div>
        @empty
            <p style="text-align: center; color: red;">
                Data tidak ditemukan di database <strong>param_sikrit_21</strong> koleksi <strong>car</strong>.
            </p>
        @endforelse
    </div>

</body>
</html>