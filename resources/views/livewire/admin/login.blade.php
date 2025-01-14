<div>
    <form action="" class="my-4" method="post" wire:submit.prevent="doLogin">
        @method('POST')
        @csrf

        <div class="form-group mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" wire:model="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group d-flex mb-3">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-end">
                <a class='text-muted fs-14' href="">Forgot password?</a>
            </div>
        </div>

        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
        @endif

        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit"> Log In </button>
                </div>
            </div>
        </div>
    </form>
</div>
