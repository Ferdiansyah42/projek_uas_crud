@include('layout.header')
        <h3>Buat buku</h3>
     <form action="{{ route('buku.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">judul Buku</label>
            <input type="text" name="Judul" id="" placeholder="Masukan judul buku">
        </div>
        
        <div class="form-group">
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" id="" placeholder="Masukan nama pengarang">
        </div>

        <div class="form-group">
            <label for="">Tahun terbit</label>
            <input type="text" name="tahun_terbit" id="" placeholder="Masukan tahun terbit">
        </div>

        <div class="form-group">
            <label for="">Penerbit</label>
            <select name="penerbit_id" id="">
               @foreach ($penerbit as $p)
               <option value="{{ $p->id}}"> $p->nama_penerbit</option>              
               @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Kategori</label>
            <select name="kategori_id" id="">
               @foreach ($kategori as $p)
               <option value="{{ $p->id}}"> $p->nama_kategori</option>              
               @endforeach
            </select>
        </div>

        <button type="submit" class="tombol">Submid</button>
     </form>   

@include('layout.footer')