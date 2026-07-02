<!DOCTYPE html>
<html>
<head>
    <title>SportXFest - Admin Contact Panel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="admin-body">

<header class="header">
    <div class="logo">
        SportXFest <span class="badge-admin">admin</span>
    </div>

    <nav class="nav">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-arrow-left"></i> Lihat Web (User)
        </a>
    </nav>
</header>

<div class="admin-container">
    <div class="admin-card">
    @if(session('success'))
    <div style="
        background:#d4edda;
        color:#155724;
        padding:15px;
        border-radius:10px;
        margin-bottom:20px;
    ">
        {{ session('success') }}
    </div>
@endif

        <div class="admin-card-header">
            <h2>
                <i class="fa-solid fa-envelope-open-text"></i>
                Daftar Pesan Masuk
            </h2>

            <p>Kelola semua pesan dan saran dari pengunjung website SportXFest</p>
        </div>

        <div class="table-responsive">

            <table class="admin-table">

                <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th style="width:15%;">Nama</th>
                        <th style="width:20%;">Email</th>
                        <th style="width:15%;">Subject</th>
                        <th style="width:30%;">Pesan</th>
                        <th style="width:15%;">Tanggal Kirim</th>
                        <th style="width:5%;">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @if($contacts->count() > 0)

                    @foreach($contacts as $contact)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <strong>{{ $contact->nama }}</strong>
                        </td>

                        <td>
                            <a href="mailto:{{ $contact->email }}" class="email-link">
                                {{ $contact->email }}
                            </a>
                        </td>

                        <td>{{ $contact->subject }}</td>

                        <td>
                            <div class="message-text">
                                {{ $contact->pesan }}
                            </div>
                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($contact->created_at)->format('d M Y - H:i') }} WIB
                        </td>

                        <td>
                             <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                 <button
                                    type="submit"
                                    class="btn-delete"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">

                                    <i class="fa-solid fa-trash-can"></i>

                                 </button>

                            </form>
                        </td>

                    </tr>

                    @endforeach

                @else

                    <tr>
                        <td colspan="7" class="empty-table">
                            <i class="fa-regular fa-folder-open"></i><br>
                            Belum ada pesan yang masuk.
                        </td>
                    </tr>

                @endif

                </tbody>

            </table>

        </div>

    </div>
</div>

<footer class="footer">
    <p class="copyright">
        © 2026 SportXFest - Admin Panel. All rights reserved.
    </p>
</footer>

</body>
</html>