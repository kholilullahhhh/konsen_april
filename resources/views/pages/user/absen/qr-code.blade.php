@extends('layouts.app', ['title' => 'Absensi Via Qr'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Absensi via QR Code</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $agenda->judul }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.absensi.store') }}" method="POST" id="absensiForm">
                            @csrf
                            <input type="hidden" name="agenda_id" value="{{ $agenda->id }}">
                            <div class="form-group row mb-4">
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" id="user_latitude" name="user_latitude" class="form-control"
                                        placeholder="Latitude" readonly>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" id="user_longitude" name="user_longitude" class="form-control"
                                        placeholder="Longitude" readonly>
                                </div>
                            </div>
                            <button type="button" id="get-location" class="btn btn-info mb-3">📍 Ambil Lokasi Saat
                                Ini</button>

                            <div class="form-group">
                                <label>Status Kehadiran</label>
                                <select name="status" class="form-control" required>
                                    <option value="hadir">Hadir</option>
                                    <option value="terlambat">Terlambat</option>
                                    <option value="izin">Izin</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="tidak hadir">Tidak Hadir</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Absensi</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script>
            document.getElementById('get-location').addEventListener('click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        document.getElementById('user_latitude').value = position.coords.latitude;
                        document.getElementById('user_longitude').value = position.coords.longitude;
                        console.log('Lokasi berhasil diambil:', position.coords);
                    }, function(error) {
                        alert('Gagal mengambil lokasi: ' + error.message);
                    }, {
                        enableHighAccuracy: true,
                        timeout: 10000,
                        maximumAge: 0
                    });
                } else {
                    alert('Browser tidak mendukung geolocation.');
                }
            });
        </script>
    @endpush
@endsection
