<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perpustakaan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <style> 
        </style>
    
        <div class="container">
            <br/>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Pengarang</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @include('header')
                    @if(count($book) > 0)
                    @foreach($book->all() as $book)
                    <th>{{$book->id}}</th>
                    <th>{{$book->judul}}</th>
                    <th>{{$book->penerbit}}</th>
                    <th>{{$book->tahun_terbit}}</th>
                    <th>{{$book->pengarang}}</th>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
