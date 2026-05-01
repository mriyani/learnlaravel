<x-layout>
    <x-slot:heading>
        Jobs List
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <a href="/job/{{ $job['id'] }}" class="block p-2 rounded-md hover:bg-gray-100 hover:text-blue-500">
            <li>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </li>
            @endforeach
        </a>
    </ul>
</x-layout>