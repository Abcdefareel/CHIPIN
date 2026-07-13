<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChipIN — Create Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .cv-alert {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 8px;
            padding: 0.75rem 0.875rem;
            margin-bottom: 1.25rem;
            font-family: 'Inter', -apple-system, sans-serif;
            animation: cvAlertIn 0.2s ease-out;
        }

        .cv-alert__icon {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            margin-top: 1px;
            color: #dc2626;
        }

        .cv-alert__body {
            flex: 1;
        }

        .cv-alert__title {
            font-size: 0.8125rem;
            font-weight: 600;
            color: #dc2626;
            margin-bottom: 2px;
        }

        .cv-alert__list {
            margin: 0;
            padding: 0;
            list-style: none;
            font-size: 0.8125rem;
            color: #64748b;
            line-height: 1.6;
        }

        .cv-alert__list li+li {
            margin-top: 1px;
        }

        @keyframes cvAlertIn {
            from {
                opacity: 0;
                transform: translateY(-4px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body
    class="font-['Plus_Jakarta_Sans',_'Inter',_sans-serif] bg-[#eef2ff] text-base text-[#1e1b4b] min-h-screen flex flex-col antialiased leading-[1.6]">



    @if ($errors->any())
        <div class="cv-alert">
            <svg class="cv-alert__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" />
                <line x1="12" y1="8" x2="12" y2="12" />
                <line x1="12" y1="16" x2="12.01" y2="16" />
            </svg>
            <div class="cv-alert__body">
                <div class="cv-alert__title">Couldn't create your account</div>
                <ul class="cv-alert__list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <nav class="bg-white/75 backdrop-blur-xl border-b border-slate-200/70 sticky top-0 z-50 h-14 flex items-center w-full transition-all duration-300">
        <div class="w-full max-w-[1200px] mx-auto px-6 flex items-center gap-8">
            <a class="flex items-center gap-2 font-bold text-lg text-[#1e1b4b] no-underline hover:underline whitespace-nowrap"
                href="#">
                <div class="grid grid-cols-2 gap-[3px] w-[22px] h-[22px]">
                    <span class="bg-[#1e1b4b] rounded-[2px]"></span>
                    <span class="bg-[#1e1b4b] rounded-[2px]"></span>
                    <span class="bg-[#1e1b4b] rounded-[2px]"></span>
                    <span class="bg-[#1e1b4b] rounded-[2px]"></span>
                </div>
                ChipIN
            </a>
            <ul class="hidden md:flex items-center gap-6 list-none">
                <li><a class="text-[0.875rem] font-medium text-[#64748b] no-underline transition-colors duration-[0.15s] hover:text-[#1e1b4b] hover:underline"
                        href="">Products</a></li>
                <li><a class="text-[0.875rem] font-medium text-[#64748b] no-underline transition-colors duration-[0.15s] hover:text-[#1e1b4b] hover:underline"
                        href="#">Solutions</a></li>
                <li><a class="text-[0.875rem] font-medium text-[#64748b] no-underline transition-colors duration-[0.15s] hover:text-[#1e1b4b] hover:underline"
                        href="#">Pricing</a></li>
            </ul>
            <div class="ml-auto flex items-center gap-3">
                <a href="login"
                    class="inline-flex items-center justify-center gap-2 text-[0.75rem] font-semibold leading-none p-[0.375rem] px-3 rounded-xl border border-transparent cursor-pointer transition-all duration-[0.15s] whitespace-nowrap no-underline bg-transparent text-[#64748b] hover:bg-[#eef2ff] hover:text-[#1e1b4b]">Log
                    In</a>
                <a href="register"
                    class="inline-flex items-center justify-center gap-2 text-[0.75rem] font-semibold leading-none p-[0.375rem] px-3 rounded-xl border border-transparent cursor-pointer transition-all duration-300 whitespace-nowrap no-underline bg-gradient-to-r from-indigo-600 to-violet-600 text-white hover:from-indigo-500 hover:to-violet-500">Get
                    Started</a>
            </div>
        </div>
    </nav>

    <main class="flex-1 flex flex-col items-center justify-center p-10 px-4">
        <div
            class="bg-white border border-[#e2e8f0] rounded-[22px] p-10 px-8 w-full max-w-[480px] shadow-[0_8px_40px_rgba(79,70,229,0.1)]">
            <h1 class="text-[1.875rem] font-extrabold text-center -tracking-[0.02em] mb-2">Create your account</h1>
            <p class="text-center text-[0.875rem] text-[#64748b] mb-8">Join the community of 50k+ elite creators and
                professionals.</p>

            <form action="/register/process" method="POST" class="flex flex-col gap-5">
                @csrf

                <div class="flex flex-col gap-2">
                    <label class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]"
                        for="reg-username">Username</label>
                    <div class="relative flex items-center">
                        <svg class="absolute left-3 text-[#94a3b8] pointer-events-none w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        <input id="reg-username"
                            class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] pl-9 pr-[0.875rem] transition-all duration-[0.15s] outline-none leading-[1.5] focus:border-[#6366f1] focus:shadow-[0_0_0_3px_rgba(99,102,241,0.14)] placeholder:text-[#94a3b8]"
                            type="text" placeholder="alex_creator" name="username" />
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]"
                        for="reg-email">Email Address</label>
                    <div class="relative flex items-center">
                        <svg class="absolute left-3 text-[#94a3b8] pointer-events-none w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        <input id="reg-email"
                            class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] pl-9 pr-[0.875rem] transition-all duration-[0.15s] outline-none leading-[1.5] focus:border-[#6366f1] focus:shadow-[0_0_0_3px_rgba(99,102,241,0.14)] placeholder:text-[#94a3b8]"
                            type="email" placeholder="alex@chipin.com" name="email" />
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]"
                            for="reg-pass">Password</label>
                        <div class="relative flex items-center">
                            <svg class="absolute left-3 text-[#94a3b8] pointer-events-none w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                            <input id="reg-pass"
                                class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] pl-9 pr-[0.875rem] transition-all duration-[0.15s] outline-none leading-[1.5] focus:border-[#6366f1] focus:shadow-[0_0_0_3px_rgba(99,102,241,0.14)] placeholder:text-[#94a3b8]"
                                type="password" placeholder="••••••••" name="password" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[0.75rem] font-semibold tracking-wider uppercase text-[#64748b]"
                            for="reg-confirm">Confirm</label>
                        <div class="relative flex items-center">
                            <svg class="absolute left-3 text-[#94a3b8] pointer-events-none w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path
                                    d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4" />
                            </svg>
                            <input id="reg-confirm"
                                class="w-full text-[0.875rem] text-[#1e1b4b] bg-white border border-[#e2e8f0] rounded-2xl p-[0.625rem] pl-9 pr-[0.875rem] transition-all duration-[0.15s] outline-none leading-[1.5] focus:border-[#6366f1] focus:shadow-[0_0_0_3px_rgba(99,102,241,0.14)] placeholder:text-[#94a3b8]"
                                type="password" placeholder="••••••••" name="confirm_password" />
                        </div>
                    </div>
                </div>

                <label class="flex items-start gap-2 text-[0.875rem] text-[#64748b] cursor-pointer">
                    <input type="checkbox" class="w-4 h-4 mt-[1px] shrink-0 accent-[#6366f1] cursor-pointer" />
                    <span>I agree to the <a href="#"
                            class="mx-[3px] text-[#1e1b4b] font-semibold hover:underline">Terms of Service</a> and <a
                            href="#" class="mx-[3px] text-[#1e1b4b] font-semibold hover:underline">Privacy
                            Policy</a>.</span>
                </label>

                <button
                    class="inline-flex items-center justify-center gap-2 text-[0.875rem] font-semibold leading-none p-[0.875rem] px-6 rounded-2xl border border-transparent cursor-pointer transition-all duration-300 whitespace-nowrap no-underline bg-gradient-to-r from-indigo-600 to-violet-600 text-white hover:from-indigo-500 hover:to-violet-500 hover:shadow-[0_6px_20px_rgba(99,102,241,0.35)] w-full"
                    type="submit">
                    Register Account
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

                <div class="grid grid-cols-2 gap-3">
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
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" />
                        </svg>
                        GitHub
                    </button>
                </div>

                <p class="text-center text-[0.875rem] text-[#64748b] mt-6">
                    Already have an account? <a class="font-bold text-[#1e1b4b] hover:underline" href="/login">Log
                        in</a>
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center gap-10 py-8">
            <div class="flex flex-col items-center gap-2 text-[0.75rem] text-[#64748b] font-medium">
                <svg class="w-7 h-7 text-[#64748b]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
                Secure AES-256
            </div>
            <div class="flex flex-col items-center gap-2 text-[0.75rem] text-[#64748b] font-medium">
                <svg class="w-7 h-7 text-[#64748b]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5">
                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                    <polyline points="17 6 23 6 23 12" />
                </svg>
                Auto-sync
            </div>
            <div class="flex flex-col items-center gap-2 text-[0.75rem] text-[#64748b] font-medium">
                <svg class="w-7 h-7 text-[#64748b]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.18h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6.08 6.08l1.17-1.17a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                24/7 Support
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-[#e2e8f0] py-6 w-full">
        <div class="max-w-[1200px] mx-auto px-6 flex items-center justify-between gap-4">
            <div>
                <div class="font-bold text-base text-[#1e1b4b]">ChipIN</div>
                <div class="text-[0.75rem] text-[#94a3b8]">© 2024 ChipIN Inc.</div>
            </div>
            <ul class="flex gap-5 list-none">
                <li><a class="text-[0.75rem] text-[#64748b] no-underline hover:underline" href="#">Support</a>
                </li>
                <li><a class="text-[0.75rem] text-[#64748b] no-underline hover:underline" href="#">Privacy
                        Policy</a></li>
                <li><a class="text-[0.75rem] text-[#64748b] no-underline hover:underline" href="#">Terms of
                        Service</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>
