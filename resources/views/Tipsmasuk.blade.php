@extends('layouts.app')
@section('dashboard-kreator')
    <main class="ml-60 flex-1 py-9 px-10 min-h-screen">
        <div id="page-tipsmasuk" class="page">
            <h1 class="text-3xl font-extrabold tracking-tight mb-7">Tips</h1>
            <div class="flex border-b-2 border-brand-border mb-6">
                <div class="py-2.5 px-5 text-xs font-semibold text-brand-primary border-b-2 border-brand-accent -mb-[2px]">
                    SEMUA</div>
            </div>
            <div class="bg-white rounded-2xl border border-brand-border p-6 shadow-[0_2px_16px_rgba(79,70,229,0.06)]">
                <div class="flex flex-col items-center justify-center py-20 px-5 text-center">
                    <div class="w-20 h-20 bg-brand-bg rounded-full flex items-center justify-center mb-5 text-3xl">🎁
                    </div>
                    <h3 class="text-lg font-bold mb-2">Wah, masih sepi nih!</h3>
                    <p class="text-xs text-brand-muted max-w-[320px] line-height-relaxed">Tips dari fans kamu bakal
                        muncul di sini. Yuk, share link tip kamu biar mulai dapet support! 🎉</p>
                </div>
            </div>
        </div>
    </main>
@endsection
