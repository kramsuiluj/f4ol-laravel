<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>

        Personal Information

        <div class="bg-blue-100 mb-4">
            <div class="mt-4">
                <h1 class="font-bold">First Name</h1>
                <p>{{ auth()->user()->first_name }}</p>
            </div>

            <div class="mt-4">
                <h1 class="font-bold">Last Name</h1>
                <p>{{ auth()->user()->last_name }}</p>
            </div>

            <div class="mt-4">
                <h1 class="font-bold">Email Address</h1>
                <p>{{ auth()->user()->email }}</p>
            </div>
        </div>

        Address

{{--        <div>--}}
{{--            <div>--}}
{{--                <h1 class="font-bold">House Number</h1>--}}
{{--                <p>{{ auth()->user()->addresses[0]['house_num'] }}</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <h1 class="font-bold">Street</h1>--}}
{{--                <p>{{ auth()->user()->addresses[0]['street'] }}</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <h1 class="font-bold">Barangay</h1>--}}
{{--                <p>{{ auth()->user()->addresses[0]['barangay'] }}</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <h1 class="font-bold">Municipality</h1>--}}
{{--                <p>{{ auth()->user()->addresses[0]['municipality'] }}</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <h1 class="font-bold">Province</h1>--}}
{{--                <p>{{ auth()->user()->addresses[0]['province'] }}</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        @foreach ($addresses as $address)

            <div class="mt-4 bg-red-100">
                <section>
                    <h1 class="font-bold"> House Number </h1>
                    <p>{{ $address->house_num }}</p>
                </section>

                <section>
                    <h1 class="font-bold"> Street </h1>
                    <p>{{ $address->street }}</p>
                </section>

                <section>
                    <h1 class="font-bold"> Barangay </h1>
                    <p>{{ $address->barangay }}</p>
                </section>

                <section>
                    <h1 class="font-bold"> Municipality </h1>
                    <p>{{ $address->municipality }}</p>
                </section>

                <section>
                    <h1 class="font-bold"> Province </h1>
                    <p>{{ $address->province }}</p>
                </section>
            </div>

        @endforeach


    </div>


</x-app-layout>
