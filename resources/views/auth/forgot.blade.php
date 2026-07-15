<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Forgot Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="font-['Plus_Jakarta_Sans',_'Inter',_sans-serif] text-base text-[#1e1b4b] bg-[#f8fafc] antialiased leading-[1.6]">

    <div
        class="min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-gradient-to-br from-indigo-950 via-[#1e1b4b] to-violet-950">

        <div class="hidden lg:flex flex-col justify-center p-16 px-12 relative overflow-hidden">
            <a class="absolute top-6 left-8 flex items-center gap-2 font-bold text-lg text-white no-underline hover:underline z-10"
                href="#">
                <div class="grid grid-cols-2 gap-[3px] w-5 h-5">
                    <span class="bg-white rounded-[2px]"></span>
                    <span class="bg-white rounded-[2px]"></span>
                    <span class="bg-white rounded-[2px]"></span>
                    <span class="bg-white rounded-[2px]"></span>
                </div>
                ChipIN
            </a>

            <h1 class="text-[3.5rem] font-black text-white leading-[1.05] -tracking-[0.03em] mb-5">Powering<br>the
                next<br>generation<br>of creators.</h1>
            <p class="text-base text-[rgba(255,255,255,0.55)] max-w-[340px] mb-10 leading-[1.7]">Experience a
                professional-grade suite designed for precision and absolute creative control.</p>
        </div>

        <div class="bg-white flex flex-col justify-center p-10 sm:p-16 px-6 sm:px-12 min-h-screen">
            <div class="max-w-[420px] w-full mx-auto">
                <h2 class="text-[1.875rem] font-extrabold text-[#1e1b4b] -tracking-[0.02em] mb-1">Lupa Password</h2>
                <p class="text-[0.875rem] text-[#64748b] mb-8">Masukkan email yang terdaftar untuk menerima OTP.</p>

                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('password.send') }}" class="flex flex-col gap-5">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label
                            class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]">Email</label>
                        <input type="email" name="email" required
                            class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] px-[0.875rem] focus:border-[#6366f1]" />
                    </div>

                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 text-[0.875rem] font-semibold leading-none p-[0.875rem] px-6 rounded-2xl bg-gradient-to-r from-indigo-600 to-violet-600 text-white w-full">Kirim
                        OTP</button>
                </form>

                <p class="text-center text-[0.875rem] text-[#64748b] mt-6"><a href="{{ route('login') }}"
                        class="font-bold text-[#1e1b4b] hover:underline">Kembali ke Login</a></p>
            </div>
        </div>

    </div>

</body>

</html>
