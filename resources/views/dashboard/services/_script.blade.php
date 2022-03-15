<script>
    $(document).ready(function(){
        $('#service_type').change(function(){
            let serviceType = $(this).val();

            switch(serviceType){
                case 'brand':
                $('#mobile_brand_container').css('display','block');
                $('#mobile_model_container').css('display','none')
                break;
                case 'model':
                $('#mobile_model_container').css('display','block')
                $('#mobile_brand_container').css('display','none')
                break;
                default:
                $('#mobile_model_container').css('display','none')
                $('#mobile_brand_container').css('display','none')
            }
        });
    });
</script>
