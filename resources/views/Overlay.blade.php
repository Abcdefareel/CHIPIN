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

    <script src="https://cdn.jsdelivr.net/npm/pusher-js@8/dist/web/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1/dist/echo.iife.js"></script>
    <script>
        window.Pusher = Pusher;

        window.Echo = new Echo({
            broadcaster: 'reverb',
            key: '{{ env('REVERB_APP_KEY') }}',
            wsHost: '{{ env('REVERB_HOST') }}',
            wsPort: {{ env('REVERB_PORT', 8080) }},
            wssPort: {{ env('REVERB_PORT', 8080) }},
            forceTLS: false,
            enabledTransports: ['ws', 'wss'],
        });

        window.Echo.connector.pusher.connection.bind('connected', () => {
            console.log('BERHASIL connect ke Reverb!');
        });

        const channelName = 'tip-channel.{{ $creator->username }}';
        console.log('Subscribing ke channel:', channelName);

        window.Echo.channel(channelName)
            .listen('TipReceived', (data) => {
                console.log('Event diterima:', data);
                showTip(data);
            });

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
