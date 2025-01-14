@include('layout.header')
        <h3>Detail penerbit</h3>
        <table>
            <body>
                <tr>
                    <td widht="150px">Nama penerbit</td>
                    <td widht="2px">:</td>
                    <td>{{ $penerbit->nama_penerbit }}</td>
                </tr>
            </body>
        </table>
@include('layout.footer')