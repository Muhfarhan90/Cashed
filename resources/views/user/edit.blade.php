<x-layout>
    <x-slot:title>Edit Users</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <x-text-input label="Nama" value="{{ old('name', $user->name) }}"
                                placeholder="Masukkan nama user" name="name"></x-text-input>
                            <x-text-input label="Email" value="{{ old('email', $user->email) }}"
                                placeholder="Masukkan email user" name="email" type="email"></x-text-input>
                            <x-text-input label="Password" value="" placeholder="Masukkan password user"
                                name="password" type="password"></x-text-input>

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
