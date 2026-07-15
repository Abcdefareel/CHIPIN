<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://commons.wikimedia.org/wiki/File:Google-favicon-2015.png" type="image/x-icon">
    <title>{{ $title }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif']
                    },
                    colors: {
                        brand: {
                            bg: '#f5f3ff',
                            sidebar: '#1e1b4b',
                            primary: '#1e1b4b',
                            accent: '#8b5cf6',
                            accent2: '#7c3aed',
                            muted: '#64748b',
                            border: '#e2e8f0',
                            red: '#fb7185',
                            activeBg: 'rgba(139,92,246,0.14)',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-brand-bg text-brand-primary min-h-screen flex text-sm">
    <div id="global-tip-popup"
        class="fixed top-5 right-5 z-[9999] hidden max-w-sm w-[320px] rounded-2xl border border-brand-accent/20 bg-white shadow-2xl p-4">
        <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-full bg-brand-accent/10 flex items-center justify-center text-brand-accent2">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="flex-1">
                <div class="font-semibold text-brand-primary">Pembayaran dikonfirmasi</div>
                <div id="global-tip-popup-message" class="text-sm text-brand-muted mt-1"></div>
            </div>
        </div>
    </div>

    @include('layouts.navbar-kreator')
    @yield('dashboard-kreator')

    <script>
        @if (session('tip_paid_popup'))
            window.addEventListener('load', () => {
                showGlobalTipPopup(@json(session('tip_paid_popup')));
            });
        @endif

        const copyUrlBtn = document.getElementById('copyUrlBtn');
        if (copyUrlBtn) {
            copyUrlBtn.addEventListener('click', () => {
                const url = document.getElementById('donateUrl').textContent;
                navigator.clipboard.writeText(url).then(() => {
                    const btnText = document.getElementById('copyBtnText');
                    btnText.textContent = 'Copied!';
                    setTimeout(() => {
                        btnText.textContent = 'Copy';
                    }, 1500);
                });
            });
        }
    </script>
    <script>
        // Toggle on/off Fitur Tip
        function toggleSwitch() {
            const toggle = document.getElementById('toggle-fitur');
            if (toggle.classList.contains('bg-brand-accent')) {
                toggle.classList.remove('bg-brand-accent');
                toggle.classList.add('bg-[#c7d2fe]', 'after:left-[3px]', 'after:right-auto');
            } else {
                toggle.classList.remove('bg-[#c7d2fe]', 'after:left-[3px]', 'after:right-auto');
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

        function showGlobalTipPopup(message) {
            const popup = document.getElementById('global-tip-popup');
            const popupMessage = document.getElementById('global-tip-popup-message');
            if (!popup || !popupMessage) return;

            popupMessage.textContent = message;
            popup.classList.remove('hidden');
            popup.classList.add('block');

            clearTimeout(window.globalTipPopupTimer);
            window.globalTipPopupTimer = setTimeout(() => {
                popup.classList.add('hidden');
                popup.classList.remove('block');
            }, 4000);
        }
    </script>
</body>

</html>
