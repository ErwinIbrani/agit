<html>
    <head>
        <title>Koplok Form</title>
        <script src="jquery.min.js"></script>
        <script type="text/javascript">
            function check_itoc(){
                var data_var = $("#id_issue").val();
                $.ajax({
                    url: 'proses-ajax-itoc.php',
                    data:"id_issue="+data_var ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    if(obj.data1 !== null){
                    $('#issue_name').val(obj.data1);
                    $('#dep_pic').val(obj.data2);
                    }
                    else{
                      alert("Data Not Found");
                      $('#issue_name').val(obj.data1);
                      $('#dep_pic').val(obj.data2);
                   }
                });
            }
            function check_incident(){
                var data_var = $("#id_issue").val();
                $.ajax({
                    url: 'proses-ajax-incident.php',
                    data:"id_issue="+data_var ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    if(obj.data1 !== null){
                    $('#issue_name').val(obj.data1);
                    $('#dep_pic').val(obj.data2);
                    }
                    else{
                      alert("Data Not Found");
                      $('#issue_name').val(obj.data1);
                      $('#dep_pic').val(obj.data2);
                   }
                });
            }
        </script>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="id_issue" id="id_issue" placeholder="ID ISSUE" autocomplete="off"/>
            <a href="javascript:void(0)" onclick="check_itoc();">Check ITOC</a>| 
            |<a href="javascript:void(0)" onclick="check_incident();">Check INCIDENT</a>
            <br/>
            <input type="text" name="issue_name" id="issue_name" placeholder="ISSUE NAME" autocomplete="off"/>
            <br/>
                <input type="text" name="dep_pic" id="dep_pic" placeholder="PIC/DEPT" autocomplete="off"/>
            <br/>
            <input type="text" name="type" placeholder="ISSUE TYPE" autocomplete="off"/>
            <br/>
            <input type="text" name="action" placeholder="ACTION" autocomplete="off"/>
            <br/>
            <input type="text" name="status" placeholder="STATUS" autocomplete="off"/>
            <input type="submit"/>
        </form>
    </body>
</html>

