<x-layout>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('developers.create') }}" class="btn btn-primary">Create a new game</a>
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
                        <td>Developer</td>
                        <td>Created At</td>
                        <td>Updated At</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game->id }}</td>
                        <td>{{ $game->name }}</td>
                        <td>{{ $game->description }}</td>
                        <td>{{ $game->developer->name ?? '' }}</td>
                        <td>{{ $game->created_at }}</td>
                        <td>{{ $game->updated_at }}</td>
                        <td class="text-right">
                            <a href="{{ route('games.show', $game->id)}}" class="btn btn-info">View</a>
                            <a href="{{ route('games.edit', $game->id)}}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('games.destroy', $game->id)}}" method="post" class="d-inline">
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