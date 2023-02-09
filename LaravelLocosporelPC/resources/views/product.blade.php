@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infinite Scroll</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class=col-md-12>
                    
                    </div>
                    <div class="col-md-12" id="post-data">
                        @include('data')
                        </div>
                </div>
            </div>
        </section>
    <script>
        function loadMoreData(page){
            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    beforeSend: function()
                    {
                        $('.ajax-load').show();
                        }
                    })
                    .done(function(data)
                    {
                        if(data.html == " "){
                            $('.ajax-load').html("No more records found");
                            return;
                            }
                            $('.ajax-load').hide();
                            $("#post-data").append(data.html);
                            })
                            .fail(function(jqXHR, ajaxOptions, thrownError)
                            {
                                alert('server not responding...');
                                });
                            }
                            var page = 1;
                            $(window).scroll(function(){
                                if($(window).scrollTop() + $(window).height() >= $(document).height()){
                                    page++;
                                    loadMoreData(page);
                                    }
                                });
                            
    </script>
    </body>
    </html>
    @endsection