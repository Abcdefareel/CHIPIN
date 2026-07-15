    @extends('layouts.app')
    @section('dashboard-kreator')
        <main class="ml-60 flex-1 py-9 px-10 min-h-screen">
            <div id="page-qrcode" class="page">
                <h1 class="text-3xl font-extrabold tracking-tight mb-7">QR Code Overlay Settings</h1>

                <div class="bg-white rounded-2xl border border-brand-border p-6 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
                    <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">Tampilan QR Code</div>
                    <p class="text-xs text-brand-muted mb-5">Tampilkan QR Code ini di overlay live stream kamu agar
                        penonton bisa langsung scan untuk memberikan tip.</p>

                    <div class="flex flex-col items-center py-7 px-5 text-center">
                        <div
                            class="w-48 h-48 bg-[#e2e8f0] rounded-xl flex items-center justify-center mb-5 border-2 border-dashed border-brand-muted">
                            <span class="font-semibold text-brand-muted">[ QR Code Preview ]</span>
                        </div>
                        <p class="text-xs text-brand-muted mb-5">Scan untuk langsung menuju halaman tip
                            {{ $user->creatorProfile->username ?? $user->username }}</p>

                        <div class="flex gap-2.5 justify-center w-full max-w-[400px]">
                            <button type="button" onclick="downloadQrPlaceholder()"
                                class="flex-1 py-2.5 px-3 border border-brand-primary text-brand-primary font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-brand-primary hover:text-white">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                Unduh PNG
                            </button>
                            <button type="button" onclick="copyQrLink()"
                                class="flex-1 py-2.5 px-3 border border-brand-accent text-brand-accent2 font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-brand-accent hover:text-brand-primary">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                                    <rect x="9" y="9" width="13" height="13" rx="2" stroke="currentColor"
                                        stroke-width="2" />
                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" stroke="currentColor"
                                        stroke-width="2" />
                                </svg>
                                Salin Link QR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    <script>
        function copyQrLink() {
            const text = '{{ url('/donate/' . ($user->creatorProfile->username ?? $user->username)) }}';
            navigator.clipboard.writeText(text).then(() => alert('Link QR berhasil disalin!'));
        }

        function downloadQrPlaceholder() {
            const text = 'QR Code untuk {{ $user->creatorProfile->username ?? $user->username }}';
            const blob = new Blob([text], {
                type: 'text/plain;charset=utf-8'
            });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = 'qr-code-placeholder.txt';
            link.click();
            URL.revokeObjectURL(url);
        }
    </script>
