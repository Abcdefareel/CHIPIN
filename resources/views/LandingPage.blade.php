<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Unleash Your Creative Potential</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes chipin-marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        .chipin-ticker {
            animation: chipin-marquee 26s linear infinite;
            width: max-content;
        }
        .chipin-ticker:hover { animation-play-state: paused; }
        .chipin-grid {
            background-image:
                linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 44px 44px;
        }
        @keyframes chipin-pop {
            0% { opacity: 0; transform: translateY(6px) scale(0.98); }
            10%, 90% { opacity: 1; transform: translateY(0) scale(1); }
            100% { opacity: 0; transform: translateY(-6px) scale(0.98); }
        }
        .chipin-alert { animation: chipin-pop 4s ease-in-out infinite; }
    </style>
</head>

<body class="font-['Plus_Jakarta_Sans',_'Inter',_sans-serif] bg-[#f8fafc] text-[#1e1b4b] antialiased">

    <nav class="bg-white/75 backdrop-blur-xl border-b border-slate-200/70 h-16 flex items-center sticky top-0 z-50 transition-all duration-300">
        <div class="w-full max-w-[1100px] mx-auto px-6 flex items-center justify-between">
            <div class="flex items-center gap-2 font-bold text-[1.1rem] tracking-tight">
                <svg class="w-5 h-5 text-[#1e1b4b]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <circle cx="12" cy="12" r="4" />
                </svg>
                ChipIN
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                <a href="/login"
                    class="inline-flex items-center justify-center text-[0.875rem] font-semibold p-[0.5rem] px-3 sm:px-4 rounded-xl transition-all duration-[0.15s] no-underline bg-transparent text-[#64748b] hover:bg-[#eef2ff] hover:text-[#1e1b4b]">
                    Log In
                </a>
                <a href="/register"
                    class="inline-flex items-center justify-center text-[0.875rem] font-semibold p-[0.5rem] px-4 sm:px-5 rounded-full border border-transparent transition-all duration-300 no-underline bg-gradient-to-r from-indigo-600 to-violet-600 text-white hover:from-indigo-500 hover:to-violet-500 hover:shadow-[0_4px_14px_rgba(99,102,241,0.35)]">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <section class="relative overflow-hidden bg-gradient-to-br from-[#0b0821] via-[#1e1b4b] to-[#2a1a5e] pt-20 pb-0 px-6">
        <div class="chipin-grid absolute inset-0 [mask-image:radial-gradient(ellipse_60%_60%_at_50%_0%,black,transparent)]"></div>
        <div class="pointer-events-none absolute top-1/4 -left-24 w-96 h-96 bg-violet-600/25 rounded-full blur-3xl"></div>
        <div class="pointer-events-none absolute -top-10 right-0 w-[28rem] h-[28rem] bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 left-1/2 w-72 h-72 bg-fuchsia-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 items-center pb-20">
            <div class="text-center lg:text-left">
                <span
                    class="inline-flex items-center gap-2 text-[0.7rem] font-bold tracking-[0.2em] uppercase text-violet-200 bg-white/[0.06] border border-white/10 px-3 py-1.5 rounded-full">
                    <span class="relative flex h-1.5 w-1.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-emerald-400"></span>
                    </span>
                    Live &middot; Platform for Creators
                </span>
                <h1
                    class="text-[2.6rem] sm:text-[3.6rem] font-extrabold tracking-tight text-white mt-6 mb-5 leading-[1.05]">
                    Setiap dukungan,
                    <span class="block bg-gradient-to-r from-violet-300 via-fuchsia-200 to-amber-200 bg-clip-text text-transparent">satu chip lebih dekat.</span>
                </h1>
                <p class="text-[1.05rem] text-white/60 max-w-[480px] mx-auto lg:mx-0 mb-9 leading-relaxed">
                    ChipIN menghubungkan kreator dengan pendukungnya secara langsung — tip, overlay live stream, dan pencairan dana dalam satu platform.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                    <a href="/register"
                        class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-indigo-500 to-violet-500 text-white font-semibold text-[0.9rem] px-9 py-3.5 rounded-full hover:from-indigo-400 hover:to-violet-400 hover:shadow-[0_8px_28px_rgba(139,92,246,0.45)] hover:-translate-y-0.5 transition-all duration-300">
                        Get Started For Free
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" /></svg>
                    </a>
                    <a href="#benefits"
                        class="inline-flex items-center justify-center gap-2 bg-white/[0.06] text-white font-semibold text-[0.9rem] px-9 py-3.5 rounded-full border border-white/15 hover:bg-white/10 hover:border-white/25 transition-all duration-300">
                        Learn More
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-3 mt-12 max-w-[460px] mx-auto lg:mx-0">
                    <div class="bg-white/[0.05] backdrop-blur border border-white/10 rounded-2xl py-4 text-center">
                        <div class="text-[1.35rem] font-extrabold text-white">10k+</div>
                        <div class="text-[0.7rem] font-medium text-white/50 mt-0.5">Kreator</div>
                    </div>
                    <div class="bg-white/[0.05] backdrop-blur border border-white/10 rounded-2xl py-4 text-center">
                        <div class="text-[1.35rem] font-extrabold text-white">500k+</div>
                        <div class="text-[0.7rem] font-medium text-white/50 mt-0.5">Supporter</div>
                    </div>
                    <div class="bg-white/[0.05] backdrop-blur border border-white/10 rounded-2xl py-4 text-center">
                        <div class="text-[1.35rem] font-extrabold text-white">95%</div>
                        <div class="text-[0.7rem] font-medium text-white/50 mt-0.5">Total Donasi</div>
                    </div>
                </div>
            </div>

            <!-- Signature visual: live stream overlay mockup -->
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-violet-500/30 to-indigo-500/20 rounded-[32px] blur-2xl"></div>
                <div class="relative bg-[#12102b]/90 backdrop-blur rounded-[28px] p-3 shadow-[0_30px_70px_rgba(0,0,0,0.5)] border border-white/10">
                    <!-- window chrome -->
                    <div class="flex items-center justify-between px-3 pb-3">
                        <div class="flex gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-red-400/70"></span><span class="w-2.5 h-2.5 rounded-full bg-yellow-400/70"></span><span class="w-2.5 h-2.5 rounded-full bg-emerald-400/70"></span></div>
                        <span class="text-[0.65rem] font-semibold text-white/40 tracking-wide">OVERLAY — LIVE</span>
                    </div>
                    <!-- "camera" area -->
                    <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-gradient-to-br from-[#1a1640] via-[#241f5e] to-[#2e1a5e] border border-white/5">
                        <div class="chipin-grid absolute inset-0 opacity-40"></div>
                        <span class="absolute top-4 left-4 flex items-center gap-1.5 bg-red-500/90 text-white text-[0.65rem] font-bold px-2.5 py-1 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span> LIVE
                        </span>
                        <span class="absolute top-4 right-4 bg-black/40 text-white/80 text-[0.65rem] font-semibold px-2.5 py-1 rounded-full">3.2k menonton</span>

                        <!-- floating tip alert -->
                        <div class="chipin-alert absolute bottom-5 left-1/2 -translate-x-1/2 w-[85%] flex items-center gap-3 bg-white rounded-2xl px-4 py-3 shadow-[0_10px_30px_rgba(0,0,0,0.35)]">
                            <div class="w-10 h-10 shrink-0 rounded-full bg-gradient-to-br from-amber-400 to-pink-500 flex items-center justify-center text-white font-bold text-sm">R</div>
                            <div class="min-w-0">
                                <div class="text-[0.8rem] font-bold text-[#1e1b4b] leading-tight">Rian ngasih tip Rp 50.000</div>
                                <div class="text-[0.7rem] text-[#64748b] truncate">"Semangat terus kontennya kak! 🔥"</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signature element: live tip ticker -->
        <div class="relative border-t border-white/10 bg-black/20 py-3 overflow-hidden">
            <div class="flex gap-3 chipin-ticker">
                @php
                    $tickerItems = [
                        ['☕', 'Sarah', '25.000'],
                        ['🎉', 'Dimas', '100.000'],
                        ['🔥', 'Putri', '15.000'],
                        ['🎁', 'Andre', '250.000'],
                        ['💜', 'Nadia', '30.000'],
                        ['🚀', 'Fajar', '75.000'],
                        ['☕', 'Sarah', '25.000'],
                        ['🎉', 'Dimas', '100.000'],
                        ['🔥', 'Putri', '15.000'],
                        ['🎁', 'Andre', '250.000'],
                        ['💜', 'Nadia', '30.000'],
                        ['🚀', 'Fajar', '75.000'],
                    ];
                @endphp
                @foreach ($tickerItems as $item)
                    <span class="inline-flex items-center gap-2 text-[0.8rem] font-semibold text-white/70 bg-white/[0.04] border border-white/10 rounded-full px-4 py-1.5 whitespace-nowrap">
                        <span>{{ $item[0] }}</span> {{ $item[1] }} mengirim <span class="text-white">Rp {{ $item[2] }}</span>
                    </span>
                @endforeach
            </div>
            <div class="pointer-events-none absolute inset-y-0 left-0 w-20 bg-gradient-to-r from-[#0b0821] to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-20 bg-gradient-to-l from-[#2a1a5e] to-transparent"></div>
        </div>
    </section>

    <section id="benefits" class="relative bg-gradient-to-b from-white via-[#faf9ff] to-white px-6 py-20 overflow-hidden scroll-mt-20">
        <div class="pointer-events-none absolute top-0 right-0 w-96 h-96 bg-violet-100/60 rounded-full blur-3xl -z-0"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 w-72 h-72 bg-indigo-100/50 rounded-full blur-3xl -z-0"></div>

        <div class="relative max-w-[1100px] mx-auto">
            <div class="text-center mb-12">
                <span class="text-[0.7rem] font-bold tracking-[0.2em] uppercase text-indigo-600">Kenapa ChipIN</span>
                <h2 class="text-[1.9rem] sm:text-[2.25rem] font-extrabold text-[#1e1b4b] mt-2 tracking-tight">Dibuat untuk
                    kreator yang <span class="bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">serius berkembang</span></h2>
                <p class="text-[0.9rem] text-[#64748b] mt-3 max-w-[440px] mx-auto">Semua yang kamu butuhkan untuk
                    mengubah dukungan fans jadi penghasilan yang berkelanjutan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-2 gap-5">
                <!-- Featured bento card -->
                <div class="group relative md:col-span-2 md:row-span-2 rounded-[28px] p-8 bg-gradient-to-br from-[#1e1b4b] via-[#2a1a5e] to-[#3b1f6b] text-white overflow-hidden shadow-[0_20px_50px_rgba(79,70,229,0.25)] hover:shadow-[0_24px_60px_rgba(79,70,229,0.35)] transition-all duration-500">
                    <div class="chipin-grid absolute inset-0 opacity-30 [mask-image:radial-gradient(ellipse_70%_70%_at_30%_20%,black,transparent)]"></div>
                    <div class="pointer-events-none absolute -bottom-10 -right-10 w-56 h-56 bg-violet-500/30 rounded-full blur-3xl group-hover:scale-110 transition-transform duration-500"></div>

                    <div class="relative flex flex-col h-full">
                        <div class="w-12 h-12 rounded-2xl bg-white/10 border border-white/15 flex items-center justify-center mb-6 group-hover:scale-105 group-hover:bg-white/15 transition-all duration-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" /></svg>
                        </div>
                        <h3 class="text-[1.35rem] font-extrabold mb-2.5">Cair Instan, Tanpa Ribet</h3>
                        <p class="text-[0.875rem] text-white/60 leading-relaxed max-w-[360px]">Tip yang masuk langsung
                            tercatat real-time dan bisa dicairkan ke e-wallet atau rekening kapan saja — tanpa minimum
                            payout yang bikin nunggu lama.</p>

                        <!-- mini widget -->
                        <div class="mt-auto pt-8 flex items-end gap-3">
                            <div class="flex-1 bg-white/[0.06] border border-white/10 rounded-2xl p-4">
                                <div class="text-[0.65rem] text-white/40 font-semibold uppercase tracking-wide mb-1">Saldo tersedia</div>
                                <div class="text-[1.4rem] font-extrabold">Rp 2.450.000</div>
                            </div>
                            <span class="shrink-0 h-fit bg-white text-[#1e1b4b] text-[0.75rem] font-bold px-4 py-3 rounded-2xl">Tarik Dana</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group bg-white border border-[#e2e8f0] rounded-[28px] p-6 shadow-[0_2px_16px_rgba(79,70,229,0.06)] hover:shadow-[0_10px_28px_rgba(79,70,229,0.14)] hover:-translate-y-1 transition-all duration-300">
                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-indigo-50 to-violet-50 flex items-center justify-center mb-4 text-indigo-600 group-hover:scale-110 transition-transform duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M3 3v18h18" />
                            <path d="M18 8l-5 5-3-3-4 4" />
                        </svg>
                    </div>
                    <h3 class="text-[1rem] font-bold text-[#1e1b4b] mb-1.5">Analitik Real-Time</h3>
                    <p class="text-[0.825rem] text-[#64748b] leading-relaxed">Pantau tren dukungan, jam paling ramai,
                        dan supporter setia langsung dari dashboard.</p>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white border border-[#e2e8f0] rounded-[28px] p-6 shadow-[0_2px_16px_rgba(79,70,229,0.06)] hover:shadow-[0_10px_28px_rgba(79,70,229,0.14)] hover:-translate-y-1 transition-all duration-300">
                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-amber-50 to-pink-50 flex items-center justify-center mb-4 text-pink-500 group-hover:scale-110 transition-transform duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z" />
                        </svg>
                    </div>
                    <h3 class="text-[1rem] font-bold text-[#1e1b4b] mb-1.5">Dekat dengan Fans</h3>
                    <p class="text-[0.825rem] text-[#64748b] leading-relaxed">Overlay live stream dan pesan dukungan
                        bikin fans ngerasa jadi bagian dari perjalananmu.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-[1100px] mx-auto px-6 py-16">
        <div class="mb-8 text-center">
            <span class="text-[0.7rem] font-bold tracking-[0.2em] uppercase text-indigo-600">Fitur Unggulan</span>
            <h2 class="text-[1.5rem] sm:text-[1.75rem] font-extrabold text-[#1e1b4b] mt-1.5">Perlengkapan Level Profesional</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="group bg-white border border-[#e2e8f0] rounded-2xl p-6 min-h-[150px] flex flex-col justify-between hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(79,70,229,0.12)] hover:border-indigo-200 transition-all duration-300">
                <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-50 to-violet-50 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="18" y1="20" x2="18" y2="10" /><line x1="12" y1="20" x2="12" y2="4" /><line x1="6" y1="20" x2="6" y2="14" />
                    </svg>
                </span>
                <h4 class="text-[0.875rem] font-bold text-[#1e1b4b] mt-6">Analitik</h4>
            </div>
            <div class="group bg-white border border-[#e2e8f0] rounded-2xl p-6 min-h-[150px] flex flex-col justify-between hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(79,70,229,0.12)] hover:border-indigo-200 transition-all duration-300">
                <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-50 to-violet-50 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2" /><rect x="2" y="14" width="20" height="8" rx="2" ry="2" /><line x1="6" y1="6" x2="6.01" y2="6" /><line x1="6" y1="18" x2="6.01" y2="18" />
                    </svg>
                </span>
                <h4 class="text-[0.875rem] font-bold text-[#1e1b4b] mt-6">Distribusi Cerdas</h4>
            </div>
            <div class="group bg-white border border-[#e2e8f0] rounded-2xl p-6 min-h-[150px] flex flex-col justify-between hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(79,70,229,0.12)] hover:border-indigo-200 transition-all duration-300">
                <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-50 to-violet-50 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                </span>
                <h4 class="text-[0.875rem] font-bold text-[#1e1b4b] mt-6">Networking</h4>
            </div>
            <div class="group bg-white border border-[#e2e8f0] rounded-2xl p-6 min-h-[150px] flex flex-col justify-between hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(79,70,229,0.12)] hover:border-indigo-200 transition-all duration-300">
                <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-50 to-violet-50 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                    </svg>
                </span>
                <h4 class="text-[0.875rem] font-bold text-[#1e1b4b] mt-6">Perkakas</h4>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
            <div class="bg-gradient-to-br from-[#1e1b4b] to-[#2a1a5e] text-white rounded-2xl p-6 flex items-center justify-between overflow-hidden relative">
                <div class="pointer-events-none absolute -right-6 -bottom-6 w-32 h-32 bg-violet-500/20 rounded-full blur-2xl"></div>
                <div class="relative">
                    <h4 class="text-[0.9rem] font-bold">Jangkauan Global</h4>
                    <p class="text-[0.75rem] text-white/60 mt-0.5">Terima dukungan dari 190+ negara tanpa hambatan.</p>
                </div>
                <span class="relative text-white/60"><svg width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg></span>
            </div>

            <div class="bg-white border border-[#e2e8f0] rounded-2xl p-6 flex items-center gap-4 hover:border-indigo-200 hover:shadow-[0_10px_28px_rgba(79,70,229,0.1)] transition-all duration-300">
                <span class="w-11 h-11 shrink-0 rounded-xl bg-gradient-to-br from-indigo-50 to-violet-50 text-indigo-600 flex items-center justify-center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg></span>
                <div>
                    <h4 class="text-[0.9rem] font-bold text-[#1e1b4b]">Dukungan 24/7</h4>
                    <p class="text-[0.75rem] text-[#64748b] mt-0.5">Tim kami siap membantu kapan saja kamu butuh.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-[1100px] mx-auto px-6 py-16">
        <div class="mb-10 text-center">
            <span class="text-[0.7rem] font-bold tracking-[0.2em] uppercase text-indigo-600">Cara Kerja</span>
            <h2 class="text-[1.5rem] sm:text-[1.75rem] font-extrabold text-[#1e1b4b] mt-1.5">Mulai dalam 3 Langkah</h2>
        </div>

        <div class="relative grid grid-cols-1 sm:grid-cols-3 gap-8 sm:gap-6">
            <div class="hidden sm:block absolute top-6 left-[16%] right-[16%] h-px bg-gradient-to-r from-indigo-200 via-violet-200 to-indigo-200"></div>

            <div class="relative text-center flex flex-col items-center">
                <div class="bg-gradient-to-br from-indigo-600 to-violet-600 text-white rounded-2xl w-12 h-12 flex items-center justify-center text-[0.95rem] font-bold shadow-[0_6px_16px_rgba(99,102,241,0.3)]">
                    1</div>
                <h3 class="text-[0.95rem] font-bold text-[#1e1b4b] mt-4">Daftar</h3>
                <p class="text-[0.825rem] text-[#64748b] mt-1 max-w-[220px]">Buat akun dalam hitungan detik dan atur
                    profil kreatormu.</p>
            </div>

            <div class="relative text-center flex flex-col items-center">
                <div class="bg-gradient-to-br from-indigo-600 to-violet-600 text-white rounded-2xl w-12 h-12 flex items-center justify-center text-[0.95rem] font-bold shadow-[0_6px_16px_rgba(99,102,241,0.3)]">
                    2</div>
                <h3 class="text-[0.95rem] font-bold text-[#1e1b4b] mt-4">Berkarya</h3>
                <p class="text-[0.825rem] text-[#64748b] mt-1 max-w-[220px]">Unggah karya dan bagikan link tip ke
                    komunitasmu.</p>
            </div>

            <div class="relative text-center flex flex-col items-center">
                <div class="bg-gradient-to-br from-indigo-600 to-violet-600 text-white rounded-2xl w-12 h-12 flex items-center justify-center text-[0.95rem] font-bold shadow-[0_6px_16px_rgba(99,102,241,0.3)]">
                    3</div>
                <h3 class="text-[0.95rem] font-bold text-[#1e1b4b] mt-4">Cuan</h3>
                <p class="text-[0.825rem] text-[#64748b] mt-1 max-w-[220px]">Terima dukungan langsung dari fans di
                    seluruh dunia.</p>
            </div>
        </div>
    </section>

    <section class="max-w-[1100px] mx-auto px-6 py-12">
        <div class="mb-8 text-center">
            <span class="text-[0.7rem] font-bold tracking-[0.2em] uppercase text-indigo-600">Creator Spotlight</span>
            <h2 class="text-[1.5rem] sm:text-[1.75rem] font-extrabold text-[#1e1b4b] mt-1.5">Kenalan dengan Para Visioner
                ChipIN</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div
                class="group bg-white border border-[#e2e8f0] rounded-2xl overflow-hidden shadow-[0_2px_16px_rgba(79,70,229,0.08)] hover:shadow-[0_10px_30px_rgba(79,70,229,0.16)] hover:-translate-y-1 transition-all duration-300">
                <img class="w-full aspect-square object-cover group-hover:scale-105 transition-transform duration-500"
                    src="https://i.pinimg.com/736x/78/84/b2/7884b26c1375a662cd1c4e4eaad1a880.jpg"
                    alt="Cosmos" />
                <div class="p-4">
                    <h4 class="text-[0.875rem] font-bold text-[#1e1b4b]">Cosmos</h4>
                    <p class="text-[0.75rem] text-[#64748b] mt-0.5">Digital Artist</p>
                </div>
            </div>
            <div
                class="group bg-white border border-[#e2e8f0] rounded-2xl overflow-hidden shadow-[0_2px_16px_rgba(79,70,229,0.08)] hover:shadow-[0_10px_30px_rgba(79,70,229,0.16)] hover:-translate-y-1 transition-all duration-300">
                <img class="w-full aspect-square object-cover group-hover:scale-105 transition-transform duration-500"
                    src="https://i.pinimg.com/736x/da/2a/bd/da2abdbbb30117bd2c20422ead80dc33.jpg"
                    alt="Zero" />
                <div class="p-4">
                    <h4 class="text-[0.875rem] font-bold text-[#1e1b4b]">Zero</h4>
                    <p class="text-[0.75rem] text-[#64748b] mt-0.5">Podcaster</p>
                </div>
            </div>
            <div
                class="group bg-white border border-[#e2e8f0] rounded-2xl overflow-hidden shadow-[0_2px_16px_rgba(79,70,229,0.08)] hover:shadow-[0_10px_30px_rgba(79,70,229,0.16)] hover:-translate-y-1 transition-all duration-300">
                <img class="w-full aspect-square object-cover group-hover:scale-105 transition-transform duration-500"
                    src="https://i.pinimg.com/736x/aa/75/5d/aa755d1d21437a834157af3ab0609c4d.jpg"
                    alt="Dyna" />
                <div class="p-4">
                    <h4 class="text-[0.875rem] font-bold text-[#1e1b4b]">Dyna</h4>
                    <p class="text-[0.75rem] text-[#64748b] mt-0.5">UI Designer</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-[1100px] mx-auto px-6 py-16">
        <div class="mb-10 text-center">
            <span class="text-[0.7rem] font-bold tracking-[0.2em] uppercase text-indigo-600">Testimoni</span>
            <h2 class="text-[1.5rem] sm:text-[1.75rem] font-extrabold text-[#1e1b4b] mt-1.5">Kata Para Kreator</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="relative bg-white border border-[#e2e8f0] rounded-[24px] p-6 shadow-[0_2px_16px_rgba(79,70,229,0.08)] hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(79,70,229,0.14)] transition-all duration-300">
                <span class="text-indigo-200 text-[2.5rem] font-black leading-none">"</span>
                <p class="text-[0.9rem] font-medium text-[#1e1b4b] -mt-3">Platform ini mengubah karierku. Dari susah
                    cari klien jadi punya model langganan yang stabil hanya dalam hitungan bulan.</p>
                <div class="flex items-center gap-2.5 mt-5">
                    <div
                        class="w-9 h-9 rounded-full bg-gradient-to-br from-indigo-500 to-violet-500 text-white font-bold text-[0.7rem] flex items-center justify-center">
                        SA</div>
                    <span class="text-[0.8rem] font-bold text-[#1e1b4b]">Sarah Amelia <span
                            class="block font-normal text-[#94a3b8] text-[0.7rem]">Ilustrator</span></span>
                </div>
            </div>

            <div class="relative bg-white border border-[#e2e8f0] rounded-[24px] p-6 shadow-[0_2px_16px_rgba(79,70,229,0.08)] hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(79,70,229,0.14)] transition-all duration-300">
                <span class="text-indigo-200 text-[2.5rem] font-black leading-none">"</span>
                <p class="text-[0.9rem] font-medium text-[#1e1b4b] -mt-3">Fitur analitiknya jauh lebih baik dari yang
                    lain. Sekarang aku benar-benar paham apa yang fans-ku inginkan.</p>
                <div class="flex items-center gap-2.5 mt-5">
                    <div
                        class="w-9 h-9 rounded-full bg-gradient-to-br from-cyan-500 to-indigo-500 text-white font-bold text-[0.7rem] flex items-center justify-center">
                        DP</div>
                    <span class="text-[0.8rem] font-bold text-[#1e1b4b]">Dimas Pratama <span
                            class="block font-normal text-[#94a3b8] text-[0.7rem]">Musisi</span></span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-br from-indigo-950 via-[#241f5e] to-violet-950 text-white text-center py-20 px-6 relative overflow-hidden">
        <div class="pointer-events-none absolute -top-16 left-1/4 w-72 h-72 bg-violet-500/20 rounded-full blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-20 right-1/4 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="relative max-w-[600px] mx-auto">
            <h2 class="text-[1.85rem] sm:text-[2.25rem] font-extrabold tracking-tight mb-3">Siap untuk Mulai?</h2>
            <p class="text-[0.9rem] text-[rgba(255,255,255,0.65)] max-w-[420px] mx-auto mb-9">Bergabung dengan
                ribuan kreator yang sudah membangun bisnisnya bersama ChipIN.</p>
            <a href="/register"
                class="inline-flex items-center justify-center gap-2 bg-white text-indigo-700 font-bold text-[0.9rem] px-10 py-3.5 rounded-full hover:bg-indigo-50 hover:shadow-[0_10px_30px_rgba(255,255,255,0.15)] hover:-translate-y-0.5 transition-all duration-300 w-full sm:w-auto">
                Daftar Sekarang
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" /></svg>
            </a>
        </div>
    </section>

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
