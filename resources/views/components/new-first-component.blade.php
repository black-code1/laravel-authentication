<div {{ $attributes->merge(['class' => 'font-bold'])}}>
    <!-- Be present above all else. - Naval Ravikant -->
    <h1>{{ $name }} tu es sur le post : {{ $title }}</h1>
    {{ $subtitle }}

    @foreach ($tags as $tag)
    {{ $tag }}
    @endforeach

    
</div>