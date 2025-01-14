@include('layout.header')
        <h3>buku</h3>
        <a href="{{ route('buku.create') }}" class="tombol">tambah</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>kategori</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <body>
                @foreach ($allbuku as $key => $r)
                <tr>
                <td>{{$key +1 }}</td>
                <td>{{$r->judul}}</td>
                <td>{{$r->Pengarang}}</td>
                <td>{{$r->Tahun_terbit}}</td>
                <td>{{$r->penerbit->nama_penerbit}}</td>
                <td>{{$r->kategori->nama_kategori}}</td>
                <td>
                    <form action="{{route('buku.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('buku.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('buku.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>

                    </form>
                </td>
                </tr>
                @endforeach
            </body>
        </table>
@include('layout.footer')