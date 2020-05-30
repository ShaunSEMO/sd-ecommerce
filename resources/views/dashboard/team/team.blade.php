<div class="content">
    <a class="btn btn-primary" href="{{ url('/$d_3c0mm3rc3/team/add') }}">Add Member</a>
    <br><br>
    <div class="container" style="overflow-x:auto;">
        
        <table>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Position</th>
                <th>Bio</th>
                <th>Email</th>
            </tr>
            
        </table>


        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Bio</th>
                <th scope="col">Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)

                <tr>
                    <td><img style="width: 100px" src="{{ asset($member->image) }}" class="img-fluid" alt="Member Avatar"></td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->position }}</td>
                    <td>{{ $member->description }}</td>
                    <td>{{ $member->email }}</td>

                    <td>
                        <a class="btn btn-outline-warning" href="{{ url('/$d_3c0mm3rc3/team/'.$member->id.'/edit') }}">Edit</a>
                        
                        {!! Form::open(['action' => ['DashboardController@deleteMember', $member->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                        {!!Form::close()!!}
                    </td>
                    
                    
                </tr>
                
            @endforeach
            </tbody>
          </table>
        

    </div>
</div>