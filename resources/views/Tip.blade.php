<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChipIN – Tip Overlay Settings</title>
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
        <div id="page-tip" class="page">
            <h1 class="text-3xl font-extrabold tracking-tight mb-7">Tip Overlay Settings</h1>

            <div class="bg-white rounded-xl border border-brand-border p-6 mb-5">
                <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">Fitur Tip</div>
                <p class="text-xs text-brand-muted mb-4">Aktifkan fitur tip supaya fans bisa kasih dukungan ke kamu
                    langsung!</p>
                <div class="flex items-start justify-between gap-4">
                    <div class="text-xs">
                        <strong class="block text-sm font-semibold mb-1">Fitur Tip Aktif</strong>
                        <small class="text-brand-muted">Fans bisa kasih tip ke kamu sekarang! 🎉</small>
                    </div>
                    <div id="toggle-fitur" onclick="toggleSwitch()"
                        class="w-11 h-6.5 bg-brand-accent rounded-full relative cursor-pointer flex-shrink-0 transition-colors duration-200 after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-white after:top-[3px] after:right-[3px] after:transition-all after:shadow">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-brand-border p-6 mb-5">
                <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">Overlay URL</div>
                <div class="flex items-center gap-3 bg-brand-bg border border-brand-border rounded-lg p-3 mb-2.5">
                    <div class="w-9 h-9 bg-brand-accent2 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24">
                            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z" stroke="currentColor"
                                stroke-width="2" />
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <span
                        class="flex-1 text-xs text-brand-muted break-all">https://chipin.io/tip/widget/7971a957-6421-42a1-b227-6bbf95a17cdf</span>
                </div>
                <p class="text-[11px] text-brand-red mb-4">⚠️ Jangan kasih URL ini ke siapa-siapa ya. YTTA.</p>
                <div class="flex gap-2.5 flex-wrap">
                    <button
                        class="flex-1 min-w-[100px] py-2.5 px-3 border border-brand-primary text-brand-primary font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-brand-primary hover:text-white">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                            <rect x="9" y="9" width="13" height="13" rx="2" stroke="currentColor"
                                stroke-width="2" />
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" stroke="currentColor"
                                stroke-width="2" />
                        </svg>
                        Salin
                    </button>
                    <button
                        class="flex-1 min-w-[100px] py-2.5 px-3 border border-[#e85c3a] text-[#e85c3a] font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-[#e85c3a] hover:text-white">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                            <path d="M4 4l16 16M4 20L20 4" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                        Ganti Key
                    </button>
                    <button
                        class="flex-1 min-w-[100px] py-2.5 px-3 border border-brand-accent text-brand-accent2 font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-brand-accent hover:text-brand-primary">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 0 1-3.46 0"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Test Alert
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-brand-border p-6 mb-5">
                <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">Preview</div>
                <div id="preview-alert"
                    class="bg-[#6929F2] rounded-xl py-6 px-7 shadow-[0_4px_24px_rgba(105,41,242,0.3)]">
                    <div id="preview-sender" class="text-lg font-extrabold text-[#C8E41B] mb-2.5">John Doe</div>
                    <div id="preview-msg" class="text-sm text-white leading-relaxed mb-3.5">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Excepturi mollitia magnam suscipit iusto quidem minus obcaecati ab
                        distinctio fugiat.</div>
                    <div id="preview-amount" class="text-lg font-extrabold text-[#C8E41B]">Rp 1.000.000</div>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-brand-border p-6 mb-5">
                <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">Tampilan Overlay
                </div>
                <h4 class="text-sm font-semibold mb-4">Warna Overlay</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6 mt-2">

                    <div class="color-item">
                        <label
                            class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Background
                            Color</label>
                        <div class="flex items-center gap-2.5 bg-brand-bg border border-brand-border rounded-lg p-2">
                            <input type="color"
                                class="w-7 h-7 rounded-md cursor-pointer border-none shadow-[0_1px_4px_rgba(0,0,0,0.15)]"
                                value="#6929F2" oninput="updateColor('bg', this.value)">
                            <span id="hex-bg" class="text-xs font-medium text-brand-muted">#6929F2</span>
                        </div>
                        <p class="text-[11px] text-brand-muted mt-1.5">Warna latar belakang overlay tip kamu</p>
                    </div>

                    <div class="color-item">
                        <label
                            class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Message
                            Color</label>
                        <div class="flex items-center gap-2.5 bg-brand-bg border border-brand-border rounded-lg p-2">
                            <input type="color"
                                class="w-7 h-7 rounded-md cursor-pointer border-none shadow-[0_1px_4px_rgba(0,0,0,0.15)]"
                                value="#FFFFFF" oninput="updateColor('msg', this.value)">
                            <span id="hex-msg" class="text-xs font-medium text-brand-muted">#FFFFFF</span>
                        </div>
                        <p class="text-[11px] text-brand-muted mt-1.5">Warna teks untuk pesan di overlay</p>
                    </div>

                    <div class="color-item">
                        <label
                            class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Sender
                            Color</label>
                        <div class="flex items-center gap-2.5 bg-brand-bg border border-brand-border rounded-lg p-2">
                            <input type="color"
                                class="w-7 h-7 rounded-md cursor-pointer border-none shadow-[0_1px_4px_rgba(0,0,0,0.15)]"
                                value="#C8E41B" oninput="updateColor('sender', this.value)">
                            <span id="hex-sender" class="text-xs font-medium text-brand-muted">#C8E41B</span>
                        </div>
                        <p class="text-[11px] text-brand-muted mt-1.5">Warna nama pengirim tip</p>
                    </div>

                    <div class="color-item">
                        <label
                            class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Amount
                            Color</label>
                        <div class="flex items-center gap-2.5 bg-brand-bg border border-brand-border rounded-lg p-2">
                            <input type="color"
                                class="w-7 h-7 rounded-md cursor-pointer border-none shadow-[0_1px_4px_rgba(0,0,0,0.15)]"
                                value="#C8E41B" oninput="updateColor('amount', this.value)">
                            <span id="hex-amount" class="text-xs font-medium text-brand-muted">#C8E41B</span>
                        </div>
                        <p class="text-[11px] text-brand-muted mt-1.5">Warna jumlah tip yang diterima</p>
                    </div>

                </div>

                <div class="border-t border-brand-border pt-5 flex justify-end gap-3">
                    <button
                        class="py-2 px-6 rounded-lg text-xs font-semibold border-2 border-brand-border bg-transparent text-brand-muted transition duration-150 hover:bg-brand-bg hover:text-brand-primary"
                        onclick="alert('Pengaturan direset!')">Reset</button>
                    <button
                        class="py-2 px-6 rounded-lg text-xs font-semibold border-2 border-brand-accent bg-brand-accent text-brand-sidebar transition duration-150 hover:bg-brand-accent2 hover:border-brand-accent2"
                        onclick="alert('Pengaturan tampilan berhasil disimpan!')">Simpan</button>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Toggle on/off Fitur Tip
        function toggleSwitch() {
            const toggle = document.getElementById('toggle-fitur');
            if (toggle.classList.contains('bg-brand-accent')) {
                toggle.classList.remove('bg-brand-accent');
                toggle.classList.add('bg-[#d1d9f0]', 'after:left-[3px]', 'after:right-auto');
            } else {
                toggle.classList.remove('bg-[#d1d9f0]', 'after:left-[3px]', 'after:right-auto');
                toggle.classList.add('bg-brand-accent');
            }
        }

        // Update real-time preview warna
        function updateColor(type, value) {
            document.getElementById('hex-' + type).innerText = value.toUpperCase();

            if (type === 'bg') {
                document.getElementById('preview-alert').style.backgroundColor = value;
            } else if (type === 'msg') {
                document.getElementById('preview-msg').style.color = value;
            } else if (type === 'sender') {
                document.getElementById('preview-sender').style.color = value;
            } else if (type === 'amount') {
                document.getElementById('preview-amount').style.color = value;
            }
        }
    </script>
</body>

</html>
