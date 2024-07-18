<x-layout>
    <x-slot:title>Tambah Users</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <x-text-input label="Nama" value="{{ old('name') }}" placeholder="Masukkan nama user"
                                name="name"></x-text-input>
                            <x-text-input label="Email" value="{{ old('email') }}" placeholder="Masukkan email user"
                                name="email" type="email"></x-text-input>
                            <x-text-input label="Password" value="{{ old('email') }}"
                                placeholder="Masukkan password user" name="password" type="password"></x-text-input>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                                <button class="btn btn-dark">Simpan</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layout>
