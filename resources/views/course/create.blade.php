<x-layouts.master nav="Kursus">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card shadow-sm">
        <div class="card-header">
          <h2 class="card-title fs-2">Tambah Data Kursus</h2>
          <div class="card-toolbar">
            <a href="{{ route('course.index') }}" class="btn btn-sm btn-outline-primary">
              Kembali
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('course.store') }}" method="post">
            @csrf
            <div class="form-floating mb-5">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Kursus"
                value="{{ old('judul') }}" required />
              <label for="judul">Judul Kursus</label>
              @error('judul')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-floating mb-5">
              <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="deskripsi" style="height: 100px"
                required>{{ old('deskripsi') }}</textarea>
              <label for="deskripsi">Deskripsi</label>
              @error('deskripsi')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-floating mb-7">
              <input type="number" class="form-control" id="durasi" name="durasi" placeholder="Durasi"
                value="{{ old('durasi') }}" required />
              <label for="durasi">Durasi</label>
              <span class="form-text">*Durasi dalam menit</span>
              @error('durasi')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layouts.master>
