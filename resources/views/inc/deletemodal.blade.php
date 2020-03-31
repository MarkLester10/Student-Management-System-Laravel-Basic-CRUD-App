   {{-- delete student modal --}}
              
   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('student.destroy','student_id')}}" method="POST">
            @csrf
            @method('DELETE')
           <input type="hidden" id="student_id" name="student_id" class="form-control">
           <h3 class="text-center">Are you sure you want to delete this student?</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No! Cancel</button>
          <button type="submit" class="btn btn-danger">Yes! Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>