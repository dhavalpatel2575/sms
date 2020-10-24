<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Specility</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->secondName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speaciality}}</td>
      <td>
      <a href="{{ url('edit/'.$student->id)  }}" type="button" class="btn btn-warning">Edit</a>
      <a href="{{ url('delete/'.$student->id) }}" type="button" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
    @endforeach
    <tr>
         <td><?php echo $students->render(); ?></td>
    </tr>
  </tbody>