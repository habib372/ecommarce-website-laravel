<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
//Add modal / edit modal
  <!-------------Edit Sections Model --------------->
    <div class="modal fade" id="update-section-modal">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Update Name</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="#" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label for="adminemail">Section Name:</label>
                  <input type="text" class="form-control" value="" placeholder="Enter section name..">
                </div>
                <div class="form-group">
                  <label for="adminemail">Section Status:</label>
                  <input type="number" class="form-control" value=""  placeholder="1 = Active, 0 = Inactive" >
                </div>
              </div> 
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger text-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-success text-white">Save</button>
              </div>
            </form> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-------- /.modal ------------>

    //add button with modal
    <button type="button" class="btn btn-default btn-sm float-right border-primary" name="add-new-section"  data-toggle="modal" data-target="#add-new-section"><i class="fas fa-plus"></i> Add New Section</button>

    //edit button  
    <a type="button" class="btn btn-default btn-sm float-left mr-1 border-success" name="edit-section" data-toggle="modal" data-target="#edit-section" title="edit" value="edit"><i class="fas fa-edit"></i></a>

    //delete button
    <form action="#" method="#" onsubmit="return confirm('Are you sure?')">
        <!-- @csrf
        @method("DELETE") -->
        <button type="submit" class="btn btn-default btn-sm btn-delete border-danger" name="delete-section" value="delete" title="delete"><i class="far fa-trash-alt"></i>
        </button>
    </form>


</body>
</html>