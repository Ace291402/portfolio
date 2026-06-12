<h2>My Skills</h2>

@foreach($skills as $skill)
    <div>
        <h4>{{ $skill->name }}</h4>
        <p>{{ $skill->percentage }}%</p>
    </div>
@endforeach

<h2>My Projects</h2>

@foreach($projects as $project)
    <div>
        <h4>{{ $project->title }}</h4>
        <p>{{ $project->description }}</p>

        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="200">
        @endif
    </div>
@endforeach