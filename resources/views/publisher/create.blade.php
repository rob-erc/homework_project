<x-layout>
    <div class="card">
        <div class="card-header">
            Create Publisher
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

                @isset($publisher)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="title">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $publisher->name ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value="{{ $publisher->description ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="is_european">European:</label>
                    <input type="checkbox" class="form-check-input" name="is_european" {{ isset($publisher) && $publisher->is_european ? 'checked' : ''}} value="1"/>
                </div>

                <div class="form-group">
                    <label for="number_of_employees">Number of employees</label>
                    <input type="number" class="form-control" name="number_of_employees" value="{{ $publisher->number_of_employees ?? ''}}" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-link" href="{{ route('publishers.index') }}">Back</a>

            </form>
        </div>
    </div>
</x-layout>