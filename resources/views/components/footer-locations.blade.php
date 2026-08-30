@php
    $locations ??= collect([
        ['city' => 'Mohali', 'country' => 'India', 'address' => 'Plot No. 145, Sector 82, Sahibzada Ajit Singh Nagar, Punjab 160062'],
        ['city' => 'Hyderabad', 'country' => 'India', 'address' => '3rd Floor, Krishna Grand, Road No. 2, Banjara Hills, Telangana 500034'],
        ['city' => 'Kochi', 'country' => 'India', 'address' => 'Ground Floor, Smart City Street, Ernakulam, Kerala 682037'],
        ['city' => 'Sydney', 'country' => 'Australia', 'address' => 'Level 12, 179 Elizabeth Street, Sydney NSW 2000'],
        ['city' => 'Los Angeles', 'country' => 'USA', 'address' => '12575 Willshire Ave, Suite 205, Los Angeles, CA 90025'],
    ]);
@endphp

<div class="bg-[#0d0d0d] text-gray-300 py-12">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
        <h2 class="text-white font-heading font-bold text-3xl leading-tight mb-8 text-center">Our Locations</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
            @foreach ($locations as $location)
                <div
                    class="group bg-[#121212] rounded-2xl p-6 border border-gray-800 transition-all duration-300 ease-in-out hover:translate-y-1.5 hover:border-gray-600">
                    <h3 class="text-white font-semibold text-lg mb-1 transition-colors duration-300 group-hover:text-gray-200">
                        {{ $location['city'] }}
                    </h3>
                    @if (isset($location['country']))
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-2.5">
                            {{ $location['country'] }}
                        </p>
                    @endif
                    <p class="text-sm text-gray-400 leading-relaxed">
                        {{ $location['address'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
