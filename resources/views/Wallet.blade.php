@extends('layouts.app')
@section('dashboard-kreator')
        <main class="ml-60 flex-1 py-9 px-10 min-h-screen">
        <div id="page-wallet" class="page">
            <h1 class="text-3xl font-extrabold tracking-tight mb-7">Wallet</h1>

            <div class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
                <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">URL Profile Kamu</div>
                <div class="flex items-center gap-3 bg-brand-bg border border-brand-border rounded-lg p-3 mb-2.5">
                    <span id="donateUrl"
                        class="flex-1 font-medium text-brand-primary">{{ url('/donate/' . $user->creatorProfile->username) }}</span>
                    <button id="copyUrlBtn" type="button"
                        class="py-1.5 px-3.5 border-2 border-brand-primary bg-transparent text-brand-primary text-xs font-semibold rounded-lg flex items-center gap-1.5 whitespace-nowrap transition duration-150 hover:bg-brand-primary hover:text-white">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24">
                            <rect x="9" y="9" width="13" height="13" rx="2" stroke="currentColor"
                                stroke-width="2" />
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" stroke="currentColor"
                                stroke-width="2" />
                        </svg>
                        <span id="copyBtnText">Copy</span>
                    </button>
                    <a href="{{ url('/donate/' . $user->creatorProfile->username) }}" target="_blank"
                        class="py-1.5 px-3.5 border-2 border-brand-accent bg-transparent text-brand-accent2 text-xs font-semibold rounded-lg flex items-center gap-1.5 whitespace-nowrap transition duration-150 hover:bg-brand-accent hover:text-brand-primary no-underline">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Buka di Tab Baru
                    </a>
                </div>
                <p class="text-xs text-brand-muted">Share URL profile kamu supaya followers kamu bisa support kamu!</p>
            </div>
            <div class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
                <button
                    class="inline-flex items-center gap-1.5 py-1.5 px-3.5 border-2 border-brand-accent bg-brand-accent/5 rounded-lg text-brand-accent2 text-xs font-semibold cursor-pointer mb-5 transition duration-150 hover:bg-brand-accent/20">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z" stroke="currentColor"
                            stroke-width="2" />
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                    </svg>
                    Tampilkan
                </button>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="py-2">
                        <div class="text-xs text-brand-muted mb-2.5 flex items-center gap-1.5">
                            Saldo Bisa Ditarik
                            <span
                                class="w-4 h-4 border border-brand-muted rounded-full text-[9px] flex items-center justify-center cursor-help text-brand-muted"
                                title="Saldo yang bisa kamu tarik ke rekening">i</span>
                        </div>
                        <div class="text-xl font-bold tracking-widest text-brand-accent2">••••••••</div>
                    </div>
                    <div class="py-2 md:pl-6 border-l-0 md:border-l border-brand-border">
                        <div class="text-xs text-brand-muted mb-2.5 flex items-center gap-1.5">
                            Saldo Pending
                            <span
                                class="w-4 h-4 border border-brand-muted rounded-full text-[9px] flex items-center justify-center cursor-help text-brand-muted"
                                title="Saldo yang sedang diproses">i</span>
                        </div>
                        <div class="text-xl font-bold tracking-widest text-brand-primary">••••••••</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
                <div class="flex justify-between items-center mb-3.5">
                    <h3 class="text-base font-bold">Rekening Tujuan</h3>
                    <button
                        class="flex items-center gap-1.5 py-1.5 px-3.5 border-2 border-brand-primary bg-transparent rounded-lg text-xs font-semibold cursor-pointer transition duration-150 hover:bg-brand-primary hover:text-white">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24">
                            <path
                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Edit
                    </button>
                </div>
                <div class="bg-brand-bg border border-brand-border rounded-lg p-3.5 text-brand-muted text-xs">Belum ada
                    rekening tujuan. Set dulu, yuk!</div>
            </div>

            <div class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
                <div class="text-[11px] font-bold tracking-wider text-brand-muted uppercase mb-4">Jenis Transaksi</div>
                <div class="mb-4">
                    <select
                        class="py-2 pl-3 pr-9 border border-brand-border rounded-lg text-xs font-sans text-brand-primary bg-white cursor-pointer min-w-[160px] appearance-none bg-no-repeat bg-[right_10px_center]">
                        <option>Semua</option>
                        <option>Tips</option>
                        <option>Withdrawal</option>
                    </select>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="border-b-2 border-brand-border">
                                <th
                                    class="text-left text-[11px] font-bold tracking-wider text-brand-muted uppercase p-3">
                                    Transaction</th>
                                <th
                                    class="text-left text-[11px] font-bold tracking-wider text-brand-muted uppercase p-3">
                                    Date</th>
                                <th
                                    class="text-left text-[11px] font-bold tracking-wider text-brand-muted uppercase p-3">
                                    Total</th>
                                <th
                                    class="text-left text-[11px] font-bold tracking-wider text-brand-muted uppercase p-3">
                                    Diterima</th>
                                <th
                                    class="text-left text-[11px] font-bold tracking-wider text-brand-muted uppercase p-3">
                                    Potongan Platform</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center py-12 text-brand-muted text-xs">No transactions
                                    found.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center justify-end gap-3 pt-4 text-xs text-brand-muted">
                    <span>Rows per page</span>
                    <select
                        class="py-2 pl-3 pr-9 border border-brand-border rounded-lg text-xs bg-white min-w-0 w-[60px] appearance-none bg-no-repeat bg-[right_10px_center]">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <span>Page 1 of 0</span>
                    <div class="flex gap-1.5">
                        <button
                            class="w-7 h-7 border border-brand-border rounded-lg bg-white flex items-center justify-center text-brand-primary disabled:opacity-40 disabled:cursor-not-allowed hover:border-brand-accent hover:text-brand-accent2"
                            disabled>‹</button>
                        <button
                            class="w-7 h-7 border border-brand-border rounded-lg bg-white flex items-center justify-center text-brand-primary disabled:opacity-40 disabled:cursor-not-allowed hover:border-brand-accent hover:text-brand-accent2"
                            disabled>›</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection