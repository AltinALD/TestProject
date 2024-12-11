<h1>Computers List</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Version</th>
            <th>Price</th>
        </tr>
        <tbody>
            @foreach ($computers as $computer)
            <tr>
                <td> {{$computer->id}}</td>
                <td> {{$computer->brand}}</td>
                <td> {{$computer->version}}</td>
                <td> {{$computer->price}}</td>
            </tr>
                
            @endforeach
        </tbody>
    </thead>
</table>