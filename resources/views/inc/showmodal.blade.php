   {{-- show student modal --}}
              
   <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-info" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('student.show','student_id')}}" method="GET">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class="form-control" disabled>
                    </div>
                </div>
            </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control" disabled></textarea>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" id="gender" disabled>
                <option value=""></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

       

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Dismiss</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal">Get a Copy</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>