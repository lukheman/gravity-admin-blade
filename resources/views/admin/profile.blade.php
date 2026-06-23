@component('layouts.app', ['title' => 'My Profile'])
    <x-layout.page-header title="My Profile" />

    <div class="row g-4">
        <div class="col-12 col-md-4">
            <x-layout.modern-card>
                <div class="text-center">
                    <div class="user-avatar bg-primary text-white mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">
                        {{ substr(auth()->user()->name ?? 'Admin', 0, 1) }}
                    </div>
                    <h5 class="fw-bold">{{ auth()->user()->name ?? 'Administrator' }}</h5>
                    <p class="text-muted">{{ auth()->user()->email ?? 'admin@example.com' }}</p>
                    <x-ui.badge type="primary">Admin Role</x-ui.badge>
                </div>
            </x-layout.modern-card>
        </div>
        <div class="col-12 col-md-8">
            <x-layout.modern-card>
                <h5 class="fw-bold mb-4">Edit Profile</h5>
                <form action="#" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <x-form.input name="name" label="Full Name" value="{{ auth()->user()->name ?? '' }}" />
                        </div>
                        <div class="col-12 col-md-6">
                            <x-form.input name="email" label="Email Address" type="email" value="{{ auth()->user()->email ?? '' }}" />
                        </div>
                        <div class="col-12 text-end mt-4">
                            <x-ui.button type="submit" variant="primary">Save Changes</x-ui.button>
                        </div>
                    </div>
                </form>
            </x-layout.modern-card>
        </div>
    </div>
@endcomponent
