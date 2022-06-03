<x-layout>
    <div class="card">
        <div class="card-header">
            <h1 class="d-inline">{{ $game->name ?? ''}}</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">Description</div>
                <div class="col-sm-10 border-left">{{ $game->description ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Developer</div>
                <div class="col-sm-10 border-left">{{ $game->developer->name ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Created at</div>
                <div class="col-sm-10 border-left">{{ $game->created_at }}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Updated at</div>
                <div class="col-sm-10 border-left">{{ $game->updated_at }}</div>
            </div>
        </div>
    </div>
</x-layout>