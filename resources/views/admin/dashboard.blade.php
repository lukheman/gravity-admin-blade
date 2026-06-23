@component('layouts.app', ['title' => 'Dashboard - AdminPro'])
    <x-layout.page-header title="Dashboard Overview">
        <x-slot name="actions">
            <x-ui.button variant="primary" icon="fas fa-download">Download Report</x-ui.button>
        </x-slot>
    </x-layout.page-header>

    <!-- Stats Grid -->
    <div class="row g-4 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <x-layout.stat-card 
                icon="fas fa-users" 
                label="Total Users" 
                value="{{ number_format($stats['total_users']) }}" 
                trendValue="+5.2%" 
                variant="primary" 
            />
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <x-layout.stat-card 
                icon="fas fa-user-plus" 
                label="New Users (7 Days)" 
                value="{{ number_format($stats['new_users']) }}" 
                trendValue="+12%" 
                variant="success" 
            />
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <x-layout.stat-card 
                icon="fas fa-laptop-house" 
                label="Active Sessions" 
                value="{{ $stats['active_sessions'] }}" 
                trendValue="+2.1%" 
                variant="warning" 
            />
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <x-layout.stat-card 
                icon="fas fa-dollar-sign" 
                label="Total Revenue" 
                value="{{ $stats['revenue'] }}" 
                trendValue="+15%" 
                variant="secondary" 
            />
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <x-layout.modern-card>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0 fw-bold">Recent Users</h5>
                    <a href="{{ route('admin.users') }}" class="btn btn-sm btn-light">View All</a>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentUsers as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="user-avatar bg-primary text-white" style="width: 32px; height: 32px; font-size: 0.75rem;">
                                                {{ substr($user->name, 0, 1) }}
                                            </div>
                                            <span class="fw-medium">{{ $user->name }}</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">{{ $user->email }}</td>
                                    <td class="text-muted">{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-3">No recent users.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </x-layout.modern-card>
        </div>
        
        <div class="col-12 col-lg-4">
            <x-layout.feature-card title="System Status" description="All systems are running smoothly. No issues reported." icon="fas fa-check-circle" buttonText="View Logs" buttonLink="#" />
            <div class="mt-4">
                <x-layout.feature-card title="Quick Actions" description="Need to add a new admin or generate reports?" icon="fas fa-bolt" buttonText="Go to Settings" buttonLink="#" />
            </div>
        </div>
    </div>
@endcomponent
