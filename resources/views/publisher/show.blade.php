<x-layout>
    <div class="card">
        <div class="card-header">
            <h1 class="d-inline">{{ $publisher->name ?? ''}}</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">Description</div>
                <div class="col-sm-10 border-left">{{ $publisher->description ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">European?</div>
                <div class="col-sm-10 border-left">{{ $publisher->is_european ? 'Yes' : 'No'}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Number of employees</div>
                <div class="col-sm-10 border-left">{{ $publisher->number_of_employees ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Created at</div>
                <div class="col-sm-10 border-left">{{ $publisher->created_at }}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Updated at</div>
                <div class="col-sm-10 border-left">{{ $publisher->updated_at }}</div>
            </div>
        </div>
    </div>
</x-layout>