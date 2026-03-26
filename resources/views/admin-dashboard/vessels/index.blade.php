@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
    
    @include('admin-dashboard.include.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="page-title mb-0">
                    Vessels Management 
                </h3>
            </div>

            <div class="card shadow-sm">
                
                {{-- TABS --}}
                <!-- <div class="card-header bg-white">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{ $status == 'all' ? 'active' : '' }}" href="?status=all">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $status == 'pending' ? 'active' : '' }}" href="?status=pending">
                                Pending <span class="badge bg-warning">{{ $statusCounts['pending'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $status == 'approved' ? 'active' : '' }}" href="?status=approved">
                                Approved <span class="badge bg-success">{{ $statusCounts['approved'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $status == 'rejected' ? 'active' : '' }}" href="?status=rejected">
                                Rejected <span class="badge bg-danger">{{ $statusCounts['rejected'] }}</span>
                            </a>
                        </li>
                    </ul>
                </div> -->

                <div class="card-body">

                    {{-- ALERTS --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    {{-- TABLE --}}
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Type</th>
                                    <th>Capacity</th>
                                    <th>Status</th>
                                    <th width="200">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($vessels as $vessel)
                                    <tr>
                                        <td>{{ $vessel->name }}</td>
                                        <td>{{ $vessel->company->name ?? 'N/A' }}</td>
                                        <td>{{ $vessel->type }}</td>
                                        <td>
                                            {{ $vessel->capacity ? number_format($vessel->capacity, 2) . ' DWT' : 'N/A' }}
                                        </td>

                                        {{-- STATUS --}}
                                        <td>
                                            <span class="badge bg-{{ $vessel->statusBadge() }}">
                                                {{ ucfirst($vessel->status) }}
                                            </span>
                                        </td>

                                        {{-- ACTIONS --}}
                                        <td>
                                            <div class="d-flex gap-2">

                                                <a href="{{ route('admin.vessels.show', $vessel) }}"
                                                   class="btn btn-sm btn-outline-primary">
                                                    View
                                                </a>

                                                @if($vessel->status === 'pending')

                                                    <form method="POST"
                                                          action="{{ route('admin.vessels.approve', $vessel) }}">
                                                        @csrf
                                                        <button type="submit"
                                                                class="btn btn-sm btn-success">
                                                            Approve
                                                        </button>
                                                    </form>

                                                    <button class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#rejectModal{{ $vessel->id }}">
                                                        Reject
                                                    </button>

                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-5">
                                            <i class="mdi mdi-ship-off mdi-3x text-muted"></i>
                                            <p class="mt-2 text-muted">No vessels found</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- PAGINATION --}}
                    <div class="mt-3">
                        {{ $vessels->appends(request()->query())->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

{{-- ✅ MODALS OUTSIDE TABLE (IMPORTANT FIX) --}}
@foreach($vessels as $vessel)
<div class="modal fade" id="rejectModal{{ $vessel->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reject {{ $vessel->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST" action="{{ route('admin.vessels.reject', $vessel) }}">
                @csrf
                <div class="modal-body">
                    <textarea name="rejection_remark"
                              class="form-control"
                              required
                              placeholder="Enter rejection reason..."></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@include('admin-dashboard.include.footer')