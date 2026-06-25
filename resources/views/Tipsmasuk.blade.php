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
            Creative<span class="text-brand-accent">Hub</span>
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
            class="nav-item flex items-center gap-2.5 py-2.5 px-4 mx-2 rounded-lg cursor-pointer text-[#9aa3b8] font-medium transition duration-150 hover:bg-white/5 hover:text-[#d1d9f0]">
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
                    A</div>
                <div class="flex-1 min-w-0">
                    <strong class="block text-white text-xs truncate">creator29244</strong>
                    <small class="text-[#4a5570] text-[11px]">Creator</small>
                </div>
            </div>
            <div class="px-2">
                <a href="/logout"
                    class="flex items-center gap-2.5 py-2.5 px-4 text-brand-red text-xs font-semibold rounded-lg transition duration-150 hover:bg-brand-red/10">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Log Out
                </a>
            </div>
        </div>
    </aside>

    <main class="ml-60 flex-1 py-9 px-10 min-h-screen">
        <div id="page-tipsmasuk" class="page">
            <h1 class="text-3xl font-extrabold tracking-tight mb-7">Tips</h1>
            <div class="flex border-b-2 border-brand-border mb-6">
                <div
                    class="py-2.5 px-5 text-xs font-semibold text-brand-primary border-b-2 border-brand-accent -mb-[2px]">
                    SEMUA</div>
            </div>
            <div class="bg-white rounded-xl border border-brand-border p-6">
                <div class="flex flex-col items-center justify-center py-20 px-5 text-center">
                    <div class="w-20 h-20 bg-brand-bg rounded-full flex items-center justify-center mb-5 text-3xl">🎁
                    </div>
                    <h3 class="text-lg font-bold mb-2">Wah, masih sepi nih!</h3>
                    <p class="text-xs text-brand-muted max-w-[320px] line-height-relaxed">Tips dari fans kamu bakal
                        muncul di sini. Yuk, share link tip kamu biar mulai dapet support! 🎉</p>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
