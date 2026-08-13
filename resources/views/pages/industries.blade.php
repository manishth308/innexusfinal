@extends('layouts.app')

@section('title', 'Industries - Intech Nexus')

@section('content')
    <section class="relative min-h-[700px] overflow-hidden bg-[#061a3b]">

        {{-- Background Image --}}
        <div
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/industries-bg.jpg') }}');"
        ></div>

        {{-- Dark Blue Overlay --}}
        <div class="absolute inset-0 bg-[#061a3b]/85"></div>

        {{-- Content --}}
        <div class="relative z-10 mx-auto max-w-[1320px] px-6 py-10 lg:px-0">

            @php
                $industries = [
                    ['title' => 'Entertainment', 'url' => '#'],
                    ['title' => 'Education', 'url' => '#'],

                    ['title' => 'Manufacturing', 'url' => '#'],
                    ['title' => 'Transportation and Logistics', 'url' => '#', 'active' => true],
                    ['title' => 'Agriculture', 'url' => '#'],

                    ['title' => 'Automotive', 'url' => '#'],
                    ['title' => 'IoT', 'url' => '#'],
                    ['title' => 'Sports and Lifestyle', 'url' => '#'],

                    ['title' => 'Security', 'url' => '#'],
                    ['title' => 'Tourism and Hospitality', 'url' => '#'],
                    ['title' => 'Oil & Gas', 'url' => '#'],

                    ['title' => 'Retail', 'url' => '#'],
                    ['title' => 'Professional Services', 'url' => '#'],
                    ['title' => 'IT Services', 'url' => '#'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-0">

                @foreach ($industries as $industry)

                    <a
                        href="{{ $industry['url'] }}"
                        class="
                            group relative flex min-h-[176px] items-start
                            border-t border-white/70
                            px-8 py-7
                            text-white
                            transition-all duration-300
                            md:min-h-[176px]
                            md:px-8
                            {{ !empty($industry['active'])
                                ? 'bg-[#2699e9]'
                                : 'hover:bg-[#2699e9]'
                            }}
                    "
                    >

                        {{-- Industry Name --}}
                        <span
                            class="
                                max-w-[280px]
                                text-[26px]
                                font-medium
                                leading-[1.45]
                                tracking-[-0.02em]
                                transition-transform duration-300
                                group-hover:translate-x-1
                            "
                        >
                            {{ $industry['title'] }}
                        </span>

                        {{-- Arrow --}}
                        <span
                            class="
                                absolute right-7 top-5
                                text-[38px]
                                font-light
                                leading-none
                                opacity-0
                                transition-all duration-300
                                group-hover:translate-x-1
                                group-hover:opacity-100
                                {{ !empty($industry['active']) ? 'opacity-100' : '' }}
                            "
                        >
                            ↗
                        </span>

                    </a>

                @endforeach

            </div>

        </div>
    </section>
@endsection
