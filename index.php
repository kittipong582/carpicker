<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-group">
      <label for="">input 1</label>
      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group">
      <label for="">input 2</label>
      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
</body>
</html>
<script>
    $(document).ready(function () {
        
    });

    function GetTable(){
        $.ajax({
            type: "POST",
            url: "ajax/index/gettable.php",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    }
</script>
