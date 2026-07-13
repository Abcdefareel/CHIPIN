<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Unleash Your Creative Potential</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-['Inter',_sans-serif] bg-[#f0f4f8] text-[#0d1117] antialiased min-h-screen">

    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-[#d0d7de] h-16 flex items-center sticky top-0 z-50">
        <div class="w-full max-w-[1100px] mx-auto px-6 flex items-center justify-between">
            <div class="flex items-center gap-2 font-bold text-[1.1rem] tracking-tight">
                <svg class="w-5 h-5 text-[#0d1117]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <circle cx="12" cy="12" r="4" />
                </svg>
                ChipIN — Unleash Your Creative Potential
            </div>

            <div class="flex items-center gap-3">
                <!-- User Badge -->
                <div
                    class="flex items-center gap-2 bg-[#f6f8fa] border border-[#d0d7de] px-3 py-1.5 rounded-full text-[0.875rem] font-semibold text-[#57606a]">
                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                    @Abcdefareel
                </div>
                <!-- Profile Dropdown Icon -->
                <div
                    class="w-8 h-8 rounded-full bg-[#0d1117] text-white flex items-center justify-center font-bold text-xs cursor-pointer hover:bg-[#24292f] transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
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
                        class="bg-white border border-[#d0d7de] rounded-[8px] overflow-hidden shadow-[0_1px_3px_rgba(0,0,0,.06)]">

                        <!-- Sidebar Accordion Header -->
                        <div
                            class="p-4 border-b border-[#d0d7de] bg-[#f6f8fa] flex items-center justify-between font-bold text-[0.875rem] text-[#0d1117]">
                            <span>Akun</span>
                            <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>

                        <!-- Sidebar Menu Items -->
                        <div class="p-2 flex flex-col gap-1">
                            <a href="/dashboard"
                                class="block text-[0.875rem] font-semibold px-3 py-2 rounded-[6px] text-[#57606a] hover:bg-[#f6f8fa] hover:text-[#0d1117] transition-all">
                                Profil
                            </a>
                            <a href="/dashboard/transaction"
                                class="block text-[0.875rem] font-semibold px-3 py-2 rounded-[6px] transition-all bg-[#0d1117] text-white">
                                Transaksi
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Content Column -->
                <div class="block md:table-cell align-top w-full">
                    <div class="flex flex-col gap-6">

                        <!-- Section Tab Indicator (Personal) -->
                        <div class="flex border-b border-[#d0d7de]">
                            <button
                                class="px-4 py-2 text-[0.875rem] font-bold text-[#0d1117] border-b-2 border-[#0d1117] -mb-px">
                                Personal
                            </button>
                        </div>

                        <!-- Panel 1: Riwayat Donasi -->
                        <div
                            class="bg-white border border-[#d0d7de] rounded-[8px] shadow-[0_1px_3px_rgba(0,0,0,.06)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#d0d7de] bg-[#f6f8fa] flex items-center justify-between font-bold text-[0.875rem] text-[#0d1117]">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#1a7f64]" fill="none" stroke="currentColor"
                                        stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8c-1.657 0-3 1.343-3 3v1H8v-1a4 4 0 118 0v1h-1v-1c0-1.657-1.343-3-3-3zM5 15h14v2H5z">
                                        </path>
                                    </svg>
                                    <span>Riwayat Donasi</span>
                                </div>
                            </div>

                            <div class="p-6 flex flex-col gap-4">
                                @if ($transactions->isEmpty())
                                    <div
                                        class="rounded-[6px] border border-dashed border-[#d0d7de] p-6 text-center text-[0.875rem] text-[#57606a]">
                                        Belum ada riwayat donasi.
                                    </div>
                                @else
                                    <div class="space-y-3">
                                        @foreach ($transactions as $transaction)
                                            <div class="rounded-[8px] border border-[#d0d7de] p-4">
                                                <div
                                                    class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
                                                    <div>
                                                        <p class="font-semibold text-[#0d1117]">
                                                            {{ optional($transaction->creatorProfile)->name ?? 'Creator' }}
                                                        </p>
                                                        <p class="text-[0.8rem] text-[#57606a]">
                                                            {{ $transaction->sender_name ?: 'Anonymous' }} •
                                                            {{ $transaction->created_at->format('d M Y, H:i') }}</p>
                                                        @if ($transaction->message)
                                                            <p class="mt-1 text-[0.8rem] text-[#57606a]">
                                                                {{ $transaction->message }}</p>
                                                        @endif
                                                    </div>
                                                    <div class="text-left md:text-right">
                                                        <p class="font-bold text-[#1a7f64]">Rp
                                                            {{ number_format($transaction->amount, 0, ',', '.') }}</p>
                                                        <span
                                                            class="inline-block mt-1 rounded-full bg-[#f6f8fa] px-2.5 py-1 text-[0.7rem] font-semibold uppercase tracking-wide text-[#57606a]">
                                                            {{ ucfirst($transaction->status) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Panel 2: Filter / Pencarian -->
                        <div
                            class="bg-white border border-[#d0d7de] rounded-[8px] shadow-[0_1px_3px_rgba(0,0,0,.06)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#d0d7de] bg-[#f6f8fa] flex items-center justify-between font-bold text-[0.875rem] text-[#0d1117]">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#1a7f64]" fill="none" stroke="currentColor"
                                        stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span>Filter / Pencarian</span>
                                </div>
                                <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>

                            <div class="p-6 flex flex-col gap-4">
                                <form action="{{ route('dashboard.transaction') }}" method="GET"
                                    class="flex flex-col gap-4">
                                    <!-- Input Pencarian -->
                                    <div>
                                        <label
                                            class="block text-[0.75rem] font-bold text-[#0d1117] mb-1">Pencarian</label>
                                        <input type="text" name="search" value="{{ request('search') }}"
                                            placeholder="Cari Sesuatu"
                                            class="w-full bg-white border border-[#d0d7de] text-[#0d1117] rounded-[6px] text-[0.875rem] px-3 py-2 focus:outline-none focus:border-[#0d1117]" />
                                    </div>

                                    <!-- Grid Filter Baris Kedua -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label class="block text-[0.75rem] font-bold text-[#0d1117] mb-1">Filter
                                                Tanggal
                                                Mulai</label>
                                            <input type="date" name="date_from" value="{{ request('date_from') }}"
                                                class="w-full bg-white border border-[#d0d7de] text-[#0d1117] rounded-[6px] text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-[#0d1117]" />
                                        </div>
                                        <div>
                                            <label class="block text-[0.75rem] font-bold text-[#0d1117] mb-1">Filter
                                                Tanggal
                                                Selesai</label>
                                            <input type="date" name="date_to" value="{{ request('date_to') }}"
                                                class="w-full bg-white border border-[#d0d7de] text-[#0d1117] rounded-[6px] text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-[#0d1117]" />
                                        </div>
                                        <div>
                                            <label class="block text-[0.75rem] font-bold text-[#0d1117] mb-1">Urutkan
                                                Berdasarkan</label>
                                            <div class="relative">
                                                <select name="sort"
                                                    class="w-full bg-white border border-[#d0d7de] text-[#0d1117] rounded-[6px] text-[0.875rem] px-3 py-2 appearance-none focus:outline-none focus:border-[#0d1117]">
                                                    <option value="desc"
                                                        {{ request('sort', 'desc') === 'desc' ? 'selected' : '' }}>
                                                        Terbaru</option>
                                                    <option value="asc"
                                                        {{ request('sort') === 'asc' ? 'selected' : '' }}>Terlama
                                                    </option>
                                                </select>
                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-[#57606a]">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Kategori Pil / Badge Filter -->
                                    <div class="flex flex-wrap gap-2 pt-2">
                                        <label
                                            class="flex items-center gap-2 text-[0.75rem] font-bold px-4 py-1.5 rounded-full transition-all bg-[#0d1117] text-white border border-transparent">
                                            <input type="radio" name="status" value="pending"
                                                {{ request('status') === 'pending' ? 'checked' : '' }} />
                                            Pending
                                        </label>
                                        <label
                                            class="flex items-center gap-2 text-[0.75rem] font-bold px-4 py-1.5 rounded-full transition-all bg-[#f6f8fa] text-[#0d1117] border border-[#d0d7de]">
                                            <input type="radio" name="status" value="paid"
                                                {{ request('status') === 'paid' ? 'checked' : '' }} />
                                            Paid
                                        </label>
                                        <label
                                            class="flex items-center gap-2 text-[0.75rem] font-bold px-4 py-1.5 rounded-full transition-all bg-[#f6f8fa] text-[#0d1117] border border-[#d0d7de]">
                                            <input type="radio" name="status" value="failed"
                                                {{ request('status') === 'failed' ? 'checked' : '' }} />
                                            Failed
                                        </label>
                                    </div>

                                    <!-- Tombol Cari -->
                                    <div class="pt-2 flex gap-2">
                                        <button type="submit"
                                            class="flex-1 bg-[#1a7f64] text-white font-bold text-[0.875rem] py-2.5 rounded-[6px] hover:bg-[#156b54] transition-colors border border-transparent">
                                            Cari
                                        </button>
                                        <a href="{{ route('dashboard.transaction') }}"
                                            class="flex-1 bg-white text-[#0d1117] font-bold text-[0.875rem] py-2.5 rounded-[6px] border border-[#d0d7de] text-center hover:bg-[#f6f8fa] transition-colors">
                                            Reset
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Panel 3: Export Data -->
                        <div
                            class="bg-white border border-[#d0d7de] rounded-[8px] shadow-[0_1px_3px_rgba(0,0,0,.06)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#d0d7de] bg-[#f6f8fa] flex items-center justify-between font-bold text-[0.875rem] text-[#0d1117]">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#1a7f64]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    <span>Export Data</span>
                                </div>
                                <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>

                            <div class="p-6 flex flex-col gap-4">
                                <!-- Grid Tanggal Export -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-[0.75rem] font-bold text-[#0d1117] mb-1">Tanggal
                                            Mulai</label>
                                        <input type="date"
                                            class="w-full bg-white border border-[#d0d7de] text-[#0d1117] rounded-[6px] text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-[#0d1117]" />
                                        <span class="block text-[0.7rem] text-[#8c959f] mt-1">Contoh rentang:
                                            18/03/2026 hingga 16/06/2026</span>
                                    </div>
                                    <div>
                                        <label class="block text-[0.75rem] font-bold text-[#0d1117] mb-1">Tanggal
                                            Selesai</label>
                                        <input type="date"
                                            class="w-full bg-white border border-[#d0d7de] text-[#0d1117] rounded-[6px] text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-[#0d1117]" />
                                    </div>
                                </div>

                                <!-- Tombol Unduh & Informasi Keterangan -->
                                <div class="pt-2">
                                    <button
                                        class="w-full bg-[#0d1117] text-white font-semibold text-[0.875rem] py-2.5 rounded-[6px] hover:bg-[#24292f] transition-colors border border-transparent">
                                        Unduh Riwayat Hadiah
                                    </button>
                                    <span class="block text-[0.7rem] text-[#8c959f] mt-2">
                                        * Unduh data maksimal 90 hari. Data tersedia dari 18/12/2025. Data tersedia
                                        hingga 16/06/2026.
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer Section -->
    <footer class="bg-white border-t border-[#d0d7de] py-10 text-center px-6">
        <div class="max-w-[1100px] mx-auto flex flex-col items-center gap-4">
            <div class="flex items-center gap-1.5 font-bold text-[0.95rem] text-[#0d1117]">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <circle cx="12" cy="12" r="10" />
                    <circle cx="12" cy="12" r="4" />
                </svg>
                ChipIN
            </div>

            <div class="flex flex-wrap justify-center gap-6 my-2">
                <a class="text-[0.75rem] text-[#57606a] hover:text-[#0d1117] transition-colors"
                    href="#">Features</a>
                <a class="text-[0.75rem] text-[#57606a] hover:text-[#0d1117] transition-colors"
                    href="#">Pricing</a>
                <a class="text-[0.75rem] text-[#57606a] hover:text-[#0d1117] transition-colors"
                    href="#">Creators</a>
                <a class="text-[0.75rem] text-[#57606a] hover:text-[#0d1117] transition-colors"
                    href="#">Support</a>
                <a class="text-[0.75rem] text-[#57606a] hover:text-[#0d1117] transition-colors"
                    href="#">Privacy</a>
            </div>

            <div class="text-[0.75rem] text-[#8c959f] mt-2">
                © 2026 ChipIN Co. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>
