<x-app-layout>

        @guest

            <x-slot name="header">
                Pest Testing
            </x-slot>

            <div class="mt-5">
                Sign up to get started.
            </div>

        @endguest

</x-app-layout>
