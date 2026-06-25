<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kirim Tip ke {{ $creator->name }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-['Inter',_sans-serif] bg-[#f0f4f8] text-[#0d1117] antialiased min-h-screen flex items-center justify-center p-6">

    <div class="bg-white border border-[#d0d7de] rounded-[12px] p-6 max-w-[440px] w-full shadow-sm">

        <div class="text-center mb-5">
            <h1 class="text-[1.25rem] font-extrabold">Kirim Tip ke {{ $creator->name }}</h1>
            <p class="text-[0.8rem] text-[#57606a]">{{ $creator->username }}</p>
        </div>

        @if (session('success'))
            <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 rounded-[8px] text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded-[8px] text-sm">
                <ul class="list-disc pl-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-5">
            <label class="block text-[0.7rem] font-bold tracking-wider uppercase text-[#57606a] mb-2">Quick Select Amount</label>
            <div class="grid grid-cols-5 gap-2" id="quickAmounts">
                <button type="button" data-amount="10000" class="qa-btn border border-[#d0d7de] rounded-[6px] py-2 text-[0.8rem] font-medium hover:bg-[#f6f8fa]">10rb</button>
                <button type="button" data-amount="20000" class="qa-btn border border-[#d0d7de] rounded-[6px] py-2 text-[0.8rem] font-medium hover:bg-[#f6f8fa]">20rb</button>
                <button type="button" data-amount="50000" class="qa-btn active border border-[#0d1117] bg-[#0d1117] text-white rounded-[6px] py-2 text-[0.8rem] font-medium">50rb</button>
                <button type="button" data-amount="100000" class="qa-btn border border-[#d0d7de] rounded-[6px] py-2 text-[0.8rem] font-medium hover:bg-[#f6f8fa]">100rb</button>
                <button type="button" data-amount="300000" class="qa-btn border border-[#d0d7de] rounded-[6px] py-2 text-[0.8rem] font-medium hover:bg-[#f6f8fa]">300rb</button>
            </div>
        </div>

        <form action="{{ route('donate.send', $creator->username) }}" method="POST" class="flex flex-col gap-4">
            @csrf

            <div>
                <label class="block text-[0.7rem] font-bold tracking-wider uppercase text-[#57606a] mb-2">Nominal Amount</label>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-[0.875rem] text-[#57606a]">Rp</span>
                    <input type="text" id="nominal" value="50.000"
                        class="w-full pl-9 pr-3 py-2 border border-[#d0d7de] rounded-[8px] text-[0.875rem] focus:outline-none focus:border-[#0d1117]" />
                    <input type="hidden" name="amount" id="amountRaw" value="50000">
                </div>
            </div>

            <div>
                <label class="block text-[0.7rem] font-bold tracking-wider uppercase text-[#57606a] mb-2">Username / From</label>
                <input type="text" name="sender_name" placeholder="Enter your name or stay anonymous"
                    class="w-full px-3 py-2 border border-[#d0d7de] rounded-[8px] text-[0.875rem] focus:outline-none focus:border-[#0d1117]" />
            </div>

            <div>
                <label class="block text-[0.7rem] font-bold tracking-wider uppercase text-[#57606a] mb-2">Message</label>
                <textarea name="message" rows="3" placeholder="Write a supportive message..."
                    class="w-full px-3 py-2 border border-[#d0d7de] rounded-[8px] text-[0.875rem] resize-none focus:outline-none focus:border-[#0d1117]"></textarea>
            </div>

            <button type="submit" class="w-full bg-[#0d1117] text-white font-semibold text-[0.875rem] py-3 rounded-[8px] hover:bg-[#24292f] transition-colors">
                ➤ Send Tip
            </button>
        </form>

    </div>

    <script>
        const nominalInput = document.getElementById('nominal');
        const amountRaw = document.getElementById('amountRaw');
        const quickBtns = document.querySelectorAll('.qa-btn');

        function formatRupiah(num) {
            return new Intl.NumberFormat('id-ID').format(num);
        }

        function parseNominal(str) {
            return parseInt(str.replace(/\D/g, '')) || 0;
        }

        quickBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                quickBtns.forEach(b => {
                    b.classList.remove('active', 'bg-[#0d1117]', 'text-white', 'border-[#0d1117]');
                    b.classList.add('border-[#d0d7de]');
                });
                btn.classList.add('active', 'bg-[#0d1117]', 'text-white', 'border-[#0d1117]');

                const amount = parseInt(btn.dataset.amount);
                nominalInput.value = formatRupiah(amount);
                amountRaw.value = amount;
            });
        });

        nominalInput.addEventListener('input', () => {
            const raw = parseNominal(nominalInput.value);
            nominalInput.value = formatRupiah(raw);
            amountRaw.value = raw;
            quickBtns.forEach(b => {
                b.classList.remove('active', 'bg-[#0d1117]', 'text-white', 'border-[#0d1117]');
                b.classList.add('border-[#d0d7de]');
            });
        });
    </script>

</body>
</html>