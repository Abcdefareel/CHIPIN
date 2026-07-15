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
                       <span data-overlay-url="{{ $overlayUrl ?? '' }}"
                           class="flex-1 text-xs text-brand-muted break-all">{{ $overlayUrl ?? 'Belum ada profile creator.' }}</span>
                   </div>
                   <p class="text-[11px] text-brand-red mb-4">⚠️ Jangan kasih URL ini ke siapa-siapa ya. YTTA.</p>
                   <div class="flex gap-2.5 flex-wrap">
                       <button type="button" onclick="copyOverlayUrl()"
                           class="flex-1 min-w-[100px] py-2.5 px-3 border border-brand-primary text-brand-primary font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-brand-primary hover:text-white">
                           <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                               <rect x="9" y="9" width="13" height="13" rx="2" stroke="currentColor"
                                   stroke-width="2" />
                               <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" stroke="currentColor"
                                   stroke-width="2" />
                           </svg>
                           Salin
                       </button>
                       <button type="button" onclick="resetSettings()"
                           class="flex-1 min-w-[100px] py-2.5 px-3 border border-[#e85c3a] text-[#e85c3a] font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-[#e85c3a] hover:text-white">
                           <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                               <path d="M4 4l16 16M4 20L20 4" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" />
                           </svg>
                           Ganti Key
                       </button>
                       <button type="button"
                           onclick="window.open('{{ $overlayUrl ?? '' }}', '_blank', 'width=480,height=320')"
                           class="flex-1 min-w-[100px] py-2.5 px-3 border border-brand-accent text-brand-accent2 font-semibold text-xs rounded-lg flex items-center justify-center gap-1.5 transition duration-150 hover:bg-brand-accent hover:text-brand-primary">
                           <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24">
                               <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"
                                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           Buka Overlay
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
                       <button type="button"
                           class="py-2 px-6 rounded-lg text-xs font-semibold border-2 border-brand-border bg-transparent text-brand-muted transition duration-150 hover:bg-brand-bg hover:text-brand-primary"
                           onclick="resetSettings()">Reset</button>
                       <button type="button"
                           class="py-2 px-6 rounded-lg text-xs font-semibold border-2 border-brand-accent bg-brand-accent text-brand-sidebar transition duration-150 hover:bg-brand-accent2 hover:border-brand-accent2"
                           onclick="saveSettings()">Simpan</button>
                   </div>
               </div>
           </div>
       </main>
   @endsection

   <script>
       const defaultColors = {
           bg: '#6929F2',
           msg: '#FFFFFF',
           sender: '#C8E41B',
           amount: '#C8E41B',
       };

       function toggleSwitch() {
           const toggle = document.getElementById('toggle-fitur');
           const active = toggle.dataset.active === 'true';
           toggle.dataset.active = String(!active);
           toggle.classList.toggle('bg-brand-accent', !active);
           toggle.classList.toggle('bg-brand-muted', active);
           toggle.classList.toggle('after:right-[3px]', active);
           toggle.classList.toggle('after:left-[3px]', !active);
           toggle.classList.toggle('after:right-auto', !active);
       }

       function updateColor(type, value) {
           document.getElementById('hex-' + type).textContent = value.toUpperCase();
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

       function copyOverlayUrl() {
           const text = document.querySelector('[data-overlay-url]')?.textContent?.trim();
           if (!text) return;
           navigator.clipboard.writeText(text).then(() => {
               const button = event?.currentTarget;
               if (button) {
                   const original = button.innerHTML;
                   button.innerHTML = 'Tersalin';
                   setTimeout(() => button.innerHTML = original, 1500);
               }
           });
       }

       function testAlert() {
           document.getElementById('preview-sender').textContent = 'Budi Fans';
           document.getElementById('preview-msg').textContent = 'Semangat terus! Tip untuk stream kamu sangat berarti.';
           document.getElementById('preview-amount').textContent = 'Rp 150.000';
       }

       function saveSettings() {
           const colors = {
               bg: document.getElementById('hex-bg').textContent,
               msg: document.getElementById('hex-msg').textContent,
               sender: document.getElementById('hex-sender').textContent,
               amount: document.getElementById('hex-amount').textContent,
           };
           localStorage.setItem('chipin-overlay-colors', JSON.stringify(colors));
           alert('Pengaturan tampilan berhasil disimpan!');
       }

       function resetSettings() {
           Object.entries(defaultColors).forEach(([type, value]) => {
               document.querySelector(`input[type="color"][oninput*="'${type}'"]`)?.value = value;
               document.getElementById('hex-' + type).textContent = value.toUpperCase();
               updateColor(type, value);
           });
           localStorage.removeItem('chipin-overlay-colors');
           alert('Pengaturan direset!');
       }

       document.addEventListener('DOMContentLoaded', () => {
           const saved = localStorage.getItem('chipin-overlay-colors');
           if (saved) {
               const colors = JSON.parse(saved);
               Object.entries(colors).forEach(([type, value]) => updateColor(type, value));
           }
       });
   </script>
