<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Log In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="font-['Plus_Jakarta_Sans',_'Inter',_sans-serif] text-base text-[#1e1b4b] bg-[#f8fafc] antialiased leading-[1.6]">

    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-gradient-to-br from-indigo-950 via-[#1e1b4b] to-violet-950">

        <div class="hidden lg:flex flex-col justify-center p-16 px-12 relative overflow-hidden">
            <div class="pointer-events-none absolute -top-20 -right-10 w-72 h-72 bg-violet-500/20 rounded-full blur-3xl -z-10"></div>
            <div class="pointer-events-none absolute bottom-10 -left-16 w-64 h-64 bg-indigo-500/20 rounded-full blur-3xl -z-10"></div>
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

            <div
                class="w-full max-w-[560px] rounded-[22px] overflow-hidden border border-white/5 bg-[#1e1b4b] aspect-[16/11] flex items-center justify-center">
                <svg class="opacity-30" width="160" height="120" viewBox="0 0 160 120" fill="none">
                    <rect x="20" y="20" width="120" height="80" rx="6" fill="white" />
                    <rect x="30" y="30" width="100" height="55" rx="3" fill="#1e1b4b" />
                    <rect x="60" y="90" width="40" height="6" rx="3" fill="#cbd5e1" />
                    <rect x="35" y="38" width="45" height="4" rx="2" fill="#6366f1" opacity="0.7" />
                    <rect x="35" y="48" width="30" height="3" rx="2" fill="#475569" opacity="0.5" />
                    <rect x="85" y="38" width="40" height="4" rx="2" fill="#475569" opacity="0.4" />
                    <rect x="85" y="48" width="25" height="3" rx="2" fill="#475569" opacity="0.3" />
                </svg>
            </div>
        </div>

        <div class="bg-white flex flex-col justify-center p-10 sm:p-16 px-6 sm:px-12 min-h-screen">
            <div class="max-w-[420px] w-full mx-auto">
                <h2 class="text-[1.875rem] font-extrabold text-[#1e1b4b] -tracking-[0.02em] mb-1">Welcome back</h2>
                <p class="text-[0.875rem] text-[#64748b] mb-8">Access your creative dashboard</p>

                <form action="/login/process" method="POST" class="flex flex-col gap-5">
                    @csrf

                    <div class="flex flex-col gap-2">
                        <label class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]"
                            for="login-email">Username or Email</label>
                        <input id="login-email" name="login"
                            class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] px-[0.875rem] transition-all duration-[0.15s] outline-none leading-[1.5] focus:border-[#6366f1] focus:shadow-[0_0_0_3px_rgba(99,102,241,0.14)] placeholder:text-[#94a3b8]"
                            type="text" placeholder="alex.creator@hub.com" />
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <label class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]"
                                for="login-password">Password</label>
                            <a class="text-[0.75rem] font-semibold text-[#64748b] no-underline hover:text-[#1e1b4b] hover:underline"
                                href="#">Forgot Password?</a>
                        </div>
                        <div class="relative flex items-center">
                            <input id="login-password" name="password"
                                class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] pl-[0.875rem] pr-[2.25rem] transition-all duration-[0.15s] outline-none leading-[1.5] focus:border-[#6366f1] focus:shadow-[0_0_0_3px_rgba(99,102,241,0.14)]"
                                type="password" />
                            <svg id="togglePassword" class="absolute right-3 text-[#94a3b8] cursor-pointer w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                    </div>

                    <label class="flex items-start gap-2 text-[0.875rem] text-[#64748b] cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 mt-[1px] shrink-0 accent-[#6366f1] cursor-pointer" />
                        Stay signed in for 30 days
                    </label>

                    <button
                        class="inline-flex items-center justify-center gap-2 text-[0.875rem] font-semibold leading-none p-[0.875rem] px-6 rounded-2xl border border-transparent cursor-pointer transition-all duration-300 whitespace-nowrap no-underline bg-gradient-to-r from-indigo-600 to-violet-600 text-white hover:from-indigo-500 hover:to-violet-500 hover:shadow-[0_6px_20px_rgba(99,102,241,0.35)] w-full mt-2"
                        type="submit">
                        Login
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </button>
                </form>

                <div class="flex flex-col gap-5 mt-5">
                    <div
                        class="flex items-center gap-3 text-[#94a3b8] text-[0.75rem] font-medium tracking-wider uppercase before:content-[''] before:flex-1 before:h-[1px] before:bg-[#e2e8f0] after:content-[''] after:flex-1 after:h-[1px] after:bg-[#e2e8f0]">
                        Or continue with</div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <button
                            class="inline-flex items-center justify-center gap-2 font-medium leading-none p-[0.625rem] px-[1.125rem] rounded-2xl border border-[#e2e8f0] cursor-pointer transition-all duration-[0.15s] whitespace-nowrap no-underline bg-white text-[#1e1b4b] hover:bg-[#eef2ff]">
                            <svg width="18" height="18" viewBox="0 0 24 24">
                                <path fill="#4285F4"
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                <path fill="#34A853"
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                <path fill="#FBBC05"
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                <path fill="#EA4335"
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                            </svg>
                            Google
                        </button>
                        <button
                            class="inline-flex items-center justify-center gap-2 font-medium leading-none p-[0.625rem] px-[1.125rem] rounded-2xl border border-[#e2e8f0] cursor-pointer transition-all duration-[0.15s] whitespace-nowrap no-underline bg-white text-[#1e1b4b] hover:bg-[#eef2ff]">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                            </svg>
                            Apple
                        </button>
                    </div>

                    <p class="text-center text-[0.875rem] text-[#64748b] mt-6">
                        Don't have an account? <a class="font-bold text-[#1e1b4b] hover:underline"
                            href="/register">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <footer
        class="fixed bottom-0 left-0 right-0 bg-[#1e1b4b] border-t border-white/10 p-4 px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
        <span class="font-bold text-[0.875rem] text-white/50">ChipIN &nbsp;©&nbsp;2024 ChipIN Inc.</span>
        <ul class="flex gap-5 list-none">
            <li><a class="text-[0.75rem] text-white/40 hover:text-white/80 no-underline" href="#">Support</a>
            </li>
            <li><a class="text-[0.75rem] text-white/40 hover:text-white/80 no-underline" href="#">Privacy
                    Policy</a></li>
            <li><a class="text-[0.75rem] text-white/40 hover:text-white/80 no-underline" href="#">Terms of
                    Service</a></li>
        </ul>
    </footer>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('login-password');

        togglePassword.addEventListener('click', function() {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
        });
    </script>

</body>

</html>
