<div class="ibox">
    <div class="ibox-title">
        <div class="row">
            <div class="col-lg-3 mb-2">
                <h3>TITLE</h3>
            </div>
        </div>
        <div class="ibox-tools">
            <button class="btn btn-md btn-primary" onclick="form_add()"><i class="fa fa-plus"></i>&nbsp;เพิ่มบทความ</button>
        </div>
    </div>
    <div class="ibox-content">
        <!----- ตาราง ---->
        <div id="Loading">
            <div class="spiner-example">
                <div class="sk-spinner sk-spinner-wave">
                    <div class="sk-rect1"></div>
                    <div class="sk-rect2"></div>
                    <div class="sk-rect3"></div>
                    <div class="sk-rect4"></div>
                    <div class="sk-rect5"></div>
                </div>
            </div>
        </div>
        <div id="show_table"></div>
        <!----- ตาราง ---->
    </div>
</div>
<script>
    $(document).ready(function () {
        GetTable()
    });

    function GetTable(){
        $.ajax({
            type: "POST",
            url: "ajax/index/gettable.php",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                $("#show_table").html(response);
            }
        });
    }
</script>