<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@extends('layouts.app')

@section('content')
    <div id="container3">
        <h4>TOPICS</h4>
        <input type='button' value='Fetch all records' id='but_fetchall'>
        <table border='1' id='userTable' style='border-collapse: collapse;'>
            <thead>
            <tr>
                <th>S.no</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>



    </div>
@endsection

<script type="text/javascript">

    $(document).ready(function(){
        //console.log("robim");
        fetchRecords();
    });

    function fetchRecords(){
        $.ajax({
            url: '<?php echo url('http://localhost/blog/public/article/topicsAjax')?>',
            type: 'GET',
            dataType: 'json',
            success: function(response){
                console.log("kokot");
                var len = 0;
                $('#userTable tbody').empty(); // Empty <tbody>
                if(response['data'] != null){

                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var title = response['data'][i].title;

                        var tr_str = "<tr>" +
                            "<td align='center'>" + title + "</td>" +
                            "</tr>";

                        $("#userTable tbody").append(tr_str);
                    }
                }else{
                    var tr_str = "<tr>" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";

                    $("#userTable tbody").append(tr_str);
                }

            }
        });
    }

</script>
