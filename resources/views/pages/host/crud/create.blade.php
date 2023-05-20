<x-crud.layout title="Edit">

    <div class="container d-flex justify-content-center pt-5" style="padding-top: 10rem">
        <div class="col-md-9" style="padding-top: 10rem">
            <h2 class="text-cneter pb-3 text-danger">INputs</h2>

            <form action="{{ route('store') }}" method="post" id="add_data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif

                <table class="table table-bordered show_item" id="tablee">
                    <tr>
                        <th>Soal</th>
                        <th>Jawaban</th>
                        <th>Skor</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="addMoreInputFields[0][soal]" placeholder="Soal"
                                class="form-control">
                        </td>
                        <td><input type="text" name="addMoreInputFields[0][jawaban]" placeholder="jawaban"
                                class="form-control">
                        </td>
                        <td><input type="text" name="addMoreInputFields[0][skor]" placeholder="Skor"
                                class="form-control">
                        </td>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-success add_jawaban">ADD
                            </button>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary col-md-2">Add</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function() {
            ++i;
            $("#tablee").append(
                '<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][soal]" placeholder="Soal"class="form-control"></td><td><input type="text" name="addMoreInputFields[' +
                i +
                '][jawaban]" placeholder="jawaban"class="form-control"></td><td><input type="text" name="addMoreInputFields[' +
                i +
                '][skor]" placeholder="Skor"class="form-control"></td><td><button type="button" name="add" id="add" class="btn btn-danger remove-input-filed">remove</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-filed', function() {
            $(this).parents('tr').remove();
        });
    </script>
</x-crud.layout>
