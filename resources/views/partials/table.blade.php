<table class="table">
    <thead>
        <tr>
            <th scope="col">Numero treno</th>
            <th scope="col">Data partenza</th>
            <th scope="col">Stazione Partenza</th>
            <th scope="col">Stazione Arrivo</th>
            <th scope="col">Orario Partenza</th>
            <th scope="col">Orario Arrivo</th>
            <th scope="col">N.Vagoni</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
        </tr>
    </thead>
    @foreach ($trainList as $train)
        <tbody>
            <tr>
                <th scope="row">{{ $train->train_number }}</th>
                <td>{{ $train->departure_date }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->carriage_number }}</td>
                
                @if ($train->is_on_time === 1)
                <td> <i class="fa-solid fa-square-xmark"></i> </td>
                @else
                <td><i class="fa-solid fa-square-check"></i></td>
                @endif

                @if ($train->canceled === 1)
                <td> <i class="fa-solid fa-square-xmark"></i> </td>
                @else
                <td><i class="fa-solid fa-square-check"></i></td>
                @endif
            </tr>
        </tbody>
    @endforeach
</table>
