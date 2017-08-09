
<table>
    <tr>
        <th>Name</th>
        <th>Task count</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    @foreach($features as $feature)
        <tr>
            <td><a href="/features/{{$feature->id}}/tasks">{{$feature->name}}</a></td>
            <td>{{$feature->tasks_count}}</td>
            <td>{{$feature->created_at}}</td>
            <td>{{$feature->updated_at}}</td>
        </tr>
    @endforeach
</table>