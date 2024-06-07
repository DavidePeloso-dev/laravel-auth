@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Projects</h1>
</div>
<div class="container">
    <div class="table-responsive-md">
        <table class="table table-striped table-hover table-borderless table-secondary align-middle">
            <thead class="table-dark">
                <caption>
                    Projects
                </caption>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Cover Image</th>
                    <th>Url</th>
                    <th>Source</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($projects as $project)
                <tr class="table-dark">
                    <td scope="row">{{$project->id}}</td>
                    <td><img style="width: 150px;" loading="lazy" src="{{$project->cover_image}}" alt=""></td>
                    <td>{{$project->name}}</td>
                    <td><a href="{{$project->project_url}}" target="_blank">Previw</a></td>
                    <td><a href="{{$project->source_code_url}}" target="_blank">Source Code</a></td>
                    <td>View|Edit|Delete</td>
                </tr>
                @empty
                <tr class="table-dark">
                    <td scope="row">No Projects available</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

</div>
@endsection()