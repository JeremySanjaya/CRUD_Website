<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Halaman Contact</h3>
    <br>
    <ul>
        <li>Nama : {{ $nama }}</li>
        <li>Kelas : {{ $kelas }}</li>
        <li><a href={{ $linkedin }}>Akun Linkedin</a></li>
        <li><a href={{ $repository }}>Akun Repository</a></li>
    </ul>

</x-layout>
