<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Student Management System</title>
  </head>
  <body>
  @include("navbar")
  @if($layout =='index')
        <div class="container-fluid mt-4">
         <div class="row">
            <section class="col-md-5">  @include("studentlist")  </section>
            <section class="col-md-6">    </section>
         </div>
        </div>
        @elseif($layout=='create')
        @if($errors->any())
        @foreach($errors->all() as $error)
          <li>{{  $error }}</li>
        @endforeach
        @endif
       <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-6">
                                                  <form method="get" action="/store">
                                                  <div class="form-group">
                                                    <label for="cne">CNE</label>
                                                    <input name="cne" type="text" class="form-control" id="cne" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="firstname">First Name</label>
                                                    <input name="firstName" type="text" class="form-control" id="firstName" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="lastname">Second Name</label>
                                                    <input name="secondName" type="text" class="form-control" id="secondName" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="age">Age</label>
                                                    <input name="age" type="text" class="form-control" id="Age" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="Speciality">Speciality</label>
                                                    <input name="speaciality" type="text" class="form-control" id="secondName" aria-describedby="cne number">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                              </section>                   
                              <section class="col-md-6"> @include("studentlist") </section>
                       
            </div>
        </div>      
       @elseif($layout=='edit')
       <div class="container-fluid mt-4">
       <div class="row">
       <section class="col" ></section>
                        <section class="col">
                                              <form method="get" action="{{ url('update/'.$student->id) }}">
                                                  <div class="form-group">
                                                    <label for="cne">CNE</label>
                                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" id="cne" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="firstname">First Name</label>
                                                    <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" id="firstName" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="lastname">Second Name</label>
                                                    <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" id="secondName" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="age">Age</label>
                                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control" id="Age" aria-describedby="cne number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="Speciality">Speciality</label>
                                                    <input value="{{ $student->speaciality }}" name="speaciality" type="text" class="form-control" id="secondName" aria-describedby="cne number">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Update</button>
                                                </form>

                      </section>
                      </div>
      </div>
       @elseif($layout=='show')
       <div class="container-fluid mt-4">
       <div class="row">
                        <section class="col">
                        @include("studentlist")
                      </section>
                        <section class="col"></section>
                      </div>
        </div>
  @endif
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>