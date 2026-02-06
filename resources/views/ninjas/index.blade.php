<x-layout title="Ninjas">
  <h2>Current available ninjas</h2>
  <p>{{ $greeting }}</p>
  <ul>
    @foreach ($ninjas as $ninja)
    <li><a href="/ninjas/{{ $ninja['id'] }}">{{ $ninja['name'] }}</a></li>
    @endforeach
  </ul>
</x-layout>
