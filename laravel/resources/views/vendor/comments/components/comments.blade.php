@php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp

@if($comments->count() < 1)
    <div class="alert alert-warning">Il n'y a pas de commentaires pour le moment.</div>
@endif

<ul class="list-unstyled">
    @php
        $grouped_comments = $comments->sortBy('created_at')->groupBy('child_id');
    @endphp
    @foreach($grouped_comments as $comment_id => $comments)
        {{-- Process parent nodes --}}
        @if($comment_id == '')
            @foreach($comments as $comment)
                @include('comments::_comment', [
                    'comment' => $comment,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif
    @endforeach
</ul>

@auth
    @include('comments::_form')
@elseif(config('comments.guest_commenting') == true)
    @include('comments::_form', [
        'guest_commenting' => true
    ])
@else
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Connexion requise</h5>
            <p class="card-text">Vous devez vous connectez pour commenter.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Connexion</a>
        </div>
    </div>
@endauth
