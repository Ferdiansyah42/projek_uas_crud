@include('layout.header')
        <h3>Detail kategori</h3>
        <table>
            <body>
                <tr>
                    <td widht="150px">Nama kategori</td>
                    <td widht="2px">:</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                </tr>
            </body>
        </table>
@include('layout.footer')