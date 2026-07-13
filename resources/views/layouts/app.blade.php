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
    @include('layouts.navbar-kreator')
    @yield('dashboard-kreator')

    <script>
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
    </script>
</body>

</html>
