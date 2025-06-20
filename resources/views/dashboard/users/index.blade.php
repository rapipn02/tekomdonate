@extends('layouts.app')

@section('title', 'Manajemen Pengguna')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Manajemen Pengguna</h1>
        
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengguna</h4>
                        <div class="card-header-action">
                            <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Pengguna Baru
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                               
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="usersTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Peran</th>
                                        <th>Jenis</th>
                                        <th>Email Terverifikasi</th>
                                        <th>Bergabung Pada</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $index => $user)
                                    <tr>
                                        <td class="text-center">{{ $users->firstItem() + $index }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->is_admin)
                                                <span class="badge badge-success">Admin</span>
                                            @else
                                                <span class="badge badge-dark">User</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->jenis)
                                                {{ $user->jenis->nama_jenis }}
                                            @else
                                                <span class="badge badge-warning">Tidak Diketahui</span>
                                            @endif
                                        <td>
                                            @if ($user->email_verified_at)
                                                <span class="badge badge-primary">{{ $user->email_verified_at->format('d M Y, H:i') }}</span>
                                            @else
                                                <span class="badge badge-warning">Belum</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->created_at->format('d M Y, H:i') }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data pengguna.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right">
                           {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
