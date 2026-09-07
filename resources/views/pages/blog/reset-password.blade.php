@extends('layouts.app')
@section('title', 'Set Your Password - InTech Nexus')

@section('content')
<section class="py-24 bg-[#0b0c10] min-h-screen">
    <div class="max-w-md mx-auto px-6 sm:px-12">
        <div class="mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-3">Set Your Password</h1>
            <p class="text-gray-400">Choose a password to finish setting up your account.</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 px-6 py-4 rounded-lg border border-red-500/30 bg-red-500/10 text-red-300" role="alert">
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" class="bg-white/[0.03] border border-white/10 rounded-2xl p-8">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $email) }}" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-300 mb-2">New Password</label>
                <input type="password" id="password" name="password" required minlength="8"
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
            </div>

            <div class="mb-8">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required minlength="8"
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
            </div>

            <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-7 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full bg-purple-600 hover:bg-purple-500 transition-all">
                Set Password
            </button>
        </form>
    </div>
</section>
@endsection
