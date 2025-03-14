<x-layout>
    <x-slot:title>Orders</x-slot:title>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mb-3">
            <form class="d-flex gap-2" method="get">
                <input type="text" class="form-control w-auto" placeholder="Cari order" name="search"
                    value="{{ request()->search }}">
                <button type="submit" class="btn btn-dark">Cari</button>
            </form>
            <a href="{{ route('orders.create') }}" class="btn btn-dark ">
                Buat Order Baru
            </a>
        </div>

        <div class="card overflow-hidden">

            <table class="table m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>User</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at->format('d/m/y') }}</td>
                            <td>{{ $order->customer }}</td>
                            <td>{{ number_format($order->payment) }}</td>
                            <td>{{ number_format($order->total) }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td><a href="{{ route('orders.show', ['order' => $order->id]) }}"
                                    class="btn btn-primary">Lihat</a></td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


</x-layout>
