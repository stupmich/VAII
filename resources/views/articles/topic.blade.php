<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@extends('layouts.app')

@section('content')
    <div id="container3">
        <p id="text"></p>
    </div>
@endsection


<script type="text/javascript">

    $(document).ready(function(){
        fetchRecords();
    });

    function fetchRecords(){

        url = window.location.href;
        var id = url.split("/",8).pop();
        var urlstr = 'http://localhost/blog/public/article/topicAjax/' + id


        console.log(url);
        $.ajax({
            url: '<?php echo url()?>',
            type: 'GET',
            dataType: 'json',
            success: function(response){
                var len = 0;
                $('#text').empty(); // Empty <tbody>
                if(response['data'] != null){

                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){
                        var text = response['data'][i].text;

                       // var title = response['data'][i].title;
                       // var createdAt = response['data'][i].created_at;
                       // var res = createdAt.substring(0, 10);
                       // var author = response['data'][i].username;
                       // var id = response['data'][i].id;

                     //   var url = '{{ route("articles.topic", ['id' => ':id' ] ) }}';
                      //  url = url.replace(':id', id);

                        var tr_str = text;

                        $("#text").append(tr_str);
                    }
                }else{
                    var tr_str = "<tr>" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";

                    $("#text").append(tr_str);
                }

            }
        });
    }

</script>
