@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
    @include('ship-owner.include.sidebar')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row mb-4">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('ship.vessels.index') }}">Vessels</a></li>
                            <li class="breadcrumb-item active">Edit {{ $vessel->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4 class="mb-0">Edit Vessel</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('ship.vessels.update', $vessel) }}">
                        @csrf @method('PUT')
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Vessel Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $vessel->name) }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Type <span class="text-danger">*</span></label>
                                <select name="type" class="form-select @error('type') is-invalid @enderror" required>
                                    <option value="">Select Type</option>
                                    <option value="Bulk Carrier" {{ old('type', $vessel->type) == 'Bulk Carrier' ? 'selected' : '' }}>Bulk Carrier</option>
                                    <option value="Container Ship" {{ old('type', $vessel->type) == 'Container Ship' ? 'selected' : '' }}>Container Ship</option>
                                    <option value="Tanker" {{ old('type', $vessel->type) == 'Tanker' ? 'selected' : '' }}>Tanker</option>
                                    <option value="Ro-Ro" {{ old('type', $vessel->type) == 'Ro-Ro' ? 'selected' : '' }}>Ro-Ro</option>
                                    <option value="LNG Carrier" {{ old('type', $vessel->type) == 'LNG Carrier' ? 'selected' : '' }}>LNG Carrier</option>
                                </select>
                                @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">IMO Number (7 digits) <span class="text-danger">*</span></label>
                                <input type="text" name="imo_number" class="form-control @error('imo_number') is-invalid @enderror" value="{{ old('imo_number', $vessel->imo_number) }}" maxlength="7" required>
                                @error('imo_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('ship.vessels.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update & Resubmit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('ship-owner.include.footer')

