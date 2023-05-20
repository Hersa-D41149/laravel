<x-users.layout title="viewrs">

    <div class="wrapper">
        <div class="section" style="padding-right: 2rem">
            <table class="table table-dark table-bordered border-primary">
                <tr class="table-dark">
                    <th scope="col">Nomor</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Jawaban mu</th>
                </tr>
                {{-- @foreach ($tanyas as $tanya)
                    <tr>
                        <td> {{ $tanya->id }} </td>
                        <td> {{ $tanya->soal }}</a> </td>
                        <td> </td>

                    </tr>
                @endforeach --}}
                {{-- @foreach ($tanyas as $tanya)
                            <td>{{ $tanya->soal }} </td>
                        @endforeach --}}
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td></td>

                        <td>{{ $student->jawaban }} </td>
                    </tr>
                @endforeach


            </table>

        </div>
    </div>


    </x-users>
