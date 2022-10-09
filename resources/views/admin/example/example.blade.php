<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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