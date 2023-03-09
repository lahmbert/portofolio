@extends('template.index')
@section('konten')
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-pulsa-tab" data-bs-toggle="pill" data-bs-target="#pills-pulsa"
                type="button" role="tab" aria-controls="pills-pulsa" aria-selected="true">Pulsa</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-data-tab" data-bs-toggle="pill" data-bs-target="#pills-data" type="button"
                role="tab" aria-controls="pills-data" aria-selected="false">Paket Data</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-emoney-tab" data-bs-toggle="pill" data-bs-target="#pills-emoney"
                type="button" role="tab" aria-controls="pills-emoney" aria-selected="false">E-Money</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-voucher-tab" data-bs-toggle="pill" data-bs-target="#pills-voucher"
                type="button" role="tab" aria-controls="pills-voucher" aria-selected="false">Voucher</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-game-tab" data-bs-toggle="pill" data-bs-target="#pills-game" type="button"
                role="tab" aria-controls="pills-game" aria-selected="false">Game</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-pln-tab" data-bs-toggle="pill" data-bs-target="#pills-pln" type="button"
                role="tab" aria-controls="pills-pln" aria-selected="false">Token PLN</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-international-tab" data-bs-toggle="pill"
                data-bs-target="#pills-international" type="button" role="tab" aria-controls="pills-international"
                aria-selected="false">International</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-pulsa" role="tabpanel" aria-labelledby="pills-pulsa-tab">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Telkomsel</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Telkomsel')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Three</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Three')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Axis</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'AXIS')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Smartfren</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Smart')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">XL</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'XL')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Indosat</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Indosat')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">By.U</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'By.U')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">XIXI GAMES</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Xixi Games')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-data" role="tabpanel" aria-labelledby="pills-data-tab">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Paket Internet Telkomsel</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Telkomsel Paket Internet')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Paket Internet XL</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'XL Paket Internet')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Paket Internet Smartfren</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Smartfren Paket Internet')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Paket Internet Indosat</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Indosat Paket Internet')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Paket Internet Tri</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Tri Paket Internet')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Paket Internet Axis</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Axis Paket Internet')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-emoney" role="tabpanel" aria-labelledby="pills-emoney-tab">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">LinkAja</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'LinkAja')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Shopee Pay</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Shopee Pay')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">DANA</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'DANA')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">MAXIM</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'MAXIM')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">OVO</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'OVO')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">GoPay E-Money</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'GoPay E-Money')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Indomaret Card E-Money</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Indomaret Card E-Money')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Mandiri E-Toll</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Mandiri E-Toll')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">TIX ID</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'TIX ID')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-voucher" role="tabpanel" aria-labelledby="pills-voucher-tab">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Indomaret Card E-Money</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Indomaret Card E-Money')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Tokopedia</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Tokopedia')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Grab Gifts</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Indomaret Card E-Money')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Alfamart Voucher</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Alfamart Voucher')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Traveloka Voucher</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Traveloka Voucher')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">MAP e-Gift Voucher</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'MAP e-Gift Voucher')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Transmart Carrefour</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Transmart Carrefour')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-game" role="tabpanel" aria-labelledby="pills-game-tab">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Free Fire</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Free Fire')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Mobile Legend</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Mobile Legend')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Speed Drifters</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Speed Drifters')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Wifi ID</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Wifi ID')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Call of Duty Mobile</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Call of Duty Mobile')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Steam Sea</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Steam Sea')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Razer PIN</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Razer PIN')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Arena of Valor</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Arena of Valor')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Garena</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Garena')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Point Blank</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Point Blank')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Megaxus</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Megaxus')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Ragnarok M</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'Ragnarok M')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">PUBG Mobile</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'PUBG Mobile')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-pln" role="tabpanel" aria-labelledby="pills-pln-tab">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Token PLN</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Produk
                                    </th>
                                    <th>
                                        Nominal
                                    </th>
                                    <th>
                                        Masa Aktif
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($data as $item)
                                    @if ($item['product_description'] === 'PLN')
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $item['product_description'] }}
                                            </td>
                                            <td>
                                                {{ $item['product_nominal'] }}
                                            </td>
                                            <td>
                                                {{ $item['active_period'] }} Hari
                                            </td>
                                            <td>
                                                {{ $item['status'] }}
                                            </td>
                                            <td>
                                                Rp {{ number_format($item['product_price']) }},-
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-international" role="tabpanel" aria-labelledby="pills-international-tab">
            ...</div>
    </div>
    {{-- @forelse ($data as $item)
        @if ($item['product_type'] === 'data')
            <div class="card" style="width: 18rem;">
                <img src="{{ $item['icon_url'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-title">
                        {{ $item['product_description'] }}
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        @endif
    @empty
    @endforelse --}}
@endsection
