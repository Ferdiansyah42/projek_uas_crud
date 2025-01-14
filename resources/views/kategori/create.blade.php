@include('layout.header')
        <h3>Buat kategori</h3>
     <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="" placeholder="Masukan nama kategori">
        </div>
        <button type="submit" class="tombol">Submid</button>
     </form>   

@include('layout.footer')