   @extends('layouts.app')
   @section('dashboard-kreator')
       <main class="ml-60 flex-1 py-9 px-10 min-h-screen">
           <div id="page-tip" class="page">
               <h1 class="text-3xl font-extrabold tracking-tight mb-7">Tip Overlay Settings</h1>

               <div
                   class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
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

               <div
                   class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
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
                                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           Test Alert
                       </button>
                   </div>
               </div>

               <div
                   class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
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

               <div
                   class="bg-white rounded-2xl border border-brand-border p-6 mb-5 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
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
                           <label class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Message
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
                           <label class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Sender
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
                           <label class="block text-[10px] font-bold tracking-wider text-brand-muted uppercase mb-2">Amount
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
   @endsection
