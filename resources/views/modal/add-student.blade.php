<div>
    <div class="modal addStudentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-center" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title">Add Student</h5>

            </div>
            <div class="modal-body">

                <div class="form-outline mb-3" data-mdb-input-init>
                    <input type="text" id="firstname" class="form-control" />
                    <label class="form-label" for="firstname">First name</label>
                  </div>

                  <div class="form-outline mb-3" data-mdb-input-init>
                    <input type="text" id="lastname" class="form-control" />
                    <label class="form-label" for="lastname">Last name</label>
                  </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary saveButtons">Save</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
            </div>
          </div>
        </div>
      </div>

</div>
