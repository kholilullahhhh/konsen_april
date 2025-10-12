@extends('layouts.app', ['title' => 'QR Code Absensi'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>QR Code Absensi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('user.absensi.create') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">QR Code Absensi</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Scan QR Code untuk Absensi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center">
                                        <!-- Informasi Agenda -->
                                        <div class="agenda-info mb-4">
                                            <h5 class="text-primary">{{ $agenda->judul }}</h5>
                                            <p class="text-muted mb-2">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                {{ \Carbon\Carbon::parse($agenda->tgl_kegiatan)->translatedFormat('d F Y') }}
                                            </p>
                                            <p class="text-muted mb-2">
                                                <i class="fas fa-clock mr-2"></i>
                                                {{ $agenda->jam_mulai }}
                                            </p>
                                            <div class="deskripsi-kegiatan mt-3">
                                                <h6 class="text-dark">Deskripsi Kegiatan:</h6>
                                                <div class="bg-light p-3 rounded text-left">
                                                    {!! $agenda->deskripsi_kegiatan !!}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- QR Code Container -->
                                        <div class="qr-container mb-4">
                                            <div class="card bg-light">
                                                <div class="card-body text-center py-4">
                                                    {!! QrCode::size(250)->generate(url('dashboard/user/show-qr/' . $agenda->qrcode)) !!}
                                                    <p class="text-muted mt-3 mb-0">Scan QR code di atas untuk melakukan
                                                        absensi</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Informasi Tambahan -->
                                        <div class="additional-info">
                                            <div class="alert alert-info">
                                                <h6><i class="fas fa-info-circle mr-2"></i>Petunjuk Penggunaan:</h6>
                                                <ul class="mb-0 pl-3">
                                                    <li>Buka aplikasi scanner QR code di smartphone Anda</li>
                                                    <li>Arahkan kamera ke QR code di atas</li>
                                                    <li>Ikuti instruksi untuk melakukan absensi</li>
                                                    <li>Pastikan lokasi GPS Anda aktif</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Tombol Aksi -->
                                        <div class="action-buttons mt-4">
                                            <a href="{{ route('user.absensi.create') }}" class="btn btn-warning">
                                                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Dashboard
                                            </a>
                                            <button onclick="window.print()" class="btn btn-primary">
                                                <i class="fas fa-print mr-2"></i>Cetak QR Code
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('css')
    <style>
        .qr-container {
            position: relative;
            display: inline-block;
        }

        .qr-container::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, #6777ef, #b224ef);
            border-radius: 15px;
            z-index: -1;
            opacity: 0.1;
        }

        .agenda-info {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            border-left: 4px solid #6777ef;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .action-buttons .btn {
                width: 200px;
            }
        }

        /* Style untuk print */
        @media print {

            .action-buttons,
            .section-header-breadcrumb,
            .alert {
                display: none !important;
            }

            .qr-container {
                page-break-inside: avoid;
            }
        }
    </style>
@endpush
