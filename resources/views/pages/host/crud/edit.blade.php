<x-crud.layout title="edit">

    <div class="wrapper">
        <div class="section" style="padding-right: 2rem">
            <form action="{{ route('update', $tanya) }}" method="post">
                @method('patch')
                @csrf
                <input type="text" name="soal" value="{{ $tanya->soal }}">
                <input type="text" name="jawaban" value="{{ $tanya->jawaban }}">
                <input type="text" name="skor" value="{{ $tanya->skor }}">
                <button type="submit">Edit</button>

            </form>
        </div>
    </div>

    </x-crud>
