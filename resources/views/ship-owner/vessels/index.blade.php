@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
    @include('ship-owner.include.sidebar')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">My Vessels</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('ship.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Vessels</li>
                    </ol>
                </nav>
            </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Vessels List ({{ $vessels->total() }})</h4>
                <a href="{{ route('ship.vessels.create') }}" class="btn btn-primary">
                    <i class="mdi mdi-plus"></i> Add Vessel
                </a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Capacity</th>
                                <th>IMO</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($vessels as $vessel)
                                <tr>
                                    <td>{{ $vessel->name }}</td>
                                    <td>{{ $vessel->type }}</td>
                                    <td>{{ number_format($vessel->capacity, 2) }} DWT</td>
                                    <td>{{ $vessel->imo_number }}</td>
                                    <td>
                                        <span class="badge bg-{{ $vessel->statusBadge() }}">
                                            {{ ucfirst($vessel->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($vessel->canBeEdited())
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('ship.vessels.edit', $vessel) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                                <form method="POST" action="{{ route('ship.vessels.destroy', $vessel) }}" class="d-inline" onsubmit="return confirm('Delete?')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                                </form>
                                            </div>
                                        @else
                                            <span class="text-muted">Approved</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <i class="mdi mdi-ship mdi-4x text-muted mb-3 d-block"></i>
                                        <h5 class="text-muted">No vessels yet</h5>
                                        <p class="text-muted">Add your first vessel above</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $vessels->links() }}
            </div>
        </div>
    </div>
</div>

@include('ship-owner.include.footer')
