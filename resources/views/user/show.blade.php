<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ticket List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button class="bg-green-500 float-right">
                        {{__('Create :resource', ['resource' => __('Ticket')])}}
                    </x-button>

                    <div class="wrapper">
                        <div class="table">
                            <div class="row header green">
                                <div class="cell">#</div>
                                <div class="cell">{{__('Name')}}</div>
                                <div class="cell">{{__('Action')}}</div>
                            </div>

                            @foreach ($user->tickets as $index => $ticket)
                            <div class="row">
                                <div class="cell">{{$index + 1}}</div>
                                <div class="cell">{{$ticket->name}}</div>
                                <div class="cell flex gap-2">
                                    <x-button class="bg-purple-500">
                                        {{__('View')}}
                                    </x-button>
                                    <x-button class="bg-blue-600">
                                        {{__('Edit')}}
                                    </x-button>
                                    <x-button class="bg-red-600">
                                        {{__('Delete')}}
                                    </x-button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
