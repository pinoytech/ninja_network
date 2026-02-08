<x-layout title="Ninjas">
  <h2>Current available ninjas</h2>
  <p>{{ $greeting }}</p>
  <ul>
    @foreach ($ninjas as $ninja)
    <li>
      <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="{{ $ninja['skill'] > 70 }}">
        <h3>{{ $ninja['name'] }}</h3>
      </x-card>
    </li>
    @endforeach
  </ul>
</x-layout>
