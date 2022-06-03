<x-layout>
    <div class="card">
        <div class="card-header">
            Create Game
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4 class="alert-heading">There has been an error, please validate data!</h4>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ $action }}">
                @csrf

                @isset($game)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="title">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $game->name ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value="{{ $game->description ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="developer_id">Developer:</label>
                    <select name="developer_id" class="form-control">
                        <option selected disabled hidden>-- Please select developer --</option>

                        @foreach(\App\Models\Developer::all() as $developer)
                            <option value="{{ $developer->id }}" {{ isset($game) && isset($game->developer) && $game->developer->id == $developer->id ? 'selected' : ''}}>{{ $developer->name }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-link" href="{{ route('games.index') }}">Back</a>

            </form>
        </div>
    </div>
</x-layout>