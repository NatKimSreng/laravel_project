<x-layout>
      <x-slot:heading>
    Job list
  </x-slot:heading>
    <h1>JOB</h1>
    <ul>
      @foreach($jobs as $job)
        <li>
          <a href="/job/{{ $job['id'] }}">
            <strong>{{  $job['title'] }}: </strong>Pays  {{ $job['salary'] }} per days.
          </a>
        </li>
      @endforeach
    </ul>


</x-layout>