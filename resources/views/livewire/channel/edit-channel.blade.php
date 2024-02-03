<div>

    @if($channel->image)
        <img src="{{asset('images' . '/' . $channel->image)}}" alt="">
    @endif
    <form wire:submit.prevent="update">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"class="form-control" wire:model="channel.name">
        </div>

        @error('channel.name')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text"class="form-control" wire:model="channel.slug">
        </div>

        @error('channel.name')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <label for="description">Description</label>
            <textarea cols="30" rows="4" class="form-control" wire:model="channel.description"></textarea>
        </div>

        <div class="form-group">
            <input type="file" wire:model="image">
        </div>

        @if ($image)
        <img src="{{ $image->temporaryUrl() }}">
        @endif

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

    </form>
</div>
