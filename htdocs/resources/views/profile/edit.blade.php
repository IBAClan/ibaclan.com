@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Profile
                </div>

                <div class="card-body">
                    @if (session('update'))
                    <div class="alert alert-success" role="alert">
                        {{ session('update') }}
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="username">
                        Username: <?= $user->username; ?>
                    </div>
                    <br>
                    <form action="{{ route('updateprofile') }}" method="POST">
                        @csrf
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="public" name="public" checked="<?= $user->public; ?>" value=1>
                            <label class="form-check-label" for="public">Publicly visible?</label>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?= $user->email; ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your Username" name="username" value="<?= $user->username; ?>">
                        </div> -->
                        <div class="form-group">
                            <label for="steam">Steam Username</label>
                            <input type="text" class="form-control" id="steam" placeholder="Enter your Steam Username" name="steam" value="<?= $user->steam; ?>">
                        </div>
                        <div class="form-group">
                            <label for="twitch">Twitch Username</label>
                            <input type="text" class="form-control" id="twitch" placeholder="Enter your Twitch Username" name="twitch" value="<?= $user->twitchj; ?>">
                        </div>
                        <div class="form-group">
                            <label for="youtube">YouTube URL</label>
                            <input type="text" class="form-control" id="youtube" placeholder="Enter your YouTube URL" name="youtube" value="<?= $user->youtube; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" onClick="javascript:location.href='{{ route('profile') }}'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
