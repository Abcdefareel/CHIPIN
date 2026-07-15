<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Overlay — {{ $creator->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-transparent">

    <div id="tipCard"
        class="hidden max-w-[480px] mx-auto mt-10 bg-[#6b21f5] rounded-[12px] p-5 transition-all duration-300">
        <p id="tipName" class="text-[#e8ff5c] font-bold text-base mb-1">John Doe</p>
        <p id="tipMessage" class="text-white text-sm mb-3 leading-relaxed">Lorem ipsum</p>
        <p id="tipAmount" class="text-[#e8ff5c] font-bold text-base">Rp 1.000.000</p>
    </div>

    <script>
        const overlayUrl = '{{ route('overlay.latest-donation', $creator->username) }}';
        let lastDonationSignature = null;

        function pollLatestDonation() {
            fetch(overlayUrl)
                .then((response) => response.json())
                .then((data) => {
                    if (!data) return;

                    const signature = `${data.sender_name || ''}|${data.message || ''}|${data.amount || 0}`;
                    if (signature === lastDonationSignature) return;

                    lastDonationSignature = signature;
                    showTip(data);
                })
                .catch(() => {
                    console.warn('Polling overlay gagal.');
                });
        }

        setInterval(pollLatestDonation, 2000);
        pollLatestDonation();

        function formatRupiah(num) {
            return new Intl.NumberFormat('id-ID').format(num);
        }

        function showTip(data) {
            document.getElementById('tipName').textContent = data.sender_name || 'Anonymous';
            document.getElementById('tipMessage').textContent = data.message || '';
            document.getElementById('tipAmount').textContent = 'Rp ' + formatRupiah(data.amount);

            const card = document.getElementById('tipCard');
            card.classList.remove('hidden');

            setTimeout(() => {
                card.classList.add('hidden');
            }, 8000);
        }
    </script>
</body>

</html>
