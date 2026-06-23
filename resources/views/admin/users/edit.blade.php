@component('layouts.app', ['title' => 'Edit User'])
    <x-layout.page-header title="Edit User">
        <x-slot name="actions">
            <a href="{{ route('admin.users') }}" class="btn btn-secondary">Back</a>
        </x-slot>
    </x-layout.page-header>

    <x-layout.modern-card>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <x-form.input name="name" label="Full Name" value="{{ old('name', $user->name) }}" />
                </div>
                <div class="col-12 col-md-6">
                    <x-form.input name="email" label="Email Address" type="email" value="{{ old('email', $user->email) }}" />
                </div>
                <div class="col-12 col-md-6">
                    <x-form.input name="password" label="Password (leave blank to keep current)" type="password" />
                </div>
                <div class="col-12 text-end mt-4">
                    <x-ui.button type="submit" variant="primary">Update User</x-ui.button>
                </div>
            </div>
        </form>
    </x-layout.modern-card>
@endcomponent
