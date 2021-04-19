<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div>

        <form action="{{ route('add.address') }}" method="POST">
            @csrf

            <section>
                <x-label for="house_num" value="House Number"/>
                <x-input id="house_num" class="block mt-1" type="tel" name="house_num" required autofocus/>
            </section>

            <section>
                <x-label for="street" value="Street"/>
                <x-input id="street" class="block mt-1" type="text" name="street" required autofocus />
            </section>

            <section>
                <x-label for="barangay" value="Barangay"/>
                <x-input id="barangay" class="block mt-1" type="text" name="barangay" required autofocus />
            </section>

            <section>
                <x-label for="municipality" value="Municipality"/>
                <x-input id="municipality" class="block mt-1" type="text" name="municipality" required autofocus />
            </section>

            <section>
                <x-label for="province" value="Province"/>
                <x-input id="province" class="block mt-1" type="text" name="province" required autofocus />
            </section>

            <section class="mt-4">
                <x-button>
                    ADD
                </x-button>
            </section>

        </form>

    </div>

</x-app-layout>
