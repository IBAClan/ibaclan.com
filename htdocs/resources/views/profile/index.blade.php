@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Profile
                    <a class="btn btn-primary float-right" href="/profile/edit">edit</a>
                </div>

                <div class="card-body">
                    @if (session('update'))
                        <div class="alert alert-success" role="alert">
                            {{ session('update') }}
                        </div>
                    @endif

                    <div class="username">
                        Username: <?= $user->username; ?>
                    </div>
                    <div class="email">
                        E-Mail: <?= $user->email; ?>
                    </div>
                    <div class="steam">
                        Steam Username: <?= $user->steam; ?>
                    </div>
                    <div class="twitch">
                        Twitch Username: <?= $user->twitch; ?>
                    </div>
                    <div class="youtube">
                        YouTube URL: <?= $user->youtube; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
