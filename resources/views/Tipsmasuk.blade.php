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
                @if ($donations->isEmpty())
                    <div class="flex flex-col items-center justify-center py-20 px-5 text-center">
                        <div class="w-20 h-20 bg-brand-bg rounded-full flex items-center justify-center mb-5 text-3xl">🎁
                        </div>
                        <h3 class="text-lg font-bold mb-2">Wah, masih sepi nih!</h3>
                        <p class="text-xs text-brand-muted max-w-[320px] line-height-relaxed">Tips dari fans kamu bakal
                            muncul di sini. Yuk, share link tip kamu biar mulai dapet support! 🎉</p>
                    </div>
                @else
                    <div class="space-y-4">
                        @foreach ($donations as $donation)
                            <div class="rounded-2xl border border-brand-border p-5 shadow-sm">
                                <div class="flex flex-col gap-3 md:flex-row md:items-start md:justify-between">
                                    <div>
                                        <div class="text-sm font-semibold text-brand-primary">
                                            {{ $donation->sender_name ?: 'Anonymous' }}
                                        </div>
                                        <div class="text-xs text-brand-muted mt-1">
                                            {{ $donation->created_at->translatedFormat('d M Y, H:i') }}
                                        </div>
                                    </div>
                                    <div class="text-left md:text-right">
                                        <div class="text-lg font-bold text-brand-accent">
                                            Rp {{ number_format($donation->net_amount, 0, ',', '.') }}
                                        </div>
                                        <div class="text-xs uppercase tracking-wide text-brand-muted">
                                            {{ $donation->status }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 rounded-xl bg-brand-bg p-3">
                                    <div class="text-xs font-semibold text-brand-primary">Pesan</div>
                                    <div class="text-sm text-brand-muted mt-1">
                                        {{ $donation->message ?: 'Tidak ada pesan.' }}
                                    </div>
                                </div>

                                <div class="mt-4 flex flex-wrap gap-2">
                                    <form method="POST" action="{{ route('kreator.tipmasuk.update-status', $donation) }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="paid">
                                        <button type="submit"
                                            class="rounded-full bg-emerald-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-emerald-700">
                                            Confirm
                                        </button>
                                    </form>

                                    <form method="POST" action="{{ route('kreator.tipmasuk.update-status', $donation) }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="pending">
                                        <button type="submit"
                                            class="rounded-full bg-amber-500 px-3 py-1.5 text-xs font-semibold text-white hover:bg-amber-600">
                                            Pending
                                        </button>
                                    </form>

                                    <form method="POST" action="{{ route('kreator.tipmasuk.update-status', $donation) }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="rejected">
                                        <button type="submit"
                                            class="rounded-full bg-rose-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-rose-700">
                                            Reject
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        {{ $donations->links() }}
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
