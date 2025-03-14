<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <div class="container text-left">
        <div class="row d-flex gap-3">
            <div class="col card">
                <div class="card-body">
                    <h3>{{ number_format($totalBarangTerjual) }}</h3>
                    <p>Barang Terjual</p>
                </div>
            </div>
            <div class="col card">
                <div class="card-body">
                    <h3>Rp.{{ number_format($totalPenjualan) }}</h3>
                    <p>Penjualan</p>
                </div>
            </div>
            <div class="col card">
                <div class="card-body">
                    <h3>{{ number_format($totalOrder) }}</h3>
                    <p>Transaksi</p>
                </div>

            </div>
        </div>
        <div class="mt-4">
            <h3>#Order Terbaru</h3>
        </div>
        <div class="card overflow-hidden mt-2">

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
                    @forelse ($orderTerbaru as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
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
