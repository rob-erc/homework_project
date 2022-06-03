<x-layout>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('publishers.create') }}" class="btn btn-primary">Create a new publisher</a>
        </div>

        <div class="card-header">
        </div>

        <div class="card-body">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
            @endif

            <table class="table table-striped">

                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>European?</td>
                        <td>Number of Employees</td>
                        <td>Created At</td>
                        <td>Updated At</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($publishers as $publisher)
                    <tr>
                        <td>{{ $publisher->id }}</td>
                        <td>{{ $publisher->name }}</td>
                        <td>{{ $publisher->description }}</td>
                        <td>{{ $publisher->is_european ? 'Yes' : 'No' }}</td>
                        <td>{{ $publisher->number_of_employees }}</td>
                        <td>{{ $publisher->created_at }}</td>
                        <td>{{ $publisher->updated_at }}</td>
                        <td class="text-right">
                            <a href="{{ route('publishers.show', $publisher->id)}}" class="btn btn-info">View</a>
                            <a href="{{ route('publishers.edit', $publisher->id)}}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('publishers.destroy', $publisher->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-layout>