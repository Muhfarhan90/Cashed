<x-layout>
    <x-slot:title>Users</x-slot:title>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mb-2">
            <form class="d-flex gap-2" method="get">
                <input type="text" class="form-control w-auto" placeholder="Cari user" name="search"
                    value="{{ request()->search }}">
                <button type="submit" class="btn btn-dark">Cari</button>
            </form>
            <a href="{{ route('users.create') }}" class="btn btn-dark ">
                Tambah
            </a>
        </div>

        <div class="card overflow-hidden">

            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">Hapus</button>

                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>

                            <td colspan="3" class="text-center">Belum ada user</td>
                        </tr>
                    @endforelse



                </tbody>
            </table>
        </div>
    </div>


</x-layout>
