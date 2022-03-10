<script>
    var onChangeId = "{{ $onChangeId }}";
    var formId = "{{ $formId }}";
    var errorPlacement = "{{ $errorPlacement }}";
    var url = "{{ $url }}";

    $(document).ready(function(){
        $('#'+onChangeId).change(function(e){
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var formData = new FormData($('#'+formId)[0]);
            $.ajax({
                type:'POST',
                url: url,
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(response)
                {
                    {{--  $.toast({
                        heading: 'Success!',
                        text: success,
                        position: 'top-right',
                        loaderBg:'#fec107',
                        icon: 'success',
                        hideAfter: 3500,
                        stack: 6
		            });  --}}
                },
                error: function(error){
                    if(error.status === 422){
                        var errors = error.responseJSON.errors.image;
                        var errorPlace = $('#'+errorPlacement)
                        for(const error of errors){
                            errorPlace.text(error);
                        }
                    }
                }

            });
        });
    });
</script>
