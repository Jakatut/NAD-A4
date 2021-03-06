<div class="card">
    <div class="card-header">{{ __('Posts Dashboard') }}
        
    </div>

    <div class="card-body">
        
        <div class="form-group row">
            
            @csrf
            
            <div class="col-4 offset-8">
                <a type="submit" class="btn btn-primary" href="{{ route('newPost') }}">
                    {{ __('Create New') }}
                </a>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @else
            @foreach($posts as $post)
            <div>
                <a href="{{ route('posts.viewPost', $post->id)}}">{{$post->title}}</a>
                <!-- {{$post->content}} -->
            </div>
            @endforeach
        @endif

        
    </div>
</div>