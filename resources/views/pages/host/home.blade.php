<x-host.layout title="Home">

    <div class="container d-flex justify-content-center pt-5">
        <div class="row col-md-9" style="padding-top: 10rem">
            <div class="wrapper">
                <h1>Last Add</h1>
                <div class="section" style="padding-right: 2rem">
                    <table class="table table-dark table-bordered border-primary">
                        <tr class="table-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Soal</th>
                            <th scope="col">Jawaban</th>
                            <th scope="col">Skor</th>

                        </tr>
                        @foreach ($tanyas as $tanya)
                            <tr>
                                <td> {{ $tanya->id }} </td>
                                <td> {{ $tanya->soal }}</a> </td>
                                <td> {{ $tanya->jawaban }} </td>
                                <td> {{ $tanya->skor }} </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>

    </x-host>
