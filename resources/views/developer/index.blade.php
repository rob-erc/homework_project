<x-layout>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('developers.create') }}" class="btn btn-primary">Create a new developer</a>
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
                        <td>Number of Developers</td>
                        <td>Publisher</td>
                        <td>Created At</td>
                        <td>Updated At</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($developers as $developer)
                    <tr>
                        <td>{{ $developer->id }}</td>
                        <td>{{ $developer->name }}</td>
                        <td>{{ $developer->number_of_developers }}</td>
                        <td>{{ $developer->publisher->name ?? '' }}</td>
                        <td>{{ $developer->created_at }}</td>
                        <td>{{ $developer->updated_at }}</td>
                        <td class="text-right">
                            <a href="{{ route('developers.show', $developer->id)}}" class="btn btn-info">View</a>
                            <a href="{{ route('developers.edit', $developer->id)}}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('developers.destroy', $developer->id)}}" method="post" class="d-inline">
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