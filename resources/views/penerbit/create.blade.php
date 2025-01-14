@include('layout.header')
        <h3>Buat penerbit</h3>
     <form action="{{ route('penerbit.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Penerbit</label>
            <input type="text" name="nama_penerbit" id="" placeholder="Masukan nama penerbit">
        </div>
        <button type="submit" class="tombol">Submid</button>
     </form>   

@include('layout.footer')