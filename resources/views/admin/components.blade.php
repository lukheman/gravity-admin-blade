@component('layouts.app', ['title' => 'UI Components'])
    <x-layout.page-header title="UI Components Showcase" subtitle="A preview of the available Blade components in this project." />

    <div class="row g-4">
        <div class="col-12 col-md-6">
            <x-layout.modern-card>
                <h5 class="fw-bold mb-4">Buttons</h5>
                <div class="d-flex gap-2 flex-wrap">
                    <x-ui.button variant="primary">Primary</x-ui.button>
                    <x-ui.button variant="secondary">Secondary</x-ui.button>
                    <x-ui.button variant="success">Success</x-ui.button>
                    <x-ui.button variant="danger">Danger</x-ui.button>
                    <x-ui.button variant="warning">Warning</x-ui.button>
                </div>
            </x-layout.modern-card>
        </div>

        <div class="col-12 col-md-6">
            <x-layout.modern-card>
                <h5 class="fw-bold mb-4">Badges</h5>
                <div class="d-flex gap-2 flex-wrap">
                    <x-ui.badge type="primary">Primary</x-ui.badge>
                    <x-ui.badge type="secondary">Secondary</x-ui.badge>
                    <x-ui.badge type="success">Success</x-ui.badge>
                    <x-ui.badge type="danger">Danger</x-ui.badge>
                    <x-ui.badge type="warning">Warning</x-ui.badge>
                </div>
            </x-layout.modern-card>
        </div>

        <div class="col-12">
            <x-layout.modern-card>
                <h5 class="fw-bold mb-4">Form Inputs</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <x-form.input name="text" label="Text Input" placeholder="Enter text..." />
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Example Checkbox
                            </label>
                        </div>
                    </div>
                </div>
            </x-layout.modern-card>
        </div>
    </div>
@endcomponent
