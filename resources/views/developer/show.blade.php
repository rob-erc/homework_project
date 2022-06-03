<x-layout>
    <div class="card">
        <div class="card-header">
            <h1 class="d-inline">{{ $developer->name ?? ''}}</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">Number of developers</div>
                <div class="col-sm-10 border-left">{{ $developer->number_of_developers ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Publisher</div>
                <div class="col-sm-10 border-left">{{ $developer->publisher->name ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Created at</div>
                <div class="col-sm-10 border-left">{{ $developer->created_at }}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Updated at</div>
                <div class="col-sm-10 border-left">{{ $developer->updated_at }}</div>
            </div>
        </div>
    </div>
</x-layout>