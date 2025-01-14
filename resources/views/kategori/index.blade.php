@include('layout.header')
        <h3>kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">tambah</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <body>
                @foreach ($allkategori as $key => $r)
                <tr>
                <td>{{$key +1 }}</td>
                <td>{{$r->nama_kategori}}</td>
                <td>
                    <form action="{{route('kategori.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('kategori.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">Edit</a>
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