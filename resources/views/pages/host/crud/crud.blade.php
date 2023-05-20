<x-crud.layout title="Crud">

    <div class="wrapper">

        <div class="section" style="padding-right: 2rem">
            <table class="table table-dark table-bordered border-primary">
                <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">Skor</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($tanyas as $tanya)
                    <tr>
                        <td>{{ $tanya->id }}</td>
                        <td> {{ $tanya->soal }}</a> </td>
                        <td> {{ $tanya->jawaban }} </td>
                        <td> {{ $tanya->skor }} </td>
                        {{-- <a href="{{ route('show') }}">{{ $tanya->name }}</a>
                       --}}

                        <td>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <form action="{{ route('edit', $tanya) }}" method="get">
                                    @csrf
                                    <button type="submit" name="edit" id="edit" class="btn btn-success">
                                        Edit
                                    </button>
                                </form>
                                <form action="{{ route('delete', $tanya) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" name="edit" id="edit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </table>



        </div>
    </div>

    </x-crud>
