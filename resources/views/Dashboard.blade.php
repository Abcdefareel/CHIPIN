<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Unleash Your Creative Potential</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-['Plus_Jakarta_Sans',_'Inter',_sans-serif] bg-[#f8fafc] text-[#1e1b4b] antialiased min-h-screen">

    <!-- Navigation Bar -->
    <nav
        class="bg-white/75 backdrop-blur-xl border-b border-slate-200/70 h-16 flex items-center sticky top-0 z-50 transition-all duration-300">
        <div class="w-full max-w-[1100px] mx-auto px-6 flex items-center justify-between">
            <div class="flex items-center gap-2 font-bold text-[1.1rem] tracking-tight">
                <svg class="w-5 h-5 text-[#1e1b4b]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <circle cx="12" cy="12" r="4" />
                </svg>
                ChipIN — Unleash Your Creative Potential
            </div>

            <div class="flex items-center gap-3">
                <!-- User Badge -->
                <div class="flex items-center gap-3">
                    <!-- User Badge -->
                    <div
                        class="flex items-center gap-2 bg-[#eef2ff] border border-[#e2e8f0] px-3 py-1.5 rounded-full text-[0.875rem] font-semibold text-[#64748b]">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        {{ $user->username }}
                    </div>
                    <!-- Profile Dropdown Icon -->
                    <div
                        class="w-8 h-8 rounded-full bg-[#1e1b4b] text-white flex items-center justify-center font-bold text-xs cursor-pointer hover:bg-[#312e81] transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="w-full max-w-[1100px] mx-auto px-6 py-8">

        <!-- Outer Layout Grid: Sidebar (Left) & Content (Right) -->
        <div class="block md:table w-full border-spacing-0">
            <div class="block md:table-row">

                <!-- Sidebar Column -->
                <div class="block md:table-cell w-full md:w-[240px] align-top pb-6 md:pb-0 md:pr-8">
                    <div
                        class="bg-white border border-[#e2e8f0] rounded-2xl overflow-hidden shadow-[0_2px_16px_rgba(79,70,229,0.08)]">

                        <!-- Sidebar Accordion Header -->
                        <div
                            class="p-4 border-b border-[#e2e8f0] bg-[#eef2ff] flex items-center justify-between font-bold text-[0.875rem] text-[#1e1b4b]">
                            <span>Akun</span>
                            <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>

                        <!-- Sidebar Menu Items -->
                        <div class="p-2 flex flex-col gap-1">
                            <a href="/dashboard"
                                class="block text-[0.875rem] font-semibold px-3 py-2 rounded-xl transition-all bg-[#1e1b4b] text-white">
                                Profil
                            </a>
                            <a href="/dashboard/transaction"
                                class="block text-[0.875rem] font-semibold px-3 py-2 rounded-xl text-[#64748b] hover:bg-[#eef2ff] hover:text-[#1e1b4b] transition-all">
                                Transaksi
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Content Column -->
                <div class="block md:table-cell align-top w-full">
                    <div class="flex flex-col gap-6">

                        <!-- Section Tab Indicator (Personal) -->
                        <div class="flex border-b border-[#e2e8f0]">
                            <button
                                class="px-4 py-2 text-[0.875rem] font-bold text-[#1e1b4b] border-b-2 border-[#1e1b4b] -mb-px">
                                Personal
                            </button>
                        </div>

                        @if (!$user->creatorProfile)
                            <div
                                class="bg-[#27225c] text-white border border-black/40 rounded-2xl p-6 shadow-md flex flex-col sm:flex-row items-center gap-6 relative overflow-hidden">
                                <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#6366f1]/10 rounded-full blur-xl">
                                </div>

                                <div
                                    class="w-20 h-20 bg-[#c7d2fe] rounded-full flex items-center justify-center shrink-0 border border-white/20 shadow-inner">
                                    <svg class="w-10 h-10 text-[#1e1b4b]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="flex-1 w-full">
                                    <h3 class="text-[1.1rem] font-extrabold tracking-tight text-white mb-1">Buat Akun
                                        Kreatormu!</h3>
                                    <p class="text-[0.8rem] text-[rgba(255,255,255,0.7)] leading-relaxed mb-4">
                                        Identitasmu di Tako berasal dari akun kreator. Buat akun kreator untuk mulai
                                        menerima hadiah. Kamu bisa membuat maksimal 3 akun kreator.
                                    </p>

                                    <form action="{{ route('dashboard.kreator') }}" method="POST">
                                        @csrf
                                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 items-end">
                                            <div>
                                                <label
                                                    class="block text-[0.75rem] font-bold text-[rgba(255,255,255,0.8)] mb-1">Nama
                                                    <span class="text-red-400">*</span></label>
                                                <input type="text" name="name" placeholder="Siluman Taplak Meja"
                                                    class="w-full bg-[#312e81] border border-[#64748b] text-white rounded-xl text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-[#6366f1]" />
                                            </div>
                                            <div>
                                                <label
                                                    class="block text-[0.75rem] font-bold text-[rgba(255,255,255,0.8)] mb-1">Username
                                                    <span class="text-red-400">*</span></label>
                                                <input type="text" name="username" placeholder="SiManja"
                                                    class="w-full bg-[#312e81] border border-[#64748b] text-white rounded-xl text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-[#6366f1]" />
                                            </div>
                                            <div>
                                                <button
                                                    class="w-full bg-[#6366f1] text-white font-bold text-[0.875rem] px-4 py-1.5 rounded-xl hover:bg-[#4f46e5] transition-colors border border-transparent"
                                                    type="submit">
                                                    Jadi Kreator
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div
                                class="bg-[#27225c] text-white border border-black/40 rounded-2xl p-6 shadow-md relative overflow-hidden">
                                <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#6366f1]/10 rounded-full blur-xl">
                                </div>
                                <h3 class="text-[1.1rem] font-extrabold tracking-tight text-white mb-1">Akun Kreator
                                    Aktif</h3>
                                <p class="text-[0.85rem] text-[rgba(255,255,255,0.7)]">Nama: <span
                                        class="font-semibold text-white">{{ $user->creatorProfile->name }}</span></p>
                                <p class="text-[0.85rem] text-[rgba(255,255,255,0.7)]">Username: <span
                                        class="font-semibold text-white">{{ $user->creatorProfile->username }}</span>
                                </p>

                                <div class="mt-4 flex items-center gap-2">
                                    <input type="text" id="donateLink" readonly
                                        value="{{ url('/donate/' . $user->creatorProfile->username) }}"
                                        class="flex-1 bg-[#312e81] border border-[#64748b] text-white rounded-xl text-[0.8rem] px-3 py-2 focus:outline-none" />
                                    <button type="button" id="copyLinkBtn"
                                        class="bg-[#6366f1] text-white font-semibold text-[0.8rem] px-4 py-2 rounded-xl hover:bg-[#4f46e5] transition-colors whitespace-nowrap">
                                        Copy Link
                                    </button>
                                </div>

                                <a href="{{ route('wallet') }}"
                                    class="inline-block mt-4 bg-[#6366f1] text-white font-bold text-[0.875rem] px-4 py-1.5 rounded-xl hover:bg-[#4f46e5] transition-colors no-underline">
                                    Lobby Kreator
                                </a>
                            </div>
                        @endif

                        @if (session('success'))
                            <div
                                class="rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Panel 1: Profil -->
                        <div
                            class="bg-white border border-[#e2e8f0] rounded-2xl shadow-[0_2px_16px_rgba(79,70,229,0.08)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#e2e8f0] bg-[#eef2ff] flex items-center justify-between font-bold text-[0.875rem] text-[#1e1b4b]">
                                <span>Profil</span>
                                <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <form action="{{ route('dashboard.update') }}" method="POST"
                                class="p-6 flex flex-col gap-4">
                                @csrf
                                @method('PUT')
                                <p class="text-[0.8rem] text-[#64748b] leading-relaxed">
                                    Akun pribadi hanya untuk masuk dan keamanan. Nama, foto, dan identitas publik
                                    berasal dari akun kreator kamu.
                                </p>

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Email <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" value="{{ $user->email }}" disabled
                                        class="w-full bg-[#eef2ff] border border-[#e2e8f0] text-[#64748b] rounded-xl text-[0.875rem] px-3 py-2 cursor-not-allowed" />
                                    <span class="block text-[0.7rem] text-[#94a3b8] mt-1">Email saat ini. Gunakan form
                                        di bawah untuk mengubah email.</span>
                                </div>

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Nomor Telepon
                                        (SMS)</label>
                                    <input type="text" name="phone_number"
                                        value="{{ old('phone_number', $user->phone_number) }}"
                                        placeholder="+62 XXX-XXXX-XXXX"
                                        class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    <span class="block text-[0.7rem] text-[#94a3b8] mt-1">Nomor ini dapat digunakan
                                        untuk kebutuhan OTP.</span>
                                </div>

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Zona
                                        Waktu</label>
                                    <div class="relative">
                                        <select name="timezone"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 appearance-none focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10">
                                            <option value="Asia/Jakarta"
                                                {{ old('timezone', $user->timezone) === 'Asia/Jakarta' ? 'selected' : '' }}>
                                                Asia/Jakarta</option>
                                            <option value="Asia/Makassar"
                                                {{ old('timezone', $user->timezone) === 'Asia/Makassar' ? 'selected' : '' }}>
                                                Asia/Makassar</option>
                                            <option value="Asia/Jayapura"
                                                {{ old('timezone', $user->timezone) === 'Asia/Jayapura' ? 'selected' : '' }}>
                                                Asia/Jayapura</option>
                                        </select>
                                        <div
                                            class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-[#64748b]">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 pt-2">
                                    <div class="flex items-center h-5">
                                        <input id="block-gift" name="block_anonymous_gift" type="checkbox"
                                            {{ old('block_anonymous_gift', $user->block_anonymous_gift) ? 'checked' : '' }}
                                            class="w-4 h-4 text-[#6366f1] border-[#e2e8f0] rounded focus:ring-0" />
                                    </div>
                                    <div>
                                        <label for="block-gift"
                                            class="block text-[0.875rem] font-bold text-[#1e1b4b]">Blokir hadiah anonim
                                            ke emailku</label>
                                        <p class="text-[0.75rem] text-[#64748b] mt-0.5">Jika aktif, pengirim yang belum
                                            login tidak bisa mengirim hadiah memakai email ini. Mereka harus login ke
                                            akun ini terlebih dahulu.</p>
                                    </div>
                                </div>

                                <div class="pt-2">
                                    <button type="submit"
                                        class="w-full bg-gradient-to-r from-indigo-600 to-violet-600 text-white font-semibold text-[0.875rem] py-2.5 rounded-xl hover:from-indigo-500 hover:to-violet-500 transition-all duration-300 shadow-[0_4px_16px_rgba(99,102,241,0.25)] border border-transparent">
                                        Simpan Profil
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Panel 2: Password -->
                        <div
                            class="bg-white border border-[#e2e8f0] rounded-2xl shadow-[0_2px_16px_rgba(79,70,229,0.08)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#e2e8f0] bg-[#eef2ff] flex items-center justify-between font-bold text-[0.875rem] text-[#1e1b4b]">
                                <span>Password</span>
                                <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <form action="{{ route('dashboard.password') }}" method="POST"
                                class="p-6 flex flex-col gap-4">
                                @csrf
                                @method('PUT')

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Password Lama
                                        <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <input type="password" name="old_password"
                                            placeholder="Masukkan password lama"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 pr-10 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Password Baru
                                        <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <input type="password" name="new_password"
                                            placeholder="Masukkan password baru"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 pr-10 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Konfirmasi
                                        Password <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <input type="password" name="confirm_password"
                                            placeholder="Ulangi password baru"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 pr-10 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                </div>

                                <div class="pt-2">
                                    <button type="submit"
                                        class="w-full bg-gradient-to-r from-indigo-600 to-violet-600 text-white font-semibold text-[0.875rem] py-2.5 rounded-xl hover:from-indigo-500 hover:to-violet-500 transition-all duration-300 shadow-[0_4px_16px_rgba(99,102,241,0.25)] border border-transparent">
                                        Ganti Password
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Panel 3: Ubah Email -->
                        <div
                            class="bg-white border border-[#e2e8f0] rounded-2xl shadow-[0_2px_16px_rgba(79,70,229,0.08)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#e2e8f0] bg-[#eef2ff] flex items-center justify-between font-bold text-[0.875rem] text-[#1e1b4b]">
                                <span>Ubah Email</span>
                                <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <form action="{{ route('dashboard.email') }}" method="POST"
                                class="p-6 flex flex-col gap-4">
                                @csrf
                                @method('PUT')

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Email Baru <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" name="new_email" placeholder="email-baru@example.com"
                                        class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                </div>

                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Password Saat Ini
                                        <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <input type="password" name="current_password"
                                            placeholder="Masukkan password saat ini"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 pr-10 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                </div>

                                <div class="pt-2">
                                    <button type="submit"
                                        class="w-full bg-[#6366f1] text-white font-semibold text-[0.875rem] py-2.5 rounded-xl hover:bg-[#4f46e5] transition-colors border border-transparent">
                                        Mulai Perubahan Email
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer Section -->
    <footer class="bg-white border-t border-[#e2e8f0] py-10 text-center px-6">
        <div class="max-w-[1100px] mx-auto flex flex-col items-center gap-4">
            <div class="flex items-center gap-1.5 font-bold text-[0.95rem] text-[#1e1b4b]">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <circle cx="12" cy="12" r="10" />
                    <circle cx="12" cy="12" r="4" />
                </svg>
                ChipIN
            </div>

            <div class="flex flex-wrap justify-center gap-6 my-2">
                <a class="text-[0.75rem] text-[#64748b] hover:text-[#1e1b4b] transition-colors"
                    href="#">Features</a>
                <a class="text-[0.75rem] text-[#64748b] hover:text-[#1e1b4b] transition-colors"
                    href="#">Pricing</a>
                <a class="text-[0.75rem] text-[#64748b] hover:text-[#1e1b4b] transition-colors"
                    href="#">Creators</a>
                <a class="text-[0.75rem] text-[#64748b] hover:text-[#1e1b4b] transition-colors"
                    href="#">Support</a>
                <a class="text-[0.75rem] text-[#64748b] hover:text-[#1e1b4b] transition-colors"
                    href="#">Privacy</a>
            </div>

            <div class="text-[0.75rem] text-[#94a3b8] mt-2">
                © 2026 ChipIN Co. All rights reserved.
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyBtn = document.getElementById('copyLinkBtn');
            const donateInput = document.getElementById('donateLink');

            if (copyBtn && donateInput) {
                copyBtn.addEventListener('click', function() {
                    // Cara modern (butuh HTTPS atau localhost)
                    if (navigator.clipboard && window.isSecureContext) {
                        navigator.clipboard.writeText(donateInput.value)
                            .then(showCopied)
                            .catch(fallbackCopy);
                    } else {
                        fallbackCopy();
                    }

                    function fallbackCopy() {
                        donateInput.removeAttribute('readonly');
                        donateInput.select();
                        donateInput.setSelectionRange(0, 99999);
                        try {
                            document.execCommand('copy');
                            showCopied();
                        } catch (err) {
                            console.error('Copy failed', err);
                        }
                        donateInput.setAttribute('readonly', true);
                    }

                    function showCopied() {
                        const originalText = copyBtn.textContent;
                        copyBtn.textContent = 'Copied!';
                        setTimeout(() => {
                            copyBtn.textContent = originalText;
                        }, 1500);
                    }
                });
            }
        });
    </script>
</body>

</html>
