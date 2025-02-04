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