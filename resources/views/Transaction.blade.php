<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Unleash Your Creative Potential</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-['Plus_Jakarta_Sans',_'Inter',_sans-serif] bg-[#f8fafc] text-[#1e1b4b] antialiased min-h-screen">

    <!-- Navigation Bar -->
    <nav class="bg-white/75 backdrop-blur-xl border-b border-slate-200/70 h-16 flex items-center sticky top-0 z-50 transition-all duration-300">
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
                <div
                    class="flex items-center gap-2 bg-[#eef2ff] border border-[#e2e8f0] px-3 py-1.5 rounded-full text-[0.875rem] font-semibold text-[#64748b]">
                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                    @Abcdefareel
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
                                class="block text-[0.875rem] font-semibold px-3 py-2 rounded-xl text-[#64748b] hover:bg-[#eef2ff] hover:text-[#1e1b4b] transition-all">
                                Profil
                            </a>
                            <a href="/dashboard/transaction"
                                class="block text-[0.875rem] font-semibold px-3 py-2 rounded-xl transition-all bg-[#1e1b4b] text-white">
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

                        <!-- Panel 1: Filter / Pencarian -->
                        <div
                            class="bg-white border border-[#e2e8f0] rounded-2xl shadow-[0_2px_16px_rgba(79,70,229,0.08)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#e2e8f0] bg-[#eef2ff] flex items-center justify-between font-bold text-[0.875rem] text-[#1e1b4b]">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#6366f1]" fill="none" stroke="currentColor"
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
                                <!-- Input Pencarian -->
                                <div>
                                    <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Pencarian</label>
                                    <input type="text" placeholder="Cari Sesuatu"
                                        class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                </div>

                                <!-- Grid Filter Baris Kedua -->
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Filter Tanggal
                                            Mulai</label>
                                        <input type="date"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                    <div>
                                        <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Filter Tanggal
                                            Selesai</label>
                                        <input type="date"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                    <div>
                                        <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Urutkan
                                            Berdasarkan</label>
                                        <div class="relative">
                                            <select
                                                class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-2 appearance-none focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10">
                                                <option>Terbaru</option>
                                                <option>Terlama</option>
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
                                </div>

                                <!-- Kategori Pil / Badge Filter -->
                                <div class="flex flex-wrap gap-2 pt-2">
                                    <button
                                        class="text-[0.75rem] font-bold px-4 py-1.5 rounded-full transition-all bg-[#1e1b4b] text-white border border-transparent">
                                        Hadiah
                                    </button>
                                </div>

                                <!-- Tombol Cari -->
                                <div class="pt-2">
                                    <button
                                        class="w-full bg-[#6366f1] text-white font-bold text-[0.875rem] py-2.5 rounded-xl hover:bg-[#4f46e5] transition-colors border border-transparent">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 2: Export Data -->
                        <div
                            class="bg-white border border-[#e2e8f0] rounded-2xl shadow-[0_2px_16px_rgba(79,70,229,0.08)] overflow-hidden">
                            <div
                                class="p-4 border-b border-[#e2e8f0] bg-[#eef2ff] flex items-center justify-between font-bold text-[0.875rem] text-[#1e1b4b]">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#6366f1]" fill="none" stroke="currentColor"
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
                                        <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Tanggal
                                            Mulai</label>
                                        <input type="date"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                        <span class="block text-[0.7rem] text-[#94a3b8] mt-1">Contoh rentang:
                                            18/03/2026 hingga 16/06/2026</span>
                                    </div>
                                    <div>
                                        <label class="block text-[0.75rem] font-bold text-[#1e1b4b] mb-1">Tanggal
                                            Selesai</label>
                                        <input type="date"
                                            class="w-full bg-white border border-[#e2e8f0] text-[#1e1b4b] rounded-xl text-[0.875rem] px-3 py-1.5 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10" />
                                    </div>
                                </div>

                                <!-- Tombol Unduh & Informasi Keterangan -->
                                <div class="pt-2">
                                    <button
                                        class="w-full bg-gradient-to-r from-indigo-600 to-violet-600 text-white font-semibold text-[0.875rem] py-2.5 rounded-xl hover:from-indigo-500 hover:to-violet-500 transition-all duration-300 shadow-[0_4px_16px_rgba(99,102,241,0.25)] border border-transparent">
                                        Unduh Riwayat Hadiah
                                    </button>
                                    <span class="block text-[0.7rem] text-[#94a3b8] mt-2">
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

</body>

</html>
