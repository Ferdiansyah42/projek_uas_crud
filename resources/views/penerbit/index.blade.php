@include('layout.header')
        <h3>penerbit</h3>
        <a href="{{ route('penerbit.create') }}" class="tombol">tambah</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <body>
                @foreach ($allpenerbit as $key => $r)
                <tr>
                <td>{{$key +1 }}</td>
                <td>{{$r->nama_penerbit}}</td>
                <td>
                    <form action="{{route('penerbit.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('penerbit.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('penerbit.edit', $r->id) }}" class="tombol">Edit</a>
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