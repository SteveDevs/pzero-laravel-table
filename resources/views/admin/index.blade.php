

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Country</th>
                                <th scope="col" class="px-6 py-3">Total Cases</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">New Cases</th>
                                <th scope="col" class="px-6 py-3">Total Deaths</th>
                                <th scope="col" class="px-6 py-3">New Deaths</th>
                                <th scope="col" class="px-6 py-3">Total Recovered</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($jsonData as $data)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $data['Country'] }}</td>
                                <td class="px-6 py-4">{{ $data['TotalCases'] }}</td>
                                <td class="px-6 py-4">{{ $data['NewCases'] }}</td>
                                <td class="px-6 py-4">{{ $data['TotalDeaths'] }}</td>
                                <td class="px-6 py-4">{{ $data['NewDeaths'] }}</td>
                                <td class="px-6 py-4">{{ $data['TotalRecovered'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

