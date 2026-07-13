<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChipIN – Tips Masuk</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    },
                    colors: {
                        brand: {
                            bg: '#f0f4ff',
                            sidebar: '#12121f',
                            primary: '#1a1a2e',
                            accent: '#00e5a0',
                            accent2: '#00c98c',
                            muted: '#6b7280',
                            border: '#e5e9f2',
                            red: '#ff4d6d',
                            activeBg: 'rgba(0,229,160,0.13)',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-brand-bg text-brand-primary min-h-screen flex text-sm">

    <aside class="w-60 min-h-screen bg-brand-sidebar flex flex-col py-6 fixed top-0 left-0 bottom-0 z-50">
        <div class="px-5 pb-7 text-2xl font-extrabold text-white tracking-tight">
            Chip<span class="text-brand-accent">IN</span>
        </div>

        <div class="px-3 pt-1.5 pb-1 text-[10px] font-bold tracking-widest text-[#4a5570] uppercase mt-2">Navigasi</div>
        <a href="/dashboard"
            class="nav-item flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg cursor-pointer text-[#9aa3b8] font-medium transition duration-150 hover:bg-white/5 hover:text-[#d1d9f0]">
            <svg class="w-4 h-4 flex-shrink-0 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Halaman Utama
        </a>

        <div class="px-3 pt-1.5 pb-1 text-[10px] font-bold tracking-widest text-[#4a5570] uppercase mt-4">Wallet</div>
        <a href="/kreator/wallet"
            class="nav-item flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg cursor-pointer text-[#9aa3b8] font-medium transition duration-150 hover:bg-white/5 hover:text-[#d1d9f0]">
            <svg class="w-4 h-4 flex-shrink-0 opacity-80" fill="none" viewBox="0 0 24 24">
                <rect x="2" y="6" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2" />
                <path d="M16 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="currentColor" />
                <path d="M2 10h20" stroke="currentColor" stroke-width="2" />
            </svg>
            Wallet
        </a>
        <a href="/kreator/tipmasuk"
            class="nav-item flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg cursor-pointer bg-brand-activeBg text-brand-accent font-semibold transition duration-150">
            <svg class="w-4 h-4 flex-shrink-0 opacity-80" fill="none" viewBox="0 0 24 24">
                <path d="M20 12V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h6" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" />
                <path d="M16 19l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            Tips Masuk
        </a>

        <div class="px-3 pt-1.5 pb-1 text-[10px] font-bold tracking-widest text-[#4a5570] uppercase mt-4">Features</div>
        <div class="flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg text-[#9aa3b8] font-medium">
            <svg class="w-4 h-4 flex-shrink-0 opacity-80" fill="none" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
            Stream Overlay
        </div>
        <div class="pl-5 flex flex-col gap-0.5">
            <a href="/kreator/tip"
                class="nav-item flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg cursor-pointer text-[#9aa3b8] text-13px font-medium transition duration-150 hover:bg-white/5 hover:text-[#d1d9f0]">
                <svg class="w-3.5 h-3.5 flex-shrink-0 opacity-80" fill="none" viewBox="0 0 24 24">
                    <path
                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                        stroke="currentColor" stroke-width="2" />
                </svg>
                Tip
            </a>
            <a href="/kreator/qrcode"
                class="nav-item flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg cursor-pointer text-[#9aa3b8] text-13px font-medium transition duration-150 hover:bg-white/5 hover:text-[#d1d9f0]">
                <svg class="w-3.5 h-3.5 flex-shrink-0 opacity-80" fill="none" viewBox="0 0 24 24">
                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor"
                        stroke-width="2" />
                    <path d="M9 3v18M15 3v18M3 9h18M3 15h18" stroke="currentColor" stroke-width="2" />
                </svg>
                QR Code
            </a>
        </div>

        <div class="mt-auto border-t border-white/5 pt-3">
            <div class="flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg">
                <div
                    class="w-8 h-8 rounded-full bg-gradient-to-br from-brand-accent to-[#00a8d4] flex items-center justify-center font-bold text-sm text-brand-sidebar flex-shrink-0">
                    {{ substr($user->creatorProfile->username, 0, 1) }}</div>
                <div class="flex-1 min-w-0">
                    <strong class="block text-white text-xs truncate">{{ $user->creatorProfile->username }}</strong>
                    <small class="text-[#4a5570] text-[11px]">Creator</small>
                </div>
            </div>
            <div class="px-2">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center gap-2.5 py-2.5 px-4 text-brand-red text-xs font-semibold rounded-lg transition duration-150 hover:bg-brand-red/10">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <main class="ml-60 flex-1 py-9 px-10 min-h-screen">
        <div id="page-tipsmasuk" class="page">
            <h1 class="text-3xl font-extrabold tracking-tight mb-7">Tips</h1>

            @if (session('success'))
                <div class="mb-5 p-3 bg-green-50 border border-green-200 text-green-700 rounded-lg text-xs">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex border-b-2 border-brand-border mb-6">
                <div
                    class="py-2.5 px-5 text-xs font-semibold text-brand-primary border-b-2 border-brand-accent -mb-[2px]">
                    SEMUA</div>
            </div>

            <div class="bg-white rounded-xl border border-brand-border p-6">
                @if ($donations->isEmpty())
                    <div class="flex flex-col items-center justify-center py-20 px-5 text-center">
                        <div class="w-20 h-20 bg-brand-bg rounded-full flex items-center justify-center mb-5 text-3xl">🎁
                        </div>
                        <h3 class="text-lg font-bold mb-2">Wah, masih sepi nih!</h3>
                        <p class="text-xs text-brand-muted max-w-[320px] line-height-relaxed">Tips dari fans kamu bakal
                            muncul di sini. Yuk, share link tip kamu biar mulai dapet support! 🎉</p>
                    </div>
                @else
                    <table class="w-full text-sm">
                        <thead class="border-b border-brand-border">
                            <tr>
                                <th class="text-left p-3 text-xs font-bold tracking-wider text-brand-muted uppercase">Pengirim</th>
                                <th class="text-left p-3 text-xs font-bold tracking-wider text-brand-muted uppercase">Pesan</th>
                                <th class="text-left p-3 text-xs font-bold tracking-wider text-brand-muted uppercase">Nominal</th>
                                <th class="text-left p-3 text-xs font-bold tracking-wider text-brand-muted uppercase">Status</th>
                                <th class="text-left p-3 text-xs font-bold tracking-wider text-brand-muted uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $donation)
                                <tr class="border-b border-brand-border">
                                    <td class="p-3">{{ $donation->sender_name }}</td>
                                    <td class="p-3 text-brand-muted">{{ $donation->message ?? '-' }}</td>
                                    <td class="p-3 font-bold">Rp {{ number_format($donation->amount, 0, ',', '.') }}</td>
                                    <td class="p-3">
                                        @if ($donation->status === 'paid')
                                            <span class="px-2 py-1 bg-green-50 text-green-700 rounded-full text-xs font-semibold">Paid</span>
                                        @elseif ($donation->status === 'pending')
                                            <span class="px-2 py-1 bg-amber-50 text-amber-700 rounded-full text-xs font-semibold">Pending</span>
                                        @else
                                            <span class="px-2 py-1 bg-red-50 text-red-700 rounded-full text-xs font-semibold">Failed</span>
                                        @endif
                                    </td>
                                    <td class="p-3">
                                        @if ($donation->status === 'pending')
                                            <form action="{{ route('kreator.tipmasuk.confirm', $donation->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="text-xs font-semibold text-brand-accent2 hover:underline">
                                                    Konfirmasi
                                                </button>
                                            </form>
                                        @else
                                            <span class="text-xs text-brand-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $donations->links() }}
                    </div>
                @endif
            </div>
        </div>
    </main>

</body>

</html>