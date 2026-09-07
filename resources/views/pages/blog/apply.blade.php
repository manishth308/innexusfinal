@extends('layouts.app')
@section('title', 'Write for Us - InTech Nexus')

@section('content')
<section class="py-24 bg-[#0b0c10] min-h-screen">
    <div class="max-w-2xl mx-auto px-6 sm:px-12">
        <div class="max-w-xl mb-12">
            <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Write for Us</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mt-3 mb-4">Become a Blogger</h1>
            <p class="text-gray-400 text-lg leading-relaxed">
                Tell us a bit about yourself. We review every application by hand -
                if it's a fit, we'll email you a link to set up your account.
            </p>
            <p class="text-gray-500 text-sm mt-3">
                Already have an account? <a href="{{ route('filament.blogs.auth.login') }}" class="text-purple-400 hover:text-purple-300 underline">Log in here</a>.
            </p>
        </div>

        @if (session('success'))
            <div class="mb-6 px-6 py-4 rounded-lg border border-green-500/30 bg-green-500/10 text-green-300" role="status">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 px-6 py-4 rounded-lg border border-red-500/30 bg-red-500/10 text-red-300" role="alert">
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('blogs.apply.submit') }}" class="bg-white/[0.03] border border-white/10 rounded-2xl p-8 md:p-10">
            @csrf

            {{-- Honeypot - real visitors never see or fill this in. --}}
            <div class="hp-field" aria-hidden="true">
                <label for="website">Website</label>
                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-300 mb-2">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required
                        class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-300 mb-2">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required
                        class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
                </div>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
            </div>

            <div class="mb-8">
                <label for="profession" class="block text-sm font-medium text-gray-300 mb-2">Profession</label>
                <input type="text" id="profession" name="profession" value="{{ old('profession') }}" required
                    placeholder="e.g. Frontend Developer, Marketing Writer"
                    class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500">
            </div>

            <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-7 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full bg-purple-600 hover:bg-purple-500 transition-all">
                Submit Application
            </button>
        </form>
    </div>
</section>
@endsection
