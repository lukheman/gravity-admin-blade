@component('layouts.app', ['title' => 'User Management'])
    <x-layout.page-header title="User Management">
        <x-slot name="actions">
            <div class="d-flex gap-2">
                <form action="{{ route('admin.users') }}" method="GET" class="d-flex me-2">
                    <input type="text" name="search" class="form-control" placeholder="Search users..." value="{{ request('search') }}">
                    <x-ui.button type="submit" variant="primary" class="ms-2">Search</x-ui.button>
                </form>
                <x-ui.button href="{{ route('admin.users.create') }}" variant="primary" icon="fas fa-plus">Add User</x-ui.button>
            </div>
        </x-slot>
    </x-layout.page-header>

    @if(session('success'))
        <x-ui.alert type="success" message="{{ session('success') }}" />
    @endif

    <x-layout.table-card>
        <x-layout.table>
            <x-slot name="thead">
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined At</th>
                    <th class="text-end">Actions</th>
                </tr>
            </x-slot>

            @forelse($users as $user)
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <x-ui.avatar name="{{ $user->name }}" size="sm" />
                            <div>
                                <h6 class="mb-0 fw-semibold">{{ $user->name }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <x-ui.badge type="primary">Admin</x-ui.badge>
                    </td>
                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                    <td class="text-end">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.users.edit', $user) }}" class="action-btn action-btn-edit" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn action-btn-delete" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        <x-ui.empty-state icon="fas fa-users" title="No users found" message="Try adjusting your search or add a new user." />
                    </td>
                </tr>
            @endforelse
        </x-layout.table>
        
        <div class="mt-4">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </x-layout.table-card>
@endcomponent
