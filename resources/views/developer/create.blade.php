<x-layout>
    <div class="card">
        <div class="card-header">
            Create Developer
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

                @isset($developer)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="title">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $developer->name ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="number_of_developers">Number of developers</label>
                    <input type="number" class="form-control" name="number_of_developers" value="{{ $developer->number_of_developers ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="publisher_id">Publisher:</label>
                    <select name="publisher_id" class="form-control">
                        <option selected disabled hidden>-- Please select publisher --</option>

                        @foreach(\App\Models\Publisher::all() as $publisher)
                            <option value="{{ $publisher->id }}" {{ isset($developer) && isset($developer->publisher) && $developer->publisher->id == $publisher->id ? 'selected' : ''}}>{{ $publisher->name }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-link" href="{{ route('developers.index') }}">Back</a>

            </form>
        </div>
    </div>
</x-layout>