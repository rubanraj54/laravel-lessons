<div class="container">
    <div class="panel panel-default">
        <div class="panel-header">
            <h4>List of customers</h4>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>mobile number</th>
                        <th>Age</th>
                        <th>Type</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $key => $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->mobile_number}}</td>
                            <td>{{$customer->age}}</td>
                            <td>{{$customer->type}}</td>
                            <td>
                                <a href={{"/customers/delete/".$customer->id}}>
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $customers->links()}}
        </div>
    </div>
</div>
