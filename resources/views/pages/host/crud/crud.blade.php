<x-crud.layout title="Crud">

    <div class="wrapper">

        <div class="section" style="padding-right: 2rem">
            <table class="table table-dark table-bordered border-primary">
                <tr class="table-dark">
                    <th scope="col">Nomor</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">Skor</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($tanyas as $tanya)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
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
                                    <button type="submit" name="delete" id="delete" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </table>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

            <!-- JavaScript -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                $('#delete').on('click', function() {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    });
                });
            </script>
        </div>
    </div>

    </x-crud>
