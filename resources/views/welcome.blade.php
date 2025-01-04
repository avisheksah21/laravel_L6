<x-layout>
    <x-slot:heading>
        Welcome to LaraBooks
    </x-slot:heading>
    <h1>Read what you love</h1>
    <h2>Grab the offer now!!!</h2>
    @foreach ($offers as $offer)
        <li>
            <strong>
                {{$offer['title']}}
            </strong>
            Is now at only
            <strong>
                {{$offer['price']}}
            </strong>
        </li>
    @endforeach
    
</x-layout>