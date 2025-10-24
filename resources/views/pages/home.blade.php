@extends('layouts.app')

@section('title', 'CV')

@section('content')
    <section>
        <h2>Profil</h2>
        <p>
            Saya adalah seorang mahasiswa Universitas Teknologi Yogyakarta, jurusan Sistem Informasi
            yang aktif mengembangkan keterampilan melalui organisasi. Berpengalaman dalam digital
            marketing, manajemen skill, serta memiliki keterampilan pemrograman PHP. Serta
            mampu berkomunikasi dan berkolaborasi dengan baik.
        </p>
    </section>

    <section>
        <h2>Pendidikan</h2>
        <table>
            <tr>
                <th>Universitas</th>
                <th>Jurusan</th>
                <th>Tahun</th>
            </tr>
            <tr>
                <td>Universitas Teknologi Yogyakarta</td>
                <td>Sistem Informasi</td>
                <td>2023 - Sekarang</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Pengalaman Magang</h2>
        <table>
            <tr>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Durasi</th>
            </tr>
            <tr>
                <td>Skanida Mart</td>
                <td>Cashier</td>
                <td>Mei 2021 - Oktober 2021</td>
            </tr>
            <tr>
                <td>PT. Sumber Alfaria Trijaya Tbk</td>
                <td>Memeriksa stok barang</td>
                <td>Januari 2022 - September 2022</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Pengalaman Organisasi</h2>
        <table>
            <tr>
                <th>Organisasi</th>
                <th>Durasi</th>
            </tr>
            <tr>
                <td>Kelompok Studi Pasar Modal</td>
                <td>2024 - Sekarang</td>
            </tr>
        </table>
    </section>
@endsection
