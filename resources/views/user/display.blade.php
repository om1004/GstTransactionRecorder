<div>
    <table>
        <tr>
            <th>Firm Name</th>
            <th>GSTIN</th>
        </tr>
        @foreach($firms as $firm)
        <tr>
            <td>{{$firm->username}}</td>
            <td>{{$firm->gstin}}</td>
        </tr>
        @endforeach
    </table>   
    

    <a href="{{ route('user.form') }}"> Add new Firm</a>
</div>
